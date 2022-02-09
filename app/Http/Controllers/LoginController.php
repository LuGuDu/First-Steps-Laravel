<?php

namespace App\Http\Controllers;

use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        $login = request('login');
        $pass = request('password');

        $user = User::all()
             ->where('name', '==', $login);

        if(count($user) == 0){
            return redirect()->back()->with('error', 'Nombre o contraseña incorrectos');   
        }  
        $password = $user[0]["password"];

        if($password == $pass)
        {
            return view('Welcome');
        }
        else {
            return redirect()->back()->with('error', 'Nombre o contraseña incorrectos');   
        }

    }
}
