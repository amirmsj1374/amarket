<?php

use App\Attribute;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;


function upload($photos, $folder) {
    $year = Carbon::now()->year;
    $month = Carbon::now()->month;
    $imagePath = "storage/{$year}/{$month}/{$folder}/";
    foreach ($photos as $key => $photo) {
        $filename = randstr(). '.' .$photo->getClientOriginalExtension();
        $file = $photo->move($imagePath , $filename);

        $sizes = ["300" , "600" , "900"];
         $url['images'][$key] = resize($file->getRealPath(), $sizes, $imagePath, $filename);


        }
        return($url);
}

function randstr($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function resize($path, $sizes, $imagePath, $filename){
    $images['original'] = $imagePath . $filename;

    foreach ($sizes as $size) {
        $images[$size] = $imagePath."{$size}_".$filename;
        Image::make($path)->resize($size, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($images[$size]);
    }

    return $images;
}

function delete_file ($file) {
    if ( $file && file_exists($file)) {
        File::delete($file);
    }
}

function ShowOption($id)
{
   $options=Attribute::where('parent_id',$id)->get();
    return $options;
}