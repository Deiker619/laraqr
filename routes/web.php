<?php

use App\Livewire\Qr\ShowQr;
use Illuminate\Support\Facades\Route;

use function Termwind\render;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/code', [ShowQr::class, 'render'])->name('qrcode');
});
