<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($id){

        $data = DB::table('product')->where('idproduct',$id)->join('developer', 'developer.iddeveloper', '=', 'product.iddeveloper')->get();
        $data_price = DB::table('price_list')->where('idproduct', $id)->get();

        return view('order', ['product' => $data, 'price' => $data_price]);
    }
}
