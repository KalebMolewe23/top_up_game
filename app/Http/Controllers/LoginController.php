<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    //action saat proses login berjalan
    public function login(){
        //saat berhasil login
        if (Auth:: check()){
            return redirect('home');
        //saat tidak berhasil login
        }else{
            return view('login');
        }
    }

    //action untuk user memasukan indetitas diri
    public function actionlogin(Request $request){
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        //proses saat memasukan data dan data valid
        if (Auth::Attempt($data)){
            return redirect('home');
        //proses saat memasukkan data dan data tidak valid
        }else{
            Session::flash('error', 'Email Atau Password Anda Salah');
            return redirect('/');
        }
    }

    //action saat user melakukan logout
    public function actionlogout(){
        Auth::logout();
        return redirect('/');
    }
}
