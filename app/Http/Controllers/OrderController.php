<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($id){

        $data = DB::table('products')->where('id',$id)->join('developers', 'developers.iddeveloper', '=', 'products.iddeveloper')->get();
        $data_price = DB::table('price_list')->where('idproduct', $id)->get();
        $data_bg = DB::table('backgrounds')->get();

        return view('order', ['product' => $data, 'price' => $data_price, 'bg' => $data_bg]);
    }
}
