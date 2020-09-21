<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','SiteController@index');


Route::group(['prefix' => '/admin','namespace' => 'admin'], function () {
    
    Route::get('/','SiteController@admin');
    Route::get('/profile','SiteController@admin_profile');
    
    Route::resource('category', 'CategoryController');
    Route::resource('degree', 'DegreeController');
    Route::resource('job', 'JobController');

    Route::get('/manage_seeker','SiteController@manage_seeker');
    Route::get('/manage_employer','SiteController@manage_employer');
    Route::get('/manage_admin','SiteController@manage_admin');
    // For update all users status
    Route::put('/manage_user/{user}','UserController@update');
    Route::delete('/manage_user/{user}','UserController@destroy');


});











Route::group(['prefix' => '/jobseeker'], function () {
    Route::get('/create-resume', function () {
        return view('users.jobseeker.create_resume');
    });

    Route::get('/view-resume', function () {
        return view('users.jobseeker.view_resume');
    });

    Route::get('/edit-resume', function () {
        return view('users.jobseeker.edit_resume');
    });

    Route::get('/applied-jobs', function () {
        return view('users.jobseeker.applied_jobs');
    });
});

Route::group(['prefix' => '/employer'], function () {
    Route::get('/create-company', function () {
        return view('users.employer.create_company');
    });

    Route::get('/edit-company', function () {
        return view('users.employer.edit_company');
    });

    Route::get('/post-job', function () {
        return view('users.employer.post_job');
    });

    Route::get('/applied-candidates', function () {
        return view('users.employer.applied_candidates');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
