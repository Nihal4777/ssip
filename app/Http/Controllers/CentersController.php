<?php

namespace App\Http\Controllers;

use App\Mail\CenterAdded;
use App\Models\Center;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class CentersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $pwd;
    public function index()
    { 
        return view("centers.index");
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
        $center=new Center;
        $center->center_name=$request->cname;
        $center->code=$request->code;
        $center->address=$request->adddress;
        $center->area=$request->area;
        $center->pincode=$request->pincode;
        $center->save();
        $user=new User();
        $user->name=$request->uname;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->center_id=$center->id;
        $this->pwd=Str::random(6);
        $user->password=$this->pwd;
        $user->assignRole('teacher');
        $user->save();
        Mail::to($user)->send(new CenterAdded($user->email,$this->pwd));
        return view("centers.index")->with('success','Center Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function show(Center $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function edit(Center $center)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Center $center)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function destroy(Center $center)
    {
        //
    }
}
