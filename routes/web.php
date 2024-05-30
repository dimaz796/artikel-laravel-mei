<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Models\Post;    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Register;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});

Route::get('/artikel/tambah',);


Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Saya",
        "nama" => "Dimas Aditya",
        "email" => "Dimas Aditya@gmail.com",
        "foto" => "14MPNA.jpg"
    ]);
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store'])->name('register.store');



Route::get('/blog',[PostController::class,'index']);
Route::get('/blog/{post:slug}',[PostController::class,'show']);

Route::get('/categories/{category:slug}',[CategoryController::class,'show']);
Route::get('/categories',[CategoryController::class,'index']);


Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');