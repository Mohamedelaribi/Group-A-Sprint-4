<?php

use App\Http\Controllers\PromotionController;
use App\Http\Controllers\PromotionsController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/home', function () {
        return view('home');
    });
    // crud promotion ressource

    Route::resource('promotions', PromotionsController::class);
});





 
// Crud promotion
// Route::get('promotions/index', [PromotionController::class,'select'] );
// Route::get('/add', [PromotionController::class,'Add'] );
// Route::post('/addTask', [PromotionController::class,'AddTask'] );
// Route::get('/delete/{id}', [PromotionController::class,'deleteTask'] );
// Route::get('/updatetask/{id}', [PromotionController::class,'updatetask'] );
// Route::post('/actionupdate/{id}', [PromotionController::class,'actionupdate'] );
// Route::get('/filtrer', [PromotionController::class,'filtrer'] );