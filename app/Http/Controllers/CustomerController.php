<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class CustomerController extends Controller
{
    public function index(){
        $data_cust = DB::table('customers')->get();
        $data = DB::table('background')->get();

        return view('admin.customer.v_customer', ['bg' => $data, 'customer' => $data_cust]);
    }

    public function getCustomer(){
        $data = DB::table('customer')->limit(100)->get();

        return DataTables::of($data)->make(true);
    }
}
