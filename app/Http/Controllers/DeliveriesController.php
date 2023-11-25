<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Grant;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* ----------------------------- Teacher -> Past Deliveries ---------------------------- */

        $user=auth()->user();
        if($user->role('teacher'))
        {
            $deliveries=DB::table('deliveries as d')->where(['d.center_id'=>$user->center_id,])->join('grants as g','d.grant_id','g.id')->join('items as i','g.item_id','i.id')->join('categories as c','category_id','c.id')->get(['d.id as id','i.name as itemName','c.name as cname','g.created_at as created_at','d.qnt as qnt','fulfilled','g.id as gid']);
            return view('deliveries',compact('deliveries'));
        }
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
        if($request->partial)
        {
            $grant=Grant::find($request->partial);
            $delivery=new Delivery();
            $delivery->grant_id=$request->partial;
            $delivery->qnt=$request->qnt;
            $delivery->center_id=$grant->center_id;
            $grant->fulfilled=$grant->fulfilled+$request->qnt;
            $stock=Stock::where(['center_id'=>$grant->center_id,'item_id'=>$grant->item_id])->first();
            if(empty($stock))
                $stock=new Stock(['center_id'=>$grant->center_id,'item_id'=>$grant->item_id]);
            $stock->qnt+=$request->qnt;
            $stock->save();
            $grant->save();
            $delivery->save();
        }
        else
        {
            $grant=Grant::find($request->complete);
            $delivery=new Delivery();
            $delivery->grant_id=$request->complete;
            $delivery->qnt=$grant->qnt-$grant->fulfilled;
            $grant->fulfilled=$grant->qnt;
            $delivery->center_id=$grant->center_id;
            $stock=Stock::where(['center_id'=>$grant->center_id,'item_id'=>$grant->item_id])->first();
            if(empty($stock))
                $stock=new Stock(['center_id'=>$grant->center_id,'item_id'=>$grant->item_id]);
            $stock->qnt+=$delivery->qnt;
            $stock->save();
            $grant->save();
            $delivery->save();
        }
       return redirect('deliveries');
    }


    public function pending()
    {
        $deliveries=DB::table('grants as g')->whereRaw('g.fulfilled<g.qnt')->join('items as i','g.item_id','i.id')->join('categories as c','category_id','c.id')->join('centers as cent','g.center_id','cent.id')->get(['g.id as id','i.name as itemName','c.name as cname','g.created_at as created_at','qnt','fulfilled','cent.center_name as center_name']);
        return view('supplier',compact('deliveries'));
    }
    public function done()
    {
        $deliveries=DB::table('deliveries as d')->join('grants as g','d.grant_id','g.id')->join('items as i','g.item_id','i.id')->join('categories as c','category_id','c.id')->join('centers as cent','d.center_id','cent.id')->get(['d.id as id','i.name as itemName','c.name as cname','g.created_at as created_at','d.qnt as qnt','fulfilled','g.id as gid']);
        return view('supplierdone',compact('deliveries'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        //
    }
}
