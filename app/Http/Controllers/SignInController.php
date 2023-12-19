<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function store()
    {
        $attrubuites=request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (auth()->attempt($attrubuites)){
            return redirect('questions')->with('status','Login Successfully');
        }

        return back()->withErrors(['email'=>'unauthenticated']);


    }

    public function show()
    {
        return view('signin',[
        ]);
    }
}
