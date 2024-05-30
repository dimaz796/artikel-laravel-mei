<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'], // Menggunakan aturan validasi 'required'
            'password' => ['required'],
        ]);
    

        if (Auth::attempt($credentials)) {
            $user = DB::table('users')->where('username', $request->post('username'))->first();
            
            
            $request->session()->put('id_user',$user->id);
            $request->session()->put('name_user',$user->name);
    
            return redirect()->intended('/');
        }
    
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }
    
    public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        }
}
