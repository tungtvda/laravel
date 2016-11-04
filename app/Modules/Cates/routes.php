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
//        Route::resource('api/cate', 'CateController');
        //router admin
        Route::GET('admin/create','CateController@create');
        Route::GET('admin/index','CateController@index');
        //router client
        // router api
        Route::get('api/cate','ApiCateController@index');
//        Route::GET('cate','CateController');
    }
);