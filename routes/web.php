<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\SubscribeController;
use App\Models\Subscriber;



Auth::routes();
Route::resource('subscribe', SubscribeController::class);







// Route::get('/create', [App\Http\Controllers\SubscribeController::class, 'create'])->name('create');
// Route::get('/cancel/{id}', [App\Http\Controllers\SubscribeController::class, 'cancel'])->name('cancel');
// Route::get('/edit/{id}', [App\Http\Controllers\SubscribeController::class, 'edit'])->name('edit');


//Route::get('/subscribe/edit/{id}', [App\Http\Controllers\SubscribeController::class, 'edit'])->name('edit');


// Route::get('/create', [App\Http\Controllers\SubscribeController::class, 'create'])->name('create');
// Route::post('/create', [App\Http\Controllers\SubscribeController::class, 'create'])->name('create');
//Route::post('/edit/{id}', [App\Http\Controllers\SubscribeController::class, 'update'])->name('update');
// Route::get('/create', [App\Http\Controllers\SubscribeController::class, 'create'])->name('create');
//Route::get('/create', SubscribeController::class,'@create');
//Route::get('/cancel/{id}', SubscribeController::class . '@cancel');
