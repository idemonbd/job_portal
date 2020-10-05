<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

///////////// Frontend Routes//////////////////

    // Auth
    Auth::routes(['verify' => true]);
    // Custom register
    Route::get('employer/company/create','SiteController@employer');
    Route::post('employer/company/create','SiteController@emReg');

    Route::get('seeker/resume/create','SiteController@seeker');
    Route::post('seeker/resume/create','SiteController@seekReg');


    // navigation
    Route::get('/','SiteController@index');
    Route::get('/home', function(){
        return view('jome');
    });

    Route::resource('category', 'Admin\CategoryController');
    Route::resource('job', 'JobController');
    Route::get('search', 'JobController@search');

//

///////////// Admin Backend Routes//////////////////
    Route::group(['prefix' => '/admin','namespace' => 'Admin','middleware' => ['auth','admin']], function () {

        // navigation
        Route::middleware(['verified'])->get('/','AdminController@dashboard');
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
Route::group(['prefix' => '/employer','namespace' => 'employer', 'middleware' => ['auth','verified']], function () {
        
    Route::get('/','SiteController@index');
    Route::get('job/applied', 'JobController@applied');
    Route::resource('job', 'JobController');
    Route::get('company', 'CompanyController@index');
    Route::get('company/edit', 'CompanyController@edit');
    Route::put('company/update', 'CompanyController@update');

});
//


///////////// Seeker Routes //////////////////
    Route::group(['prefix' => '/seeker','namespace' => 'Seeker','middleware' => ['auth','verified']], function () {
        
        Route::get('/','SeekerController@index');
        Route::get('/profile/edit','SeekerController@edit');
        Route::get('/applied','SeekerController@applied');
        Route::resource('job', 'JobController');
        Route::post('job/{job}/apply', 'ApplyController@store');
    });
//

