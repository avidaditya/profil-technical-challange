<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function ckeditorUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $img = ImageService::saveImage($request->file('upload'), 'images/media');
            $locationAsArray = explode('/', $img);

            return response()->json([
                'fileName' => end($locationAsArray),
                'uploaded' => 1,
                'url' => ImageService::getImageUrl($img),
            ]);
        }
    }
}
