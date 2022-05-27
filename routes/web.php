<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use BaconQrCode\Renderer\Color\Rgb;
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



 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');


//Route For User
Route::get('/',[HomeController::class,'index']);

 // Router For login User or Admin
Route::get('redirect',[HomeController::class ,"redirect"]);

//Route For Show DoctorAddView For Admin

Route::get('adddoctorview',[AdminController::class, 'adddoctorview']);

//Route for AddDoctor for Admin

Route::post('adddoctor',[AdminController::class,'adddoctor']);

//user appoiment Route

Route::post('appoinment',[HomeController::class,'appoinment']);

//Route For User Appoinment View After Login

Route::get('userappoinmentview',[HomeController::class,'userappoinmentview']);

//user Appoinment table

Route::get('myappoinment',[HomeController::class,'userappoinment']);

//Cancelappoinment Route for User

Route::get('Cancelappoinment/{id}',[HomeController::class,'Cancelappoinment']);

//Route For Admin Control Appoinment

Route::get('adminappoinmenttable',[AdminController::class,"adminappoinmenttable"]);

//Route For acceptappoinment for Admin

Route::get('acceptappoinment/{id}',[AdminController::class,'acceptappoinment']);

//Route For Cancel Appoinment for Admin

Route::get('cancelappoinment/{id}',[AdminController::class,'cancelappoinment']);

//Route For alldoctorview for Admin

Route::get('alldoctorview',[AdminController::class,'alldoctorview']);

//Route For Delete Doctor For Admin

Route::get('deletedoctor/{id}',[AdminController::class,'deletedoctor']);

// Route For Update Doctor view for Admin

Route::get('updatedoctorview/{id}',[AdminController::class,'updatedoctorview']);

//Route For Update Doctor For Admin

  Route::post('updatedoctor/{id}',[AdminController::class,'updatedoctor']);

  //Route For Search Doctor For Admin

  Route::get('search/',[AdminController::class,'search']);

//Route For Search Doctor For user After Login

Route::get('searchforuser/',[HomeController::class,'searchforuser']);


