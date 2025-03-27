<?php

use App\Http\Controllers\ExceptionController;
use Illuminate\Support\Facades\Route;

Route::put('/api/v1/exception', [ExceptionController::class, 'create']);

Route::get('/', function () {
    throw new \Exception('test exception');
    return view('welcome');
});
