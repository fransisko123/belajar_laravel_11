<?php

use App\Livewire\About;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', action: App\Livewire\Books\Index::class)->name('book.index');
Route::get('/about', About::class)->name('about');