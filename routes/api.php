<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->group( function () {
    Route::get('/v1/herb','API\HerbController@herb')->name('api.v1.herb');
});

