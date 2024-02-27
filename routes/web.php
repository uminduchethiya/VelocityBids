<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidController;
use App\Http\Controllers\HomeContrller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Facade;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');
Route::post('/contact', [UserController::class, 'submitForm'])->name('contact.submit');

Route::get('/about', [UserController::class, 'about'])->name('user.about');
Route::get('/login',[AuthController::class,'login_index'])->name('login_index');

Route::get('/home',[HomeContrller::class,'index'])->name('home');
Route::get('/vehicle/{id}',[BidController::class,'vehicleIndex'])->name('vehicle_Index');


Route::get('/forgetpassword', [AuthController::class, 'forgetpassword_index'])->name('forgetpassword');
Route::post('/forgetpassword', [AuthController::class, 'forgetpasswordPost'])->name('forgetpasswordPost');

Route::get('/resetpassword/{token}', [AuthController::class, 'resetpassword_index'])->name('resetpassword');
Route::post('/resetpassword',[AuthController::class,'resetpasswordPost'])->name('resetpasswordPost');




// Bid Controller
Route::get('/bid/add-bid', [BidController::class, 'addBid'])->name('bid.add-bid');
Route::post('/bid/add-bid',[BidController::class,'addBidInfo'])->name('bid.addBidInfo');


//vehcile data view,update,delete
Route::get('/bid/bidInfoView/{id}',[BidController::class,'bidInfoView'])->name('bid.infoView');
Route::post('/bid/bidInfoView/{id}',[BidController::class,'bidUpdate'])->name('bid.adminupdate');
Route::delete('/bid/bidInfoDelete/{vehicle}', [BidController::class, 'deleteVehicle'])->name('bid.delete');




// register
Route::get('/register',[AuthController::class,'register_index'])->name('register_index');
Route::POST('/register', [AuthController::class, 'user_register'])->name('register');


// login

Route::get('/login', [AuthController::class, 'login_index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


// google URL

Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFormGoogle'])->name('callback');
});


//admin
Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
Route::get('/admin/customerlist', [UserController::class, 'view'])->name('admin.customerlist');
Route::get('/user/{id}',[UserController::class,'edit'])->name('admin.user.customerEdit');
Route::post('/user/{id}',[UserController::class,'update'])->name('admin.user.customerUpdate');
Route::delete('user/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');
