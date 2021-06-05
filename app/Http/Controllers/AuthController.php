<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function postlogin(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('message', 'username atau passowrd salah');
    }
    public function register(){
        return view('auth.register');
    }
    public function postregister(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->passowrd);
        $user->save();

    //    User::create($request->all());
       return redirect()->route('login')->with('message','Anda Berhasil Mendaftar');
    }
}
