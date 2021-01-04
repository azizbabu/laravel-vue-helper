<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('projects/create', [ProjectController::class, 'create']);

Route::post('projects', [ProjectController::class, 'store']);

Route::get('/test', function() {
	return view('test');
});

Route::get('/custom-input', function() {
	return view('custom_input');
});

Route::get('/scoped-slots', function() {
	return view('scoped-slots');
});
