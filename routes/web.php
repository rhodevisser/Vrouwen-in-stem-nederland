<?php

use App\Http\Controllers\PioneerController;
use App\Models\KennisbankItem;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/kennisbank', function () {
    $kennisbank_items = KennisbankItem::all();

    return view( 'kennisbank.index', [
        'kennisbank_items' => $kennisbank_items,
    ] );
});

Route::get('/hall-of-fame/pioneer', function () {
    return view( 'pioneer' );
} );

Route::get('/hall-of-fame', [PioneerController::class, 'HallOfFameIndex']);

//Route::get('/hall-of-fame', function () {
//    return view( 'hall-of-fame' );
//});

