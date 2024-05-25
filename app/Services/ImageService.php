<?php

namespace App\Services;

class ImageService
{
    public static function saveImage($fileImage, $destination = 'images')
    {
        $imgExt = $fileImage->getClientOriginalExtension();
        $fileImageName = time().uniqid() . '.' . $imgExt;
        $location = $fileImage->storeAs($destination, $fileImageName);
        return 'storage/' . $location;
    }

    public static function getImageUrl($path)
    {
        if (preg_match("/^https?:\/\//", $path)) {
            return $path;
        } else {
            return $path ? asset($path) : null;
        }
    }
}
