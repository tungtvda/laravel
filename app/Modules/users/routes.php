<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 7/1/2016
 * Time: 9:23 AM
 */
$namespace = 'App\Modules\Users\Controllers';
Route::group(
    ['module'=>'Users','middleware' => 'web', 'namespace' => $namespace],
    function() {
        Route::resource('Users', 'UsersController');
        Route::POST('check-date', 'UsersController@checkDate');
        Route::GET('login/auth', 'UsersController@getLogin');
        Route::POST('login/auth', 'UsersController@postLogin');
        Route::GET('user-register', 'UsersController@getRegister');
        Route::POST('user-register', 'UsersController@postRegister');

    }
);