<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HelloController::class , 'index' ]);

Route::get('/fifi', [HelloController::class , 'fifi' ]); 

// Route::get('/affichervue', [HelloController::class , 'AfficherVue']); 