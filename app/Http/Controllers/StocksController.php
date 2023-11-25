<?php

namespace App\Http\Controllers;

use App\Models\Current;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function current(Request $request)
    {
        $user=auth()->user();
        $stocks=DB::table('stocks as d')->where(['d.center_id'=>$user->center_id,])->join('items as i','d.item_id','i.id')->join('categories as c','category_id','c.id')->get(['d.id as id','i.name as itemName','c.name as cname','d.qnt as qnt','d.updated_at as updated_at']);
        return view('current',compact('stocks'));
    }



    // public function updateIds(Request $request)
    // {
    //     foreach($request->ids as $id)
    //     {
    //         $stock=Stock::find($id);
    //         $c=Current::where(['item_name'=>$stock->item_name,'center_id'=>$stock->center_id])->count();
    //         if($c){
    //             DB::table('currents')->where(['item_name'=>$stock->item_name,'center_id'=>$stock->center_id])->increment('qnt', $stock->qnt);    
    //         }
    //         else{
    //             $current=new Current;
    //             $current->item_cat=$stock->item_cat;
    //             $current->item_name=$stock->item_name;
    //             $current->qnt=$stock->qnt;
    //             $current->center_id=$stock->center_id;
    //             $current->save();
    //         }
    //     }
    //     DB::table('stocks')->whereIn('id',$request->ids)->update(['status' => 1]);
    //     return Redirect::back()->with('success','Status Updated');
    // }



    public function index()
    {
        //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $stock=new Stock;
        // $stock->item_cat=$request->cat;
        // $stock->qnt=$request->qnt;
        // $stock->item_name=$request->item_name;
        // $stock->center_id=$request->center_code;
        // $stock->status=0;
        // $stock->save();
        // return Redirect::back()->with('message','Item Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
