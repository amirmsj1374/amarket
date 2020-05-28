<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    protected $fillable = [
        'name','IsActive'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'category_id');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
