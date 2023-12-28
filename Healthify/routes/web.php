<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\patientController;
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

Route::get('signup',[patientController::class,'create']);
Route::post('signup',[patientController::class,'store']);

Route::get('login',[patientController::class,'login']);
Route::post('loginauth',[patientController::class,'loginauth']);
Route::get('logout',[patientController::class,'logout']);

Route::get('/', function () {
    return view('PATIENTS/index');
});
Route::get('app',[appointmentController::class,'create']);
Route::post('app',[appointmentController::class,'store']);

Route::get('about',[patientController::class,'show']);

Route::get('contact', function () {
    return view('PATIENTS/contact');
});
Route::get('feature', function () {
    return view('PATIENTS/feature');
});
Route::get('service', function () {
    return view('PATIENTS/service');
});
Route::get('team', function () {
    return view('PATIENTS/team');
});
Route::get('testimonial', function () {
    return view('PATIENTS/testimonial');
});


//--------------
Route::get('doctorlogin',[adminController::class,'index']);
Route::post('alogin',[adminController::class,'login_auth']);
Route::get('dashboard', function () {
    return view('admin/dashboard');
});
Route::get('patients_appointment',[appointmentController::class,'show'] );
Route::get('patients_appointment/{id}',[appointmentController::class,'destroy'] );

Route::get('patients', function () {
    return view('admin/patients');
});
Route::get('doctors',[patientController::class,'ashow']);




Route::get('pnf', function () {
    return view('admin/pnf');
});
