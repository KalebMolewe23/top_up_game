<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Background;
use Illuminate\Support\Facades\Storage;

class CmsController extends Controller
{
    public function index(){
        
        $data = DB::table('background')->get();
        
        return view('admin.cms.v_background', ['bg' => $data]);
    }

    public function update(Request $request, Background $background){
        $this->validate($request, [
            'bg_name'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bg_color'          => 'required',
            'bg_color_second'   => 'required'
        ]);

         //check if image is uploaded
         if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            dump($image);
            die();
            $image->storeAs('public/assets/logo/', $image->hashName());

            //delete old image
            Storage::delete('public/assets/logo/'.$background->image);

            //update post with new image
            $background->update([
                'bg_name'           => $image->hashName(),
                'bg_color'          => $request->bg_color,
                'bg_color_second'   => $request->bg_color_second
            ]);

        } else {

            //update post without image
            $background->update([
                'bg_color'          => $request->bg_color,
                'bg_color_second'   => $request->bg_color_second
            ]);
        }

        return redirect()->route('background');
    }
}
