<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AdminPageController;
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

Route::get('', [HomePageController::class,'index']);

Route::get('/home', [HomePageController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminPageController::class,'plusview']);
Route::post('/doctor_uploaded',[AdminPageController::class,'doctorUpload']);
Route::post('/appointment',[HomePageController::class,'appointment']);
Route::get('/my-appointment',[HomePageController::class,'myAppointment']);
Route::get('/cancel-appoint/{id}',[HomePageController::class,'cancelAppoint']);
Route::get('/show-appointment',[AdminPageController::class,'showAppointment']);
Route::get('/approve/{id}',[AdminPageController::class,'approve']);
Route::get('/cancel/{id}',[AdminPageController::class,'cancel']);
Route::get('/show-doctor',[AdminPageController::class,'showDoctor']);
Route::get('/delete-doctor/{id}',[AdminPageController::class,'deleteDoctor']);
Route::get('/update-doctor/{id}',[AdminPageController::class,'updateDoctor']);
Route::post('/edit-doctor/{id}',[AdminPageController::class,'editDoctor']);
Route::get('/email-display/{id}',[AdminPageController::class,'emailDisplay']);
Route::post('/send-email/{id}',[AdminPageController::class,'sendEmail']);
Route::get('/about-us', [HomePageController::class,'aboutUs']);
Route::get('/doctor-page', [HomePageController::class,'doctorPage']);