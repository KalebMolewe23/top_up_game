<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $data = DB::table('products')->join('developers', 'developers.iddeveloper', '=', 'products.iddeveloper')->join('type_topups', 'type_topups.idtype_topup', '=', 'products.idtype_topup')->get();
        $data_bg = DB::table('backgrounds')->get();

        return view('admin.product.v_product', ['product' => $data, 'bg' => $data_bg]);
    }

    public function create_product(){

        $data_bg = DB::table('backgrounds')->get();
        $data_dev = DB::table('developers')->get();
        $data_type = DB::table('type_topups')->get();

        return view('admin.product.v_create_product', ['bg' => $data_bg, 'dev' => $data_dev, 'type' => $data_type]);
    }

    public function proccess_create_product(Request $request){
    
        $data = Product::create($request->all());

        if($request->hasFile('img')){
            $request->file('img')->move('assets/logo/', $request->file('img')->getClientOriginalName());
            $data->img = $request->file('img')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('product')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit_product($id){
        $data = Product::where('id', $id)->join('developers', 'developers.iddeveloper', '=', 'products.iddeveloper')->join('type_topups', 'type_topups.idtype_topup', '=', 'products.idtype_topup')->first();
        $data_dev = DB::table('developers')->get();
        $data_type = DB::table('type_topups')->get();
        $data_bg = DB::table('backgrounds')->get();

        return view('admin.product.v_edit_product', ['bg' => $data_bg, 'dev' => $data_dev, 'type' => $data_type])->with('data' ,$data);
    }

    public function proccess_update_product(Request $request, $id){
        $data = Product::find($id);

        if($request->hasFile('img')){
            $request->file('img')->move('assets/logo/', $request->file('img')->getClientOriginalName());
            $data->img = $request->file('img')->getClientOriginalName();
            $data->save();
        }

        $data->iddeveloper = $request->input('iddeveloper');
        $data->idtype_topup = $request->input('idtype_topup');
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->save();

        return redirect()->route('product')->with('success', 'Data Berhasil Di Update');
    }

    public function delete_product($id){
        Product::where('id', $id)->delete();
        return redirect('/product')->with('success', 'Data Berhasil Dihapus');
    }
}
