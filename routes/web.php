<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

///////////// Frontend Routes//////////////////

    // Auth
    Auth::routes(['verify' => true]);

    // navigation
    Route::get('/','SiteController@index');

    Route::get('/home', 'HomeController@index');


    Route::resource('category', 'CategoryController');
    Route::resource('job', 'JobController');
//

///////////// Admin Backend Routes//////////////////
    Route::group(['prefix' => '/admin','namespace' => 'admin'], function () {

        // navigation
        Route::get('/','AdminController@dashboard');
        Route::get('profile','AdminController@profile');
        
        // Restfull Controller| Category | degere | job
        Route::resource('category', 'CategoryController');
        Route::resource('degree', 'DegreeController');
        Route::resource('job', 'JobController');

        // Manage users
        Route::get('manage_seeker','UserController@manage_seeker');
        Route::get('manage_employer','UserController@manage_employer');
        Route::get('manage_admin','UserController@manage_admin');

        // Update users
        Route::put('manage_user/{user}','UserController@update');
        Route::delete('manage_user/{user}','UserController@destroy');


    });
//

///////////// Employer Routes//////////////////
    Route::group(['prefix' => '/employer','namespace' => 'employer'], function () {
        
        Route::get('/','SiteController@employer');

    });
//