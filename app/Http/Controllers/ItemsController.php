<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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
        $items=Item::with('category')->get();
        return view('items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=new Item();
        $categories=Categories::all();
        return view('items.create',compact('category','categories'));
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
        $category->category_id=$request->category_id;
        $category->save();  
        return redirect(route('items.index'))->withSuccess("Item Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $categories=Categories::all();
        $category=$item;
        $id=$category->id;
        $name=$category->name;
        $type=$category->type;
        if(empty($category)){
            return redirect(route('items.index'))->withError("Invalid Id");
        }
        return view('items.edit',compact('id','name','type',"category",'categories'));
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
            return redirect(route('items.index'))->withError("Invalid Id");
        }
        $category->name=$request->category_name;
        $category->category_id=$request->category_id;
        $category->save();
        return redirect(route('items.index'))->withSuccess("items updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return response()->json(['status'=>true]);
    }
    // public function get_items()
    // {
    //     return response()->json(['status'=>true,'data'=>Item::where('type','E')->get()]);
    // }
}
