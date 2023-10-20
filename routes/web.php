<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\NewController;
use App\Http\Controllers\Acontroller;
use App\Http\Controllers\SampleController;

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

// echo "blade 호출하기전 <br>";

Route::get('/', [SampleController::class, 'index']);

Route::get('get', [NewController::class, "index"]);

Route::get('get/{id}', function ($id) {
    return view('route', [ 'id' => $id]);
});

Route::get('/test', function () {
    return 'test';
})->middleware('test');

Route::get('/one', function() {
    for ($i=0; $i < 3; $i++) {
        echo app('testname')->multiple(2);
        echo "<br>";
    }
    return "----";
});
