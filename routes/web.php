<?php

use App\Http\Controllers\DataController;


Route::get('/', [DataController::class, "data"]);



