<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'login','middleware' => 'CheckLogedIn'], function () {
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });
    Route::group(['prefix' => 'admin','middleware' => 'CheckLogedOut'], function () {
        Route::get('/','HomeController@returnHome');
        Route::get('home','HomeController@getHome');

        Route::group(['prefix' => 'category'], function () {
            Route::get('/','CategoryController@getCate');

            Route::get('/add','CategoryController@getAddCate');
            Route::post('/add','CategoryController@postAddCate');

            Route::get('/edit/{id}','CategoryController@getEditCate');
            Route::post('/edit/{id}','CategoryController@postEditCate');
            
            Route::get('/delete/{id}','CategoryController@getDeleteCate');
        });

        Route::group(['prefix' => 'tour'], function () {
            Route::get('/','TourController@getTour');

            Route::get('/add','TourController@getAddTour');
            Route::post('/add','TourController@postAddTour');

            Route::get('/edit/{id}','TourController@getEditTour');
            Route::post('/edit/{id}','TourController@postEditTour');
            
            Route::get('/delete/{id}','TourController@getDeleteTour');
        });
        
        Route::get('/comment', 'CommentController@getComment');
    });
    Route::get('logout','HomeController@getLogout');
});