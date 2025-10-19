<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// your endpoints
Route::prefix('v1')->group(function () {
    Route::get('test', fn() => ['status' => 'API OK']);
    Route::get('students', [StudentController::class, 'index']);
});