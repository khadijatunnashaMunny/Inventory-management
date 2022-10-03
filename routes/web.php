<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginhere', [AuthController::class, 'LoginSubmit']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

   
Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/addEmployee', [FrontendController::class, 'addEmployee']);
Route::get('/products', [FrontendController::class, 'products']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/addProduct', [FrontendController::class, 'addProduct']);
Route::post('/product_Submit', [FrontendController::class, 'productSubmit']);
Route::post('/employeeSubmit', [FrontendController::class, 'employeeSubmit']);
Route::get('/product_detail/{id}', [FrontendController::class, 'product_detail']);
Route::post('/contactSubmit', [FrontendController::class, 'contactSubmit']);
Route::get('/report', [FrontendController::class, 'report']);
Route::get('/pdf_convert',[App\Http\Controllers\FrontendController::class, 'pdfGeneration'])->name('pdf.convert');
Route::get("/edit/{id}", [FrontendController::class, 'edit']);

Route::patch("/updatedetail/{id}", [FrontendController::class, 'updatedetail']);

Route::get("/delete/{id}", [FrontendController::class, 'delete']);
