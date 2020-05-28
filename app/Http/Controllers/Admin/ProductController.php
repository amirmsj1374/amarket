<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Image;
use App\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products=Product::with('categories','images')->get();
       
        return view('admin.products.index',compact(['products']));   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product ;
        $image = new Image ;
        $categories = Category::get();
        return view('admin.products.create-edit', compact('product', 'image', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {   
        $data = $request->all();
       
        $product = Product::create($data);
        if ($request->images) {
            $folder = $request->imagesTitle;
            $imagesUrl = upload($request->images, $folder );
            $product->images()->create(array_merge( $request->all() , ['images' => $imagesUrl ]));
        }
       
                
        $product->categories()->sync($request->caregory_id);

         
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        $images = $product->images()->get()->toArray();
        return view('admin.products.create-edit', compact('product', 'images', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();
        $dataImage = [
            'imagesTitle' => $data['imagesTitle'],
            'images' => $data['images'],
            'note' => $data['note'],
        ];
        $product->update($data);
        if ($request->images) {
            $files = $product->images()->get()->toArray();
            foreach ($files as $image) {
                foreach ($image['images'] as $img) {
                    foreach ($img as $item) {
                        foreach ($item as $i) {
                            delete_file($i);
                        }
                    }
                }
            }
            $folder = $request->imagesTitle;
            $imagesUrl = upload($request->images, $folder );
            $product->images()->update(array_merge( $dataImage , ['images' => $imagesUrl ]));
        }
        
         $product->categories()->sync($request->caregory_id);
          
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $images = $product->images()->get()->toArray();
        foreach ($images as $image) {
            foreach ($image['images'] as $img) {
                foreach ($img as $item) {
                    foreach ($item as $i) {
                        delete_file($i);
                    }
                }
            }
        }
        $product->images()->delete();
        $product->delete();
    }
}
