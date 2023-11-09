<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $data = DB::table('products')->join('developers', 'developers.iddeveloper', '=', 'products.iddeveloper')->join('type_topups', 'type_topups.idtype_topup', '=', 'products.idtype_topup')->get();
        $data_bg = DB::table('background')->get();

        return view('admin.product.v_product', ['product' => $data, 'bg' => $data_bg]);
    }
}
