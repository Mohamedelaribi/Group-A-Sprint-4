<?php

use App\Http\Controllers\languageController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/home', function () {
        return view('home');
    });
    // crud promotion ressource

    Route::resource('apprentices', ApprenticeController::class);
    Route::resource('groups', GroupController::class);
// });


Route::get('lang/change',[languageController::class, 'change'])->name('changelang');

// Route::get('/file-import',[ApprenticeController::class,'importView'])->name('import-view');
Route::post('import',[ApprenticeController::class,'import'])->name('import');
Route::get('/export-users',[ApprenticeController::class,'exportApprentices'])->name('export-apprentices');



