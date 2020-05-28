<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $table = 'products';
    public $timestamps = true;

    protected $dates = ['deleted_at'];
    protected $fillable = array('title', 'sku', 'description', 'body', 'active','tags');
    // protected $visible = array('id','title', 'sku', 'description', 'body', 'active','tags');

    public function path() {
        return "/product/$this->slug";
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function attributes()
    {
        return $this->hasMany('ProductAttribute', 'product_id');
    }

    public function carts()
    {
        return $this->hasManyThrough('Cart', 'CartItem');
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function values() {
        return $this->hasMany(Value::class);
    }

}
