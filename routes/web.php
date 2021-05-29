<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;

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

Route::get('', [PerpustakaanController::class, 'index']);
Route::get('/0098index', [PerpustakaanController::class, 'index']);
Route::get('/0098selectt', [PerpustakaanController::class, 'selectt']);
Route::get('/0098selectwhere', [PerpustakaanController::class, 'selectwhere']);
Route::get('/0098selectjoin', [PerpustakaanController::class, 'selectjoin']);
Route::get('/0098selectjoinwhere', [PerpustakaanController::class, 'selectjoinwhere']);
