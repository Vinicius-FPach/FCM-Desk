<?php

use App\Http\Controllers\User\CareerController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function (){
    Route::get('/careers', [CareerController::class, 'index'] )->name('user.careers.index');

    Route::get('/careers/{id}', [CareerController::class, 'detail'] )->name('user.careers.detail');

    Route::get('/careers/{id}/edit', [CareerController::class, 'edit'] )->name('user.careers.edit');
    Route::post('/careers/{id}', [CareerController::class, 'update'] )->name('user.careers.update');

    Route::get('/careers/{id}/create', [CareerController::class, 'create'] )->name('user.careers.create');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('user.dashboard');
});