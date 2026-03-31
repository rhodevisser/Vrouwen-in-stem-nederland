<?php

use App\Http\Controllers\PioneerController;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kennisbank', function () {
    return view( 'kennisbank' );
});

Route::get('/hall-of-fame/pioneer', function () {
    return view( 'pioneer' );
} );

Route::get('/hall-of-fame', [PioneerController::class, 'HallOfFameIndex']);

//Route::get('/hall-of-fame', function () {
//    return view( 'hall-of-fame' );
//});

