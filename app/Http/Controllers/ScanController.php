<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScanController extends Controller
{
    public function caption(Request $request)
    {
        $request->validate(['image' => 'required|string']);

        $response = Http::timeout(30)
            ->withToken(config('services.hf.key'))   // safer than env()
            ->post(
                'https://api-inference.huggingface.co/models/Salesforce/blip-image-captioning-base',
                [$request->image]                   // plain base64 string
            );

        abort_unless($response->successful(), 500, 'HF API error');

        $caption = $response->json()[0]['generated_text'] ?? 'Product';

        // naive keyword map – extend freely
        $map = [
            'sofa'     => ['category'=>'SOFAS','tags'=>'modern'],
            'chair'    => ['category'=>'ARMCHAIRS','tags'=>'modern'],
            'table'    => ['category'=>'DINING_TABLES','tags'=>'minimalist'],
            'bed'      => ['category'=>'BEDS','tags'=>'cozy'],
            'wardrobe' => ['category'=>'WARDROBES','tags'=>'modern'],
        ];

        $best = collect($map)->first(fn($v,$k) => str_contains(strtolower($caption), $k))
                 ?: ['category'=>'SOFAS','tags'=>'modern'];

        return response()->json([
            'caption'  => $caption,
            'category' => $best['category'],
            'tags'     => $best['tags'],
        ]);
    }
}