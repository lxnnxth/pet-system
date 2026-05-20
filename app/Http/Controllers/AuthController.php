<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin() {
        return view('admin.index'); 
    }

    public function showRegister() {
        return view('admin.register'); 
    }

    public function register(Request $request) {
        $request->validate([
            'full_name' => 'required|string',
            'username'  => 'required|unique:tblusers,username',
            'email'     => 'required|email|unique:tblusers,email',
            'password'  => 'required|min:4',
        ]);

        User::create([
            'username'  => $request->username,
            'full_name' => $request->full_name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('register_success', 'Registration successful.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:4',
        ]);
    
        $user = User::where('username', $request->username)->first();
        if ($user && Hash::check($request->password, $user->password)) {
           
            session(['user' => $user]);
            return redirect()->route('admin.dashboard');
        }
        
        return back()->with('error', 'Invalid username or password.');
    }
}    