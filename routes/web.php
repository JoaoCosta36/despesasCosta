<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatatablesController;

/*DatatablesController
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/',[DatatablesController::class, 'index']);

