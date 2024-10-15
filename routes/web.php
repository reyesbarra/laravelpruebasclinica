<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;


 Route::get('/', function () {
      return view('auth/login');
  });
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function(){
     return view('dashboard.dashboard');
 });

Route::resource('paciente', PacienteController::class);

 
Auth::routes();


