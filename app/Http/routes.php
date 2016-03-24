<?php

Route::group(['middleware' => ['web']], function () {

    #Route::get('/', 'getIndex@GeneratorController');
    Route::get('/', 'GeneratorController@getIndex');

    Route::get('/loremipsum', 'GeneratorController@getLorem');

    Route::post('/loremipsum', 'GeneratorController@postLorem');

    Route::get('/randomuser', 'GeneratorController@getUsers');

    Route::post('/randomuser', 'GeneratorController@postUsers');

});
