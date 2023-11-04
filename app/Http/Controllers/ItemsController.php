<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Item::all();
        return view('items.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=new Item();
        return view('admin.categories.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['category_name'=>'required']);
        $category=new Item;
        $category->name=$request->category_name;
        $category->save();
        return redirect(route('categories.index'))->withSuccess("Category Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $category=$item;
        $id=$category->id;
        $name=$category->name;
        if(empty($category)){
            return redirect(route('items.index'))->withError("Invalid Id");
        }
        return view('items.edit',compact('id','name',"category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $category=$item;
        if(empty($category)){
            return redirect(route('categories.index'))->withError("Invalid Id");
        }
        $category->name=$request->category_name;
        $category->save();
        return redirect(route('categories.index'))->withSuccess("Category updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $category=$item;
        $category->delete();
        return response()->json(['status'=>true]);
    }
}
