<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageScanController extends Controller
{
    public function scan(Request $request)
    {
        if (!$request->hasFile('image')) {
            return response()->json(['error' => 'No image uploaded'], 400);
        }

        $imagePath = $request->file('image')->getRealPath();
        $imageData = file_get_contents($imagePath);

        // Call HuggingFace Inference API (BLIP Image Captioning)
        $ch = curl_init("https://api-inference.huggingface.co/models/Salesforce/blip-image-captioning-base");
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer " . env("HUGGINGFACE_API_KEY"),
            "Content-Type: application/octet-stream"
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $imageData);

        $response = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($response, true);
        $caption = $result[0]['generated_text'] ?? 'Unknown Product';

        // 🔹 Basic mapping from caption keywords → your categories/tags
        $type = "SOFAS"; 
        if (stripos($caption, 'chair') !== false) $type = "ARMCHAIRS";
        if (stripos($caption, 'sofa') !== false) $type = "SOFAS";
        if (stripos($caption, 'table') !== false) $type = "DINING_TABLES";
        if (stripos($caption, 'bed') !== false) $type = "BEDS";

        $tags = "modern";
        if (stripos($caption, 'vintage') !== false) $tags = "vintage";
        if (stripos($caption, 'cozy') !== false) $tags = "cozy";
        if (stripos($caption, 'minimalist') !== false) $tags = "minimalist";

        return response()->json([
            "name" => ucfirst($caption),
            "type" => $type,
            "tags" => $tags,
            "description" => $caption
        ]);
    }
}
