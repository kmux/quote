<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'QuotesController@index');
    
    Route::post('/quote', 'QuotesController@store');
    Route::delete('/quote/{id}', 'QuotesController@destroy');

    Route::get('/u/{username}', 'QuotesController@user');
});
