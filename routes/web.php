<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatatablesController;

/*DatatablesController
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/',[DatatablesController::class, 'index']);
Route::post('/',[DatatablesController::class, 'insert']);
Route::get('/divida',[DatatablesController::class, 'get_dividas']);
Route::post('/divida',[DatatablesController::class, 'post_dividas']);