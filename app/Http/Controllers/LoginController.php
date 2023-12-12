<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function postlogin (Request $request){
         
         
        if(Auth::attempt($request->only('email','password'))){
            Alert::success('Anda Berhasil Login');
            return redirect('/beranda');
        }else{
            Alert::error('flash_message_eror','Email atau Password anda salah!!');
            return redirect('login');
        }
        
       // dd($request->all());
     }

     public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }

    public function Registrasi(){
        return view('Data_User.Registrasi');

    }

    public function simpanregistrasi(Request $request){
        User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            
        ]);

        Alert::success('Registrasi Yang Anda Lakukan Berhasil, Silahkan Lakukan Login Terlehih Dahulu');

      return redirect('login');

    }
}
