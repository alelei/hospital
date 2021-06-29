<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UserLivewire;
use App\Http\Livewire\Pacientcontrol;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/users', UserLivewire::class)->name('users');

Route::middleware(['auth:sanctum', 'verified'])->get('/pacients', Pacientcontrol::class)->name('pacients');
