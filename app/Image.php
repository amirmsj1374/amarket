<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    public $timestamps = false;
    protected $casts = [
        'images' => 'array'
    ];
    protected $fillable = ['note', 'imagesTitle', 'images', 'product_id'];

    public static function make($path)
    {
        $photo = new self;
        $photo->path = $path;
        $photo->save();
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
