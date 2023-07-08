<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/test', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('base');
// });

Route::resource('/', ProductController::class);
Route::resource('/product', ProductController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/transaction', TransactionController::class)->middleware("auth");
Route::resource('/member', MemberController::class)->middleware("can:akses");
Route::resource('/user', UserController::class)->middleware("can:owner");

Route::post("/product/addcart/{product}", [ProductController::class, "addcart"]);
Route::post('/getAccessControlEdit', [UserController::class, 'getAccessControlEdit'])
    ->name('user.getAccessControlEdit');
Route::post('/saveDataTD', [UserController::class, 'saveDataTD'])
    ->name('user.saveDataTD');
Route::post("/checkout", [TransactionController::class, "checkout"])->middleware("auth");


Route::get("/cart", [ProductController::class, "cart"])->middleware("auth");



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
