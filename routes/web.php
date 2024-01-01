<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/view/{view}', function ($view) {
    return view($view);
});
Route::get('/login',[AuthController::class,'login_index'])->name('login_index');
Route::get('/register',[AuthController::class,'register_index'])->name('register_index');


