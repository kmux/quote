<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'QuotesController@index');
    
    Route::post('/quote', 'QuotesController@store');
});
