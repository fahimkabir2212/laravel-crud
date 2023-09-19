<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HMS\PatientController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PatientController::class,'viewPatient'])->name('view.patient');
Route::get('/create-patient',[PatientController::class,'createPatient'])->name('create.patient');
Route::post('/store-patient',[PatientController::class,'storePatient'])->name('store.patient');
Route::get('/show-patient/{id}',[PatientController::class,'showPatient'])->name('show.patient');
Route::post('/edit-patient',[PatientController::class,'editPatient'])->name('edit.patient');
Route::get('/delete-patient/{id}',[PatientController::class,'deletePatient'])->name('delete.patient');