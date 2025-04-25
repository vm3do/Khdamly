<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister(){
        return view('auth.signup');
    }

    public function showLogin(){
        return view('auth.login');
    }


    public function register(Request $request){

        $rules = [
            'name' => 'required|min:2|string|max:255',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'city' => 'required|string|min:3|max:255',
        ];
        
        if ($request->role === 'artisan') {
            $rules['category'] = 'required|string|min:3|max:255|exists:categories,id|exists:categories,name';
            $rules['bio'] = 'required|string|min:10|max:255';
            // $rules['portfolio'] = 'required|array|min:3';
            // $rules['portfolio.*'] = 'required|image|mimes:jpeg,png,jpg|max:2048';
        }

        $validated = $request->validate($rules);

        $user = User::create($validated);
        Auth::login($user);
        return redirect('/');
    }
}
