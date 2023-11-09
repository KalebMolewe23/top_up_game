<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PriceController extends Controller
{
    public function index(){
        $data = DB::table('price_list')->join('products', 'products.idproduct', '=', 'price_list.idproduct')->orderby('price_list.idproduct', 'ASC')->get();
        $data_bg = DB::table('background')->get();

        return view('admin.price_list.v_price_list', ['price' => $data, 'bg' => $data_bg]);
    }
}
