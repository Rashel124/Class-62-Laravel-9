<?php

use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompilerInterface;

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


// function testName (){
//     return view('Welcome')
// }



Route::get('/',[FrontendController::class, 'index']);
// Route::get('/contact-us', [FrontendController::class, 'contactUs']);
Route::get('/shop',[FrontendController::class, 'shopProducts']);
Route::get('/return-process',[FrontendController::class, 'returnProcess']); 
Route::get('/product-details',[FrontendController::class, 'productDetails']); 
Route::get('/type-products/{type}',[FrontendController::class, 'typeProducts']); 
Route::get('/view-cart-products',[FrontendController::class, 'viewCart']);
Route::get('/checkout',[FrontendController::class, 'checkOut']);

//policy//....

Route::get('/privacy-policy',[FrontendController::class, 'privacyPolicy']);
Route::get('/terms-condition',[FrontendController::class, 'termsCondition']);
Route::get('/refund-policy',[FrontendController::class, 'refundPolicy']);
Route::get('/payment-policy',[FrontendController::class, 'paymentPolicy']);
Route::get('/about-us',[FrontendController::class, 'aboutUs']);
Route::get('/contact-us',[FrontendController::class, 'contactUs']);

//admin Auth Routes...

Route::get('/admin/login',[AdminAuthController::class, 'loginForm']);
Route::get('/admin/logout',[AdminAuthController::class, 'logoutAdmin']);

Auth::routes();

Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);

//Category Routes......
Route::get('/admin/category/create', [CategoryController::class, 'categoryCreate']);
Route::post('/admin/category/store', [CategoryController::class, 'categoryStore']);