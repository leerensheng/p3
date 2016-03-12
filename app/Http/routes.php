<?php

Route::group(['middleware' => ['web']], function () {

    #Route::get('/', 'getIndex@GeneratorController');
    Route::get('/', function () {
        return 'This is where you can choose to generate lorum ipsum or random users';
    });

    Route::get('/loremipsum', 'GeneratorController@getLorem');

    Route::get('/randomuser', 'GeneratorController@getUsers');

});
