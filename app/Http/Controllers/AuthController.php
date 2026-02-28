<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm():View {
        return view('auth.login');
    }

    public function login(Request $request):View {
        
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],
        [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Please enter your password,',
        ]
        );

    }

    public function showRegistration():view {
        return view('auth.register');
    }
    
    public function register():view {

    }
    
    
}
