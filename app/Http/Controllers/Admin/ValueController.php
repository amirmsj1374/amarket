<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attribute;
use App\Category;
use App\Product;
use App\Value;

class ValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {




        $products=Product::with('categories')->get();
        $categories=$products->find($id);
          foreach( $categories->categories  as $value){
         $attributes= Attribute::where('category_id',$value['id'])->get();
          }

        //   exit();
       return view('admin.values.input', compact('id', 'attributes','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $categories = Product::find($request->product_id)->categories->toArray();
        foreach ($categories as $key => $cat) {
            // dd($cat['id']);
            $attributes = Category::find($cat['id'])->attributes->toArray();
        }
        foreach ($attributes as $key => $attribute) {
            $item = strval($attribute['id']);
            if ($attribute['id'] && $item) {
                // dd($item);
                Value::create([
                    'product_id' => $request->product_id,
                    'attribute_id' => $item,
                    'value' => $request->$item,
                ]);
            }
        }
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Product::with('categories')->get();

        $categories=$products->find($id);
          foreach( $categories->categories  as $value){
            $attributes= Attribute::where('category_id',$value['id'])->get();
          }

        return view('admin.values.input', compact('id', 'attributes','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Value $value)
    {
        $product = Product::find($request->product_id);
        foreach ($product->values as $key => $oldvalue) {
            $oldvalue->delete();
        }
        $categories = $product->categories->toArray();
        foreach ($categories as $key => $cat) {
            $attributes = Category::find($cat['id'])->attributes->toArray();
        }
        foreach ($attributes as $key => $attribute) {
            $item = strval($attribute['id']);
            if ($attribute['id'] && $item) {
                Value::create([
                    'product_id' => $request->product_id,
                    'attribute_id' => $item,
                    'value' => $request->$item,
                ]);
            }
        }
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
