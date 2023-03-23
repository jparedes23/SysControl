<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlController;
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
    return view('auth.login');
});


// Route::get('/control', function () {
//     return view('control.index');
// });
// Route::get('/control/create', [ControlController::class, 'create']);


Route::resource('control', ControlController::class)->middleware('auth');
Auth::routes(['resgiter'=>false,'reset'=>false]);

Route::get('/home', [ControlController::class, 'index'])->name('home');
Route::get('/home/busqueda',[ControlController::class,'index'])->name('busqueda');
Route::group(['middleware'=>'auth'], function(){

    Route::get('/home', [ControlController::class, 'index'])->name('home');
    
});
