<?php

Route::group(['namespace' => 'Sahil\First\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('pkg/contact', 'ContactFormController@index');
    Route::post('pkg/contact', 'ContactFormController@sendMail')->name('pkg.contact');
});