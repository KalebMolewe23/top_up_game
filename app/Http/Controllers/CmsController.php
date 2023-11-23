<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SocialMediaModel;
use App\Models\Background;
use App\Models\AboutModel;
use Illuminate\Support\Facades\Storage;

class CmsController extends Controller
{
    public function index(){
        
        $data = DB::table('backgrounds')->get();
        
        return view('admin.cms.v_background', ['bg' => $data]);
    }

    public function update(Request $request, $id){

        $data = Background::find($id);
        if($request->hasFile('bg_name')){
            $request->file('bg_name')->move('assets/logo/', $request->file('bg_name')->getClientOriginalName());
            $data->bg_name = $request->file('bg_name')->getClientOriginalName();
            $data->save();
        }
        $data->bg_color = $request->input('bg_color');
        $data->bg_color_second = $request->input('bg_color_second');
        $data->save();

        return redirect()->route('background')->with('success', 'Data Berhasil Di Simpan');
    }

    public function social_media(){
        $data = DB::table('backgrounds')->get();
        $data_sosmed = DB::table('social_media_models')->get();
        
        return view('admin.cms.v_social', ['bg' => $data, 'sosmed' => $data_sosmed]);
    }

    public function changeStatus(Request $request)
    {
        $sosmed = SocialMediaModel::find($request->id);

        if($sosmed){
            if($sosmed->status_sosmed){
                $sosmed->status_sosmed = 0;
            }else{
                $sosmed->status_sosmed = 1;
            }
        $sosmed->save();
        }
        return back();
    }

    public function update_sosmed(Request $request, $id){
        $data = SocialMediaModel::find($id);
        $data->link_sosmed = $request->input('link_sosmed');
        $data->save();

        return redirect()->route('social_media')->with('success', 'Data Berhasil Di Simpan');

    }

    public function about(){
        $data = DB::table('backgrounds')->get();
        $data_about = DB::table('about_models')->get();
        
        return view('admin.cms.v_about', ['bg' => $data, 'about' => $data_about]);
    }

    public function update_about(Request $request, $id){
        $data = AboutModel::find($id);
        $data->name_website = $request->input('name_website');
        $data->phone = $request->input('phone');
        $data->save();

        return redirect()->route('about')->with('success', 'Data Berhasil Di Simpan');

    }
}
