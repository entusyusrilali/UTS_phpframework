<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
       $email = $request->email;
       $password = $request->password;

       $user = User::where('email', $email)->where('password', $password)->first();
       if ($user) {
        return redirect('/beranda');
       } else{
        echo "Password Salah";
       }
    }
}
