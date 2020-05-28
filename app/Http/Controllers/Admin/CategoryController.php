<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use foo\bar;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nodes = Category::withDepth()->with('descendants')->get();
        return view('admin.category.AllCategory', compact('nodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.category.AddCategory', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
//        $category = auth()->user()->categories()->create([
//            'name' => $request->category,
//            'IsActive' => 1
//        ]);
        $category = Category::create([
            'name' => $request->category,
            'IsActive' => $request->IsActive ? $IsActive = 1 : $IsActive = 0
        ]);
        if ($request->parent && $request->parent !== 'none') {
            $node = Category::find($request->parent);
            $node->appendNode($category);
        }
        return redirect()->back();
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
    public function update(Category $category)
    {
        if ($category->IsActive ==1){
            $category->update([
                'IsActive'=>0
            ]);
        }else{
            $category->update([
                'IsActive'=>1
            ]);
        }
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('category.index'));
    }
}
