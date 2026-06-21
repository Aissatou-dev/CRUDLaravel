<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login( Request $r){
        $donnes= $r->validate([
            'email'=>['required', 'email'],
            'password'=>['required']
        ]);
        if(Auth::attempt($donnes)){
            $r->session()->regenerate();
               return redirect('/');
        }
          return back()->withErrors([
            'email' => 'Identifiant incorrect.'
        ]);

    }
    public function deconnexion(){
        
    }
}
