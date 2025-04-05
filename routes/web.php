<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class)->name('login');
Route::get('/login', Login::class);
