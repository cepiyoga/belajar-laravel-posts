<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=>'Register',
            'active'=>'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|max:255',
            'username'=>['required','min:3','max:255','unique:users'],
            'email'=>'required|email:dns|unique:users',
            // 'password'=>'required|min:5|max:255'
            'password' => [
                'required',
                'string',
                'min:5',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                // 'regex:/[@$!%*#?&]/' //Scpecial Char
            ]
        ]);

        //dd($validatedData);

        User::create($validatedData);
        // $request->session()->flash('success','Registration sucessfully, please login');
        return redirect('/login')->with('success','Registration sucessfully, please login');
    }
}
