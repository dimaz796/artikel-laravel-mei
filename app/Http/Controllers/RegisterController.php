<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Dd;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');

    }

   
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password_real' => 'required|string|min:8',
        ]);

        // Buat pengguna baru
        User::create([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password_real),
        ]);

        // Redirect ke halaman login atau halaman lain setelah registrasi
        return redirect('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}

 
