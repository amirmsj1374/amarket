<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\Image;
use App\Category;
use App\Attribute;

class AjaxController extends Controller
{
    public function main($method) {
        if(method_exists($this,$method)){
            $this->$method();
        } else {
            abort(404);
        }
    }

    public function activeData() {
            $product = Product::find(request('id'));
            $product->active = ! $product->active ;
            $product->save();
    }

    public function category() {
        $cat = Category::find(request('id'));
        $cat->IsActive = ! $cat->IsActive ;
        $cat->save();
    }

    public function attrs() {
        $attrs = Attribute::find(request('id'));
        $attrs->IsActive = ! $attrs->IsActive ;
        $attrs->save();
    }

    public function deleteImage(){
        $images = Product::find(request('id'))->images()->get()->toArray();
        foreach ($images as $key1 => $image) {
            foreach ($image['images'] as $key2 => $img) {
                foreach ($img as $key3 =>  $item) {
                    foreach ($item as $key4 => $i) {
                        if ($i == request('path')) {
                            $imageId = $image['id'];
                            $clue1 = $key4;
                            $clue2 = $key3;
                            $clue3 = $key2;
                            delete_file($i);
                        }
                    }
                }
            }
            unset($image['images'][$clue3][$clue2][$clue1]);
            Image::where('id', $imageId)->select('images')->update($image);
        }
    }

    public function selectattrs ($id){
         $category = Category::find($id);
         return  $attrs = $category->attributes()->get();
    }

}
