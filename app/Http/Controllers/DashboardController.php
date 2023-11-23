<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        $data = DB::table('products')->where('idtype_topup', 1)->where('is_popular', 1)->get();
        $data_voucher = DB::table('products')->where('idtype_topup', 2)->get();
        $data_popular = DB::table('products')->where('idtype_topup', 1)->get();
        $data_bg = DB::table('backgrounds')->get();
        return view('dashboard', ['popular' => $data, 'dpopular' => $data_popular, 'dvoucher' => $data_voucher, 'bg' => $data_bg]);
    }

    public function search(Request $request){
        $searchTerm = $request->input('query');

        $product = DB::table('products')->where('name', 'LIKE', '%'.$searchTerm.'%')->get();
        $data_bg = DB::table('backgrounds')->get();

        return view('search', ['product' => $product, 'dproduct', 'bg' => $data_bg]);
    }
}
