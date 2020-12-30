<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fornt;
use App\Http\Controllers\admin;

//public pages
Route::get('/', [fornt::class, 'list']);
Route::get('/view/{id}', [fornt::class, 'view']);
Route::get('/contact', [fornt::class, 'contact']);
Route::post('/massage', [fornt::class, 'massage']);
Route::get('/cart', [fornt::class, 'cart']);
// admin pages
Route::get('/login', [admin::class, 'login']);
Route::get('/check', [admin::class, 'check']);
Route::get('/list_admin', [admin::class, 'list_admin']);
Route::get('/view_admin/{id}', [admin::class, 'view_admin']);
Route::get('/add_admin', [admin::class, 'add_admin']);
Route::post('/create_admin', [admin::class, 'create_admin']);
Route::get('/edit_admin/{id}', [admin::class, 'edit_admin']);
Route::post('/update_admin/{id}', [admin::class, 'update_admin']);
Route::get('/delete_admin/{id}', [admin::class, 'delete_admin']);





Route::get('/logout', [admin::class, 'logout']);

