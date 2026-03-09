<?php

use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('add_employe',[EmployeController::class,'add_employe']);
Route::view('add_employe','add_employe');
Route::view('/','home');
Route::get('view',[EmployeController::class,'view']);
Route::get('show{id}',[EmployeController::class,'show']);

Route::post('edit',[EmployeController::class,'edit_employe']);
Route::get('delete{id}',[EmployeController::class,'delete']);