<?php

namespace App\Http\Controllers;

use App\Mail\CenterAdded;
use App\Models\Categories;
use App\Models\Center;
use App\Models\ConsumptionDocument;
use App\Models\Item;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;
class CentersController extends BaseController
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
        $cat=Categories::get();
        return view("centers.index",['data'=>$data,'cat'=>$cat]);
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
        $cat=Categories::get();
        // $Pstocks=Stock::where(['status'=>0,'center_id'=>$center->id])->get();
        $stocks=DB::table('stocks as d')->where(['d.center_id'=>$center->id,])->join('items as i','d.item_id','i.id')->join('categories as c','category_id','c.id')->get(['d.id as id','i.name as itemName','c.name as cname','d.qnt as qnt','d.updated_at as updated_at']);
        $grants=DB::table('grants as g')->where(['center_id'=>$center->id,])->whereRaw('g.fulfilled<g.qnt')->join('items as i','g.item_id','i.id')->join('categories as c','category_id','c.id')->get(['g.id as id','i.name as itemName','c.name as cname','g.created_at as created_at','qnt','fulfilled']);
        return view('centers.manage',compact('center','user','cat','grants','stocks'));
    }

    public function consumption_view(Request $request,$id)
    {
        $user=auth()->user();
        $cat=Categories::all();
        $date=$request->date;
        if(empty($date))
            $date=date('Y-m-d',strtotime('yesterday'));
        $consumptions=DB::table('consumptions as g')->where(['center_id'=>$id,'date'=>$date])->join('items as i','g.item_id','i.id')->join('categories as c','category_id','c.id')->get(['g.id as id','i.name as itemName','c.name as cname','g.created_at as created_at','qnt']);
        $cds=ConsumptionDocument::where(['center_id'=>$id,'date'=>$date])->get();
        return view('consumptionhistory',compact('cat','consumptions','date','cds'));
    }
    public function stock_view(Request $request,$id)
    {
        $user=auth()->user();
        $stocks=DB::table('stocks as d')->where(['d.center_id'=>$id,])->join('items as i','d.item_id','i.id')->join('categories as c','category_id','c.id')->get(['d.id as id','i.name as itemName','c.name as cname','d.qnt as qnt','d.updated_at as updated_at']);
        return view('current',compact('stocks'));
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
