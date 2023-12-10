<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\aboutcontroller;
use App\Http\Controllers\frontend\roomcontroller;
use App\Http\Controllers\frontend\activitycontroller;
use App\Http\Controllers\frontend\bookingcontroller;
use App\Http\Controllers\frontend\packagecontroller;
use App\Http\Controllers\frontend\diningcontroller;
use App\Http\Controllers\frontend\gallerycontroller;
use App\Http\Controllers\frontend\contactcontroller;
use App\Http\Controllers\frontend\signincontroller;
use App\Http\Controllers\frontend\signupcontroller;
use App\Http\Controllers\admin\admincontroller;


// -----------admin panel controllers ----------------------------------

use App\Http\Controllers\adminpanel\contactDetailController;
use App\Http\Controllers\adminpanel\galleryDetailController;
use App\Http\Controllers\adminpanel\hotelDetailController;
use App\Http\Controllers\adminpanel\packageDetailController;
use App\Http\Controllers\adminpanel\roomDetailController;
use App\Http\Controllers\adminpanel\userDetailController;
use App\Http\Controllers\adminpanel\bookedDetailController;

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

// Route::get('/adminlayout', function(){
//     return view('frontend.admin.hotel-details');
// });


Route::get('/',[homecontroller::class, 'index']);
Route::get('/room',[roomcontroller::class, 'index']);
Route::get('/activity',[activitycontroller::class, 'index']);
Route::get('/package',[packagecontroller::class, 'index']);
Route::get('/dining',[diningcontroller::class, 'index']);
Route::get('/gallery',[gallerycontroller::class, 'index']);
Route::get('/about',[aboutcontroller::class, 'index']);
Route::get('/contact',[contactcontroller::class, 'index']);
Route::post('/query-store',[contactcontroller::class, 'store']);
Route::get('/signin',[signincontroller::class, 'index'])->name('signin');
Route::post('/signin-register',[signincontroller::class, 'register']);
Route::get('/signup',[signupcontroller::class, 'index']);
Route::post('/signup-store',[signupcontroller::class, 'store']);
Route::get('/booking', [bookingcontroller::class, 'index'])->middleware('auth');
Route::get('/check-availability',[bookingcontroller::class, 'checkAvailability']);
// Route::get('/adminpanel', [admincontroller::class, 'index']);

// admin panel routes 

Route::prefix('/')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/adminuser',[userDetailController::class, 'index']);
    Route::get('/user/delete/{id}',[userDetailController::class, 'delete']);
    Route::get('/gallery/delete/{id}',[galleryDetailController::class, 'delete']);
    Route::get('/adminhotel',[hotelDetailController::class, 'index']);
    Route::post('/upload-hoteldetail/{id}', [hotelDetailController::class, 'upload']);
    Route::post('/hoteldetail-update/{id}',[hotelDetailController::class, 'update'])->name('hoteldetail.update');
    Route::get('/hotel/delete/{id}',[hotelDetailController::class, 'hoteldelete']);
    Route::get('/admingallery',[galleryDetailController::class, 'index']);
    Route::post('/upload-gallery',[galleryDetailController::class, 'upload']);
    Route::get('/adminpackage',[packageDetailController::class, 'index']);
    Route::post('/package-store',[packageDetailController::class, 'store']);
    Route::get('/package/delete/{id}',[packageDetailController::class, 'packagedelete']);
    Route::get('/admincontact',[contactDetailController::class, 'index']);
    Route::post('/storecontact',[contactDetailController::class, 'storecontact']);
    Route::get('/adminrooms',[roomDetailController::class, 'index']);
    Route::post('/room-store',[roomDetailController::class, 'store']);
    Route::get('/room/delete/{id}',[roomDetailController::class, 'roomdelete']);
    Route::get('/adminbooked',[bookedDetailController::class, 'index']);
    Route::post('/roombook',[bookedDetailController::class, 'storeroom']);
    Route::get('/edit-hotel/{id}',[hotelDetailController::class,'edit']);

    
});



    // Route::post('/logout',[signincontroller::class, 'logout']);

    


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
