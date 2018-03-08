<?php

/*
|--------------------------------------------------------------------------
| LivEver
|--------------------------------------------------------------------------
|
*/
Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about');

Route::group(['prefix' => 'auth'], function () {
    Route::get('', function () {
        return view('auth.login');
    });
    Auth::routes();
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'Admin\InquiryController@dashboard');
    // Merchant
    Route::get('/inquiries', 'Admin\InquiryController@index')->name('inquiry.index');
    Route::get('/inquiries/list', 'Admin\InquiryController@list')->name('inquiry.list');

});
Route::post('/inquiries/save', 'HomeController@storeInquiry')->name('inquiry.save');
