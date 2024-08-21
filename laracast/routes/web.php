<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostConroller;
use App\Http\Middleware\LogRequests;
use App\Jobs\WelcomeEmailJob;
use App\Livewire\Counter;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
// GET
Route::get('/blog/{id}', [PostConroller::class, 'show']);

// POST
Route::get('/blog/create', [PostConroller::class, 'create']);
Route::post('/blog/{id}', [PostConroller::class, 'store']);

// PUT OR PATCH
Route::get('/blog/edit/{id}', [PostConroller::class, 'edit']);
Route::post('/blog/{id}', [PostConroller::class, 'update']);

// DELETE
Route::delete('/blog/{id}', [PostConroller::class, 'destroy']);

// MULTIPLE ROUTES
Route::match(['GET', 'POST'], '/blog', [PostConroller::class, 'index']);

