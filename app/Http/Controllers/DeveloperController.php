<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Developer;

class DeveloperController extends Controller
{
    public function index(){
        $data = DB::table('developers')->get();
        $data_bg = DB::table('background')->get();

        return view('admin.developer.v_developer', ['developer' => $data, 'bg' => $data_bg]);
    }

    public function create_dev(){

        $data_bg = DB::table('background')->get();

        return view('admin.developer.v_create_developer', ['bg' => $data_bg]);
    }

    public function proccess_create_dev(Request $request){
    
        $validatedData = $request->validate([
            'developer_name' => 'required',
        ]);

        
        Developer::create($validatedData);

        return redirect('/developer')->with('success', 'Record created successfully');
    }

    public function edit_dev($id){
        $data = developer::where('iddeveloper', $id)->first();
        $data_bg = DB::table('background')->get();

        return view('admin.developer.v_edit_developer', ['bg' => $data_bg])->with('data', $data);
    }

    public function proccess_update_dev(Request $request, $id){

        $request->validate([
            'iddeveloper'       => 'required',
            'developer_name'    => 'required'
        ]);

        $data = [
            'iddeveloper'       => $request->iddeveloper,
            'developer_name'    => $request->developer_name,
        ];

        Developer::where('iddeveloper', $id)->update($data);
        return redirect('/developer')->with('success', 'Record created successfully');
    }

    public function delete_dev($id){
        Developer::where('iddeveloper', $id)->delete();
        return redirect('/developer')->with('success', 'Record created successfully');
    }
}
