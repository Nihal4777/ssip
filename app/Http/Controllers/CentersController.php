<?php

namespace App\Http\Controllers;

use App\Mail\CenterAdded;
use App\Models\Center;
use App\Models\Item;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        $data=Center::all();
        return view("centers.index",['data'=>$data]);
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
        $request->validate([
            'email'=>'unique:users',
        ]);
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
        $user->password=Hash::make($this->pwd);
        $user->assignRole('teacher');
        $user->save();
        Mail::to($user)->send(new CenterAdded($user->email,$this->pwd));
        return redirect(route('centers.index'))->with('success','Center Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function show(Center $center)
    {
        $user=User::where('center_id',$center->id)->first();
        $cat=Item::get()->unique('type');
        $Pstocks=Stock::where(['status'=>0,'center_id'=>$center->id])->get();
        return view('centers.manage',compact('center','user','cat','Pstocks'));
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
