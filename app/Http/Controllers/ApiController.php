<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Item;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get_cat(Request $request)
    {
        return response()->json(['data'=>Item::where('category_id',$request->id)->get()]);
    }
}
