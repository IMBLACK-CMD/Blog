<?php

namespace App\Http\Controllers\Auth;

use App\models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    


    }
}
