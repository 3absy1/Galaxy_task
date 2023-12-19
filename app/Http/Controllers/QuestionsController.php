<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function show()
    {
        return view('questions',[
            'questions'=>Questions::all(),
            'name'=>auth()->user(),
        ]);
    }
// *************************** Create Questions *************************

    public function create(Request $request)
    {
        Questions::create([
            'name' => $request->input('name'),
            'text' => $request->input('text'),
            'choices' => json_encode($request->input('choices'))

        ]);

        return redirect('questions')->with('status','Created Successfully');
    }

    public function preview(){
        return view('preview',[
            'questions'=>Questions::all(),

        ]);

    }

    public function logout()
    {
        auth()->logout();

        return redirect('Login')->with('success', 'Goodbye!');
    }
}
