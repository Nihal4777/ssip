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
        return view('items.create',compact('category'));
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
        $category->type=$request->item_type;
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
        $category=$item;
        $id=$category->id;
        $name=$category->name;
        $type=$category->type;
        if(empty($category)){
            return redirect(route('items.index'))->withError("Invalid Id");
        }
        return view('items.edit',compact('id','name','type',"category"));
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
        return;
        $category=$item;
        $category->delete();
        return redirect(route('items.index'))->withSuccess("item deleted successfully");
    }
    // public function get_items()
    // {
    //     return response()->json(['status'=>true,'data'=>Item::where('type','E')->get()]);
    // }
}
