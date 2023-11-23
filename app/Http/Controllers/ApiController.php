<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Consumption;
use App\Models\ConsumptionDocument;
use App\Models\Item;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function get_cat(Request $request)
    {
        return response()->json(['data'=>Item::where('category_id',$request->id)->get()]);
    }
    public function consumption_view(Request $request){
        // $user=auth()->user();
        // $cat=Categories::all();
        $date=$request->date;
        if(empty($date))
            $date=date('Y-m-d',strtotime('yesterday'));
        $consumptions=DB::table('consumptions as g')->where(['center_id'=>$request->center_id,'date'=>$date])->join('items as i','g.item_id','i.id')->join('categories as c','category_id','c.id')->get(['g.id as id','i.name as itemName','c.name as cname','g.created_at as created_at','qnt']);
        $cds=ConsumptionDocument::where(['center_id'=>$request->center_id,'date'=>$date])->get();
        return response()->json(['status'=>'success','message'=>'Consumption details entered successfully','cons_data'=>$consumptions,'docs_data'=> $cds]);
    }
    public function consumption_store(Request $request)
    {

        $user=auth()->user();
        if(!empty($request->item))
            foreach($request->item as $i=>$item)
            {
                $cons=new Consumption(['item_id'=>$item,'qnt'=>$request->qnt[$i],'center_id'=>$user->center_id,'date'=>now()]);
                // $cons->save();
                $stock=Stock::where(['item_id'=>$item,'center_id'=>$request->center_id,])->first();
                $stock->qnt-=$request->qnt[$i];
                // $stock->save();
            }
        if (!file_exists('documents')) {
            mkdir('documents', 666, true);
        }
        if(!empty($request->documents))
            foreach($request->documents as $file)
            {
                $filename='documents/'.time().'_'.$file->getClientOriginalName();
                // $file->move(public_path('documents'),$filename);
                $cd=new ConsumptionDocument;
                $cd->date=date('Y-m-d');
                $cd->center_id=$user->center_id;
                $cd->file=$filename;
                // $cd->save();
            }
        return response()->json(['status'=>'success','message'=>'Consumption details entered successfully']);
    }
}
