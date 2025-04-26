<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showRegister(){
        $categories = Category::all();
        return view('auth.signup', compact('categories'));
    }

    public function showLogin(){
        return view('auth.login');
    }


    public function register(Request $request){

        // dd($request->all());

        $rules = [
            'name' => 'required|min:2|string|max:255',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'city' => 'required|string|min:3|max:255',
            'role' => 'required|in:client,artisan',
            'bio' => 'required|string|min:10|max:255'
        ];
        
        if ($request->role == 'artisan') {
            $rules['category_id'] = 'required|int|exists:categories,id';
            // exists:categories,name
            // $rules['portfolio'] = 'required|array|min:3';
            // $rules['portfolio.*'] = 'required|image|mimes:jpeg,png,jpg|max:2048';
        }

        $validated = $request->validate($rules);

        $user = User::create($validated);
        Auth::login($user);
        return redirect('/');
    }

    public function login(Request $request){

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            if (Auth::user()->role == 'artisan') {
                return redirect()->route('artisan-dashboard');
            } elseif (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('artisans');
            }
        } else {
            throw ValidationException::withMessages([
                'credentials' => 'The provided credentials do not match our records.',
            ]);
        }

    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('show.login');
        
    }
}
