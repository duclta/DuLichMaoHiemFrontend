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
        
        Route::group(['prefix' => 'comment'], function () {
            Route::get('/', 'CommentController@getComment');
            Route::get('/delete/{id}', 'CommentController@getDeleteComment');
        });

        Route::group(['prefix' => 'ticket'], function () {
            Route::get('/', 'TicketController@getTicket');
            Route::get('/delete/{id}', 'TicketController@getDeleteTicket');
        });

        Route::group(['prefix' => 'post'], function () {
            Route::get('/','PostController@getTour');

            Route::get('/add','PostController@getAddPost');
            Route::post('/add','PostController@postAddPost');

            Route::get('/edit/{id}','TourController@getEditPost');
            Route::post('/edit/{id}','TourController@postEditPost');
            
            Route::get('/delete/{id}','TourController@getDeletePost');
        });

    });
    Route::get('logout','HomeController@getLogout');
});