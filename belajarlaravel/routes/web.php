<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\AuthController;
use PhpParser\Node\Stmt\Return_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'home']);

Route::get('/register',[AuthController::class, 'register']);

Route::post('/welcome' ,[AuthController::class, 'welcome'] );

Route::get('/data-table', function(){
    return view('page.data-table') ;
});

Route::get('/table', function(){
    return view('page.table') ;
});
