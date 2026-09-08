<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
 
     public function authenticate(Request $request)
    { 
       
 
        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            $request->session()->regenerate();

            return redirect()->intended('/'); // Redirect ke halaman utama
        }
 
        return back()->withErrors([
            'email' => 'Kombinasi email atau password salah.',
        ])->onlyInput('email');
    }
}
