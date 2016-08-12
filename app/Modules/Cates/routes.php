<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 7/1/2016
 * Time: 9:23 AM
 */
$namespace = 'App\Modules\Cates\Controllers';
Route::group(
//    ['prefix'=>'admin','middleware' => 'web','module'=>'Cates', 'namespace' => $namespace],
    ['middleware' => 'web','module'=>'Cates', 'namespace' => $namespace],
    function() {
        Route::resource('api/cate', 'CateController');
//        Route::GET('cate/create','CateController@create');
//        Route::get('api/cate','CateController@store');
//        Route::GET('category','BookingController');
    }
);