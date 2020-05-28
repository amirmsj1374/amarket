<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'name','IsActive','category_id', 'type','price','parent_id','qty'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function value() {
        return $this->hasOne(Value::class);
    }
}
