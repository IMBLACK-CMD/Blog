<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        //validate
        //store 
        // sign the user in
        //redirect
       
   
        $this->validate($request,[
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed',

        ]);

        User::create([
             'name'=>$request->name,
             'username'=>$request->username,
             'email'=>$request->email,
             'password'=>Hash::make($request->password),

        ]);
       Auth::attempt(['email', 'password']);
        return redirect()->route('login');

    }
}
