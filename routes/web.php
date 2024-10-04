<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/empleados', function () {
    return view('empleados.index');
});

Route::post('/empleados', function(){
    print_r($_POST);
});*/
Route::get('/empleados', [EmpleadosController::class, 'index']);
Route::post('/empleados', [EmpleadosController::class, 'store']);