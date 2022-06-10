<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Livewire\Home\Index::class);

Route::get('/venues', \App\Http\Livewire\Venue\Index::class);

Route::get('/venues/create', \App\Http\Livewire\Venue\Create::class);

Route::get('/artists', \App\Http\Livewire\Artist\Index::class);

Route::get('/artists/create', \App\Http\Livewire\Artist\Create::class);

Route::get('/shows', \App\Http\Livewire\Show\Index::class);

Route::get('/shows/create', \App\Http\Livewire\Show\Create::class);