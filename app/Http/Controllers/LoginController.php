<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(request $request){

      $request->validate([
            'username'=>'required|min:4',
            'password'=>'required|min:6'
        ]);

        $credentials = $request->only('username','password');


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('home');

        }

throw ValidationException::withMessages([
    'username'=>__('Invalid username or password'),//set error message
])->redirectTo(route('login'));


    }
}
