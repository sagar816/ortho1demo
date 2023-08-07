<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('home');
    }

    public function register(Request $request)
    {   
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confir' => 'required|same:password'
            ]
            );
        echo "<pre>";
        print_r($request -> all());      // jo bhi request me data aaya hai wo mujhe hume dikh paye on page
    }


}
