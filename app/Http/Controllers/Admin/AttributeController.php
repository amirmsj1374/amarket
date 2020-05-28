<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attribute;
use App\Category;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('PAttribute')) {
            $categories = Category::get();
            $category = Category::find($request->PAttribute);
            $attrs = $category->attributes()->get();
            return view('admin.attribute.AllAttribute', compact(['attrs', 'categories']));
        } else {
            $categories = Category::get();
            return view('admin.attribute.AllAttribute', compact(['categories']));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            $categories = Category::get();
            return view('admin.attribute.AddAttribute', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'attribute' => 'required',
            'type' => 'required',
        ]);
       
        Attribute::create([
          
            'category_id' => $request->category_id,
            'name' => $request->attribute,
            'type' => $request->type,
            'parent_id'=>$request->attrsprent,
            'qty'=>$request->qty ? $qty = 1 : $qty = 0,
            'IsActive' => $request->IsActive ? $IsActive = 1 : $IsActive = 0,
            'price'=>$request->price ? $price = 1 : $price = 0,
            
        ]);

        return redirect(Route('attribute.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Attribute $attribute)
    {
        if ($attribute->IsActive == 1) {
            $attribute->update([
                'IsActive' => 0
            ]);
        } else {
            $attribute->update([
                'IsActive' => 1
            ]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return redirect()->back();
    }
}
