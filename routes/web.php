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



Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get ( '/', 'DashboardController@index' )->name ( 'home' );

    Route::get ( '/ committees/make ', function () {
        return view ( 'Committees.make' );
    } );
    Route::resource ( '/boards', 'BoardController' );
    Route::resource ( '/meetings', 'MeetingsController' );
    Route::resource ( '/dashboard', 'DashboardController' );
    Route::resource ( '/boardmembership', 'BoardMembershipController' );

    Route::get('/logout', function (){
        Auth::logout();
        return redirect('/');
    });
});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
