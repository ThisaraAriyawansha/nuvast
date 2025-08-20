<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class ImageScanController extends Controller
{
    public function scanImage(Request $request)
    {
        try {
            $image = $request->file('image');
            $imagePath = $image->getRealPath();
            $imageAnnotator = new ImageAnnotatorClient();
            $imageContent = file_get_contents($imagePath);
            $response = $imageAnnotator->labelDetection($imageContent);

            $labels = $response->getLabelAnnotations();
            $recognizedData = [
                'success' => true,
                'productName' => 'Unknown Product',
                'category' => '',
                'tags' => 'None',
                'description' => 'No description available.'
            ];

            foreach ($labels as $label) {
                $description = $label->getDescription();
                if (stripos($description, 'sofa') !== false) {
                    $recognizedData['productName'] = 'Modern Sofa';
                    $recognizedData['category'] = 'SOFAS';
                    $recognizedData['tags'] = 'modern';
                    $recognizedData['description'] = 'A sleek, modern sofa with premium fabric upholstery.';
                } elseif (stripos($description, 'table') !== false) {
                    $recognizedData['productName'] = 'Dining Table';
                    $recognizedData['category'] = 'DINING_TABLES';
                    $recognizedData['tags'] = 'modern';
                    $recognizedData['description'] = 'A sturdy dining table with a minimalist design.';
                }
            }

            $imageAnnotator->close();
            return response()->json($recognizedData);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}