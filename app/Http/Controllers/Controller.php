<?php

namespace App\Http\Controllers;

use App\Models\Grant;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function dashboard(Request $request)
    {
        return view('dashboard');
    }





    /* ----------------------------- Aanganwadi only ---------------------------- */
    public function assigned()
    {

        $Pstocks=DB::table('grants as g')->where(['center_id'=>auth()->user()->center_id,])->whereRaw('g.fulfilled<g.qnt')->join('items as i','g.item_id','i.id')->join('categories as c','category_id','c.id')->get(['g.id as id','i.name as itemName','c.name as cname','g.created_at as created_at','qnt','fulfilled']);
        // $Dstocks=Grant::where(['status'=>1,'center_id'=>auth()->user()->center_id])->get();
        return view('assigned',compact('Pstocks'));
    }
}
