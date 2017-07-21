<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['web']], function () {
    Auth::routes();
});


Route::get('/', ['as' => 'main',function () {
    return view('index');
}]);

Route::get('/contacts', ['as' => 'contacts',function () {
    return view('contacts');
}]);

Route::get('/{folder}/{name}', ['as'=>'article',function ($folder,$name) {
    return view($folder.'.'.$name);
}])->where([
    'folder'=>'[A-z_]+',
    'name'=>'[A-z_]+']);

Route::get('/svg',function(){
    return view('svg');
});




