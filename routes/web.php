<?php
use Illuminate\Support\Facades\Route;

Route::get('/query', 'QueryController@index');


/**
 * Api routes
 */
Route::prefix('api')->group(function () {
    Route::get('/query/get', 'QueryController@get');
    Route::get('/query/clear', 'QueryController@clear');
    Route::get('/query/exec', 'QueryController@exec');
    Route::get('/query/explain', 'QueryController@explain');
    Route::get('/query/server-info', 'QueryController@serverInfo');
});

