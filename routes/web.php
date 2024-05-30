<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Models\Post;    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Register;
use Faker\Guesser\Name;

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




Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Saya",
        "nama" => "Dimas Aditya",
        "email" => "Dimas Aditya@gmail.com",
        "foto" => "14MPNA.jpg"
    ]);
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/proses_login', [LoginController::class, 'login'])->name('proses_login');

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store'])->name('register.store');


Route::get('/blog',[PostController::class,'index']);
Route::get('/blog/{post:slug}',[PostController::class,'show']);
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('artikel.edit');
Route::put('/posts/{id}/update', [PostController::class, 'update'])->name('artikel.update');
Route::get('/artikel/tambah',[PostController::class,'create']);
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('artikel.destroy');
Route::post('/posts', [PostController::class, 'store']);

Route::get('/categories/{category:slug}',[CategoryController::class,'show']);
Route::get('/categories',[CategoryController::class,'index']);
Route::get('/tambah_category',[CategoryController::class,'create'])->name('tambah_category');
Route::post('/categories/proses',[CategoryController::class,'store'])->name('category.store');



Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');