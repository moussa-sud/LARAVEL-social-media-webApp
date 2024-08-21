<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function show(){

        return view('login');
    }

    public function login(Request $request){

        $email = $request->email ; 
        $password = $request->password;

        $values = ['email'=>$email , 'password'=>$password] ; 

        if (Auth::attempt($values)) {
            //here if the Authentication is true we generate the session for the user
            $request->session()->regenerate(); 
            return to_route('posts.index');
            
        } else {
            return back(); 
        }
        
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }


}
