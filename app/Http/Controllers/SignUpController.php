<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Http\Resources\Register\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function create(Request $request)
    {
        User::create([
            'name'=>$request->input('name'),
            'mobile'=>$request->input('mobile'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password'))

        ]);
        $attrubuites=request()->validate([
            'email'=>'required|email',
            'password'=>'required',
            'mobile'=>'required',
            'name'=>'required'
        ]);
        if (auth()->attempt($attrubuites)){
            return redirect('questions')->with('status','Created Successfully');
        }

    }

    public function show()
    {
        return view('signup',[
        ]);
    }
}
