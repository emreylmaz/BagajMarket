<?php


namespace App\Helpers;


class UploadPaths
{
    public static $uploadPaths = array(
        'product_photos' => '/uploads/products',

    );

    public static function getUploadPath($path)
    {
        return public_path().self::$uploadPaths[$path];
    }
}
