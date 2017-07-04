<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Auth::routes();

Route::get('/', ['as' => 'main',function () {
    return view('index');
}]);

Route::get('/contacts', ['as' => 'contacts',function () {
    return view('contacts');
}]);

Route::get('/{folder}/{name}', function ($folder,$name) {
    return view($folder.'.'.$name);
})->where('name','[A-z]+');





