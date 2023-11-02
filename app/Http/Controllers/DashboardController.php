<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        $data = DB::table('product')->where('idtype_topup', 1)->where('is_popular', 1)->where('status', 1)->get();
        $data_voucher = DB::table('product')->where('iddeveloper', 0)->where('idtype_topup', 2)->where('status', 1)->get();
        $data_popular = DB::table('product')->where('idtype_topup', 1)->where('status', 1)->get();
        return view('dashboard', ['popular' => $data, 'dpopular' => $data_popular, 'dvoucher' => $data_voucher]);
    }
}
