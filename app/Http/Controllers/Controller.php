<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Consumption;
use App\Models\ConsumptionDocument;
use App\Models\Purchase;
use App\Models\PurchaseDocument;
use App\Models\Stock;
use DateInterval;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

    public function consumption_index(){

        $cat=Categories::all();
        return view('consumptionentry',compact('cat'));
    }
    public function consumption_view(Request $request){
        $user=auth()->user();
        $cat=Categories::all();
        $date=$request->date;
        if(empty($date))
            $date=date('Y-m-d',strtotime('yesterday'));
        $consumptions=DB::table('consumptions as g')->where(['center_id'=>auth()->user()->center_id,'date'=>$date])->join('items as i','g.item_id','i.id')->join('categories as c','category_id','c.id')->get(['g.id as id','i.name as itemName','c.name as cname','g.created_at as created_at','qnt']);
        $cds=ConsumptionDocument::where(['center_id'=>auth()->user()->center_id,'date'=>$date])->get();
        return view('consumptionhistory',compact('cat','consumptions','date','cds'));
    }
    public function consumption_store(Request $request)
    {

        $user=auth()->user();
        if(!empty($request->item))
            foreach($request->item as $i=>$item)
            {
                $cons=new Consumption(['item_id'=>$item,'qnt'=>$request->qnt[$i],'center_id'=>$user->center_id,'date'=>now()]);
                $cons->save();
                $stock=Stock::where(['item_id'=>$item,'center_id'=>$user->center_id,])->first();
                $stock->qnt-=$request->qnt[$i];
                $stock->save();
            }
        if (!file_exists('documents')) {
            mkdir('documents', 666, true);
        }
        if(!empty($request->documents))
            foreach($request->documents as $file)
            {
                $filename='documents/'.time().'_'.$file->getClientOriginalName();
                $file->move(public_path('documents'),$filename);
                $cd=new ConsumptionDocument;
                $cd->date=date('Y-m-d');
                $cd->center_id=$user->center_id;
                $cd->file=$filename;
                $cd->save();
            }
        return redirect()->back()->with('success','Consumption details entered successfully');
    }


    public function purchase_index(){

        $cat=Categories::all();
        return view('purchaseentry',compact('cat'));
    }
    public function purchase_store(Request $request)
    {

        $user=auth()->user();
        if(!empty($request->item))
            foreach($request->item as $i=>$item)
            {
                $cons=new Purchase(['item_id'=>$item,'qnt'=>$request->qnt[$i],'center_id'=>$user->center_id,'date'=>now()]);
                $cons->save();
                $stock=Stock::where(['item_id'=>$item,'center_id'=>$user->center_id,])->first();
                if(empty($stock))
                    $stock=new Stock(['item_id'=>$item,'center_id'=>$user->center_id,'qnt'=>0]);
                $stock->qnt+=$request->qnt[$i];
                $stock->save();
            }
        if (!file_exists('documents')) {
            mkdir('documents', 666, true);
        }
        if(!empty($request->documents))
            foreach($request->documents as $file)
            {
                $filename='documents/'.time().'_'.$file->getClientOriginalName();
                $file->move(public_path('documents'),$filename);
                $cd=new PurchaseDocument();
                $cd->date=date('Y-m-d');
                $cd->center_id=$user->center_id;
                $cd->file=$filename;
                $cd->save();
            }
        return redirect()->back()->with('success','Purchase details entered successfully');
    }
    public function purchase_view(Request $request){
        $user=auth()->user();
        $cat=Categories::all();
        $date=$request->date;
        if(empty($date))
            $date=date('Y-m-d',strtotime('yesterday'));
        $consumptions=DB::table('purchases as g')->where(['center_id'=>auth()->user()->center_id,'date'=>$date])->join('items as i','g.item_id','i.id')->join('categories as c','category_id','c.id')->get(['g.id as id','i.name as itemName','c.name as cname','g.created_at as created_at','qnt']);
        $cds=ConsumptionDocument::where(['center_id'=>auth()->user()->center_id,'date'=>$date])->get();
        return view('purchasehistory',compact('cat','consumptions','date','cds'));
    }



}
