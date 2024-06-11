<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidController;
use App\Http\Controllers\HomeContrller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
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

Route::get('/',[HomeContrller::class,'index'])->name('home');

//homeroute
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');
Route::post('/contact', [UserController::class, 'submitForm'])->name('contact.submit');
Route::get('/about', [UserController::class, 'about'])->name('user.about');
Route::get('/login',[AuthController::class,'login_index'])->name('login_index');
Route::get('/home',[HomeContrller::class,'index'])->name('home');
Route::get('/shop',[HomeContrller::class,'shop'])->name('shop');
Route::get('/getallvehicle',[HomeContrller::class,'viewAllVehicle'])->name('getallvehicle');
Route::get('/vehicle/{id}',[BidController::class,'vehicleIndex'])->name('vehicle_Index');
Route::post('/shops',[HomeContrller::class,'Searchshop'])->name('Searchshop');
Route::get('/log-in', [AuthController::class, 'login_index'])->name('loginindex');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//cart
// Route::get('/cart',[ProductController::class,'cart'])->name('user.cart');

Route::get('/forgetpassword', [AuthController::class, 'forgetpassword_index'])->name('forgetpassword');
Route::post('/forgetpassword', [AuthController::class, 'forgetpasswordPost'])->name('forgetpasswordPost');

Route::get('/resetpassword/{token}', [AuthController::class, 'resetpassword_index'])->name('resetpassword');
Route::post('/resetpassword',[AuthController::class,'resetpasswordPost'])->name('resetpasswordPost');

// Cart Controller
Route::middleware(['auth'])->group(function () {
    Route::get('/cheackout', [CartController::class, 'cheackout'])->name('item.cheackout');
    Route::get('/payment', [CartController::class, 'payment'])->name('item.payment');
    Route::get('/add/cart', [CartController::class, 'addCart'])->name('add.cart');
    Route::post('/view/cart', [CartController::class, 'viewCart'])->name('view.cart');
    Route::get('/view/cart', [CartController::class, 'viewCart'])->name('view.cart');
    Route::post('/add/cart', [CartController::class, 'addCart'])->name('add.cart');

});

// Bid Controller
Route::middleware(['auth'])->group(function () {
    Route::get('/bid/add-bid', [BidController::class, 'addBid'])->name('bid.add-bid');
    Route::post('/bid/store', [BidController::class, 'store'])->name('bid.store');

});
Route::post('/bid/add-bid',[BidController::class,'addBidInfo'])->name('bid.addBidInfo');
Route::get('/bidding/{id}', [BidController::class, 'bidding'])->name('bidding');



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

Route::middleware(['admin'])->group(function () {
    //admin
    Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/customerlist', [UserController::class, 'view'])->name('admin.customerlist');
    Route::get('/user/{id}',[UserController::class,'edit'])->name('admin.user.customerEdit');
    Route::post('/user/{id}',[UserController::class,'update'])->name('admin.user.customerUpdate');
    Route::delete('user/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/admin/register',[UserController::class,'adminsRegister'])->name('admins.register');
    Route::get('/admin/register',[UserController::class,'adminRegister'])->name('admin.register');


    //admin category
    Route::get('/admin/category_list',[CategoryController::class,'view'])->name('admin.categorylist');
    Route::get('/admin/addcategory',[CategoryController::class,'viewCategory'])->name('admin.viewcategory');
    Route::post('/admin/addcategory', [CategoryController::class, 'addcategory'])->name('admin.postcategory');
    Route::delete('/admin/{category}/delete', [CategoryController::class, 'destroy'])->name('admin.deletecategory');

    //category editview and update
    Route::get('/admin/editview/{id}',[CategoryController::class,'edit'])->name('admin.category.viewupdate');
    Route::post('/admin/editview/{id}',[CategoryController::class,'updatecategory'])->name('admin.category.update');



    //admin product
    Route::get('/admin/addproduct',[ProductController::class,'index'])->name('admin.addproduct');
    Route::post('/admin/addproduct',[ProductController::class,'addProduct'])->name('admin.product.addproduct');


    //addmin product view
    Route::get('/admin/productlist',[ProductController::class,'view'])->name('admin.product.productlist');

    //admin product edit
    Route::get('/admin/editproduct/{id}',[ProductController::class,'editProduct'])->name('admin.product.productedit');
    Route::post('/admin/editproduct/{id}',[ProductController::class,'updateProduct'])->name('admin.product.productupdate');
    Route::delete('/admin/deleteproduct/{product}', [ProductController::class, 'deleteproduct'])->name('admin.product.productdelete');

});