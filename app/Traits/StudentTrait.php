<?php
namespace App\Traits;

Trait StudentTrait
{
        function save_photo($photo, $dist)
           {
            //upload product photo

                $ext = $photo->getClientOriginalExtension();
                $file_name = time() .' .'. $ext;
                $path =$dist;
                $photo->move($path, $file_name);
                return $file_name;
           }
}

