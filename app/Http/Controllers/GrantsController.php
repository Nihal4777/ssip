<?php

namespace App\Http\Controllers;

use App\Models\Grant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GrantsController extends Controller
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

        if($request->flag==1)
        {
            foreach($request->centerids as $cids)
            {
                $grant=new Grant();
                $grant->item_id=$request->item_id;
                $grant->qnt=$request->qnt;
                $grant->center_id=$cids;
                $grant->save();
                return Redirect::back()->with('success','Items granted');
            }
        }
        else
        {
            $grant=new Grant();
            $grant->item_id=$request->item_id;
            $grant->qnt=$request->qnt;
            $grant->center_id=$request->center_id;
            $grant->save();
            return Redirect::back()->with('success','Item granted');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grant  $grant
     * @return \Illuminate\Http\Response
     */
    public function show(Grant $grant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grant  $grant
     * @return \Illuminate\Http\Response
     */
    public function edit(Grant $grant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grant  $grant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grant $grant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grant  $grant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grant $grant)
    {
        //
    }
}
