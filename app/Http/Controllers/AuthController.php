<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index (Request $request){
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');
        return view('welcome',['firstname'=>$firstName,'lastname'=>$lastName]);
    }
    public function register() {
        return view('register');
    }
}
