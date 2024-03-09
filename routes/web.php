<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::view('/', 'Index');

Route::get('dashboard' , [App\Http\Controllers\PageController::class, 'dashboard'])
->middleware('auth::sanctum')
->name('dashboard');

Route::resource('notes', App\Http\Controllers\NoteController::class);