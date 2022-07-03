<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;

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
    return view('landing');
});


Route::get('/login', function(){
    if(!auth()->guest()){
        return redirect('/dashboard');
    }
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('/users', [AuthController::class, 'users']);
  
});




Route::group(['middleware' => 'auth'], function(){

 
    Route::get('/movies/my-movies', [MovieController::class, 'myMovies']);
    Route::get('/movies/recent-movies', [MovieController::class, 'recentMovies']);
    Route::get('/movies/create',[MovieController::class, 'create']);
    Route::post('/movies', [MovieController::class, 'store']);
    Route::get('/movies/{movie}', [MovieController::class, 'show']);
    Route::get('/movies/edit/{movie}', [MovieController::class, 'edit'])->middleware('can-edit');
    Route::put('/movies/{movie}',[MovieController::class, 'update'])->middleware('can-edit');



    Route::get('/logout', [AuthController::class, 'logout']);

});

