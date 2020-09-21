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

Route::get('/', function () {
    return view('index');
});







Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/jobs/job-details', function () {
    return view('job_details');
});

Route::group(['prefix' => '/admin'], function () {

    
    Route::get('/', function () {
        return view('users.admin.dashboard');
    });
    Route::get('/edit_profile', function () {
        return view('users.admin.edit_profile');
    });
    Route::get('/add_categories', function () {
        return view('users.admin.add_categories');
    });
    Route::get('/add_education', function () {
        return view('users.admin.add_education');
    });
    Route::get('/post_job', function () {
        return view('users.admin.post_job');
    });
    Route::get('/manage_jobSeeker', function () {
        return view('users.admin.manage_jobSeeker');
    });
    Route::get('/manage_employer', function () {
        return view('users.admin.manage_employer');
    });
    Route::get('/manage_admin', function () {
        return view('users.admin.manage_admin');
    });

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
