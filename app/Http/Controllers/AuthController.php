<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function login(){
        return view('Auth.login');
    }
    public function LoginSubmit(request $request){
        $user = User::where(['email' => $request->email])->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
}
