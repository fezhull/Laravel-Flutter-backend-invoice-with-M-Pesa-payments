<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MpesaController;

// routes/api.php

use App\Http\Controllers\InvoiceController;

Route::get('/student',[StudentController::class, 'index']);

// routes/api.php



Route::apiResource('invoices', InvoiceController::class);

// Route to initiate M-Pesa payment
Route::post('/mpesa/initiate-payment', 'MpesaController@initiatePayment');
