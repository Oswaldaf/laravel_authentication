<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectControlleur;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function (){
    if (Auth::check())
    return redirect()->route('dashboard');
});

// Route::get('/', function () {
//     if (Auth::check()) {
//         return redirect()->route('dashboard');
//     }
//     return redirect()->route('login');
// });
// Route::get('/login', function () {
//     if(Auth::check())
//     return redirect()->route('dashboard');
//     return view('login');
// })->name('login');
// Route::get('/registration', function () {
//     if (Auth::check())
//     return redirect()->route('dashboard');
//     return view('registration');
// })->name('registration');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware('auth')->group(function(){
//     Route::get('/dashborad', function () {
//         return view('dashborad');
//     })->name('dashboard');
// });

Route::get('/login', [RedirectControlleur::class, 'loginForm'])->name('login');
Route::get('/registration', [RedirectControlleur::class, 'register'])->name('registration');
Route::get('/dashborad', [RedirectControlleur::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');
