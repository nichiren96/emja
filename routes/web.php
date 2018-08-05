<?php

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()

{
    Route::get('/admin/dashboard', 'PageController@admin_dashboard')->name('admin_dashboard');

    /**
     * Categories
     */

    Route::get('/categories/create', 'CategoryController@create')->name('create_category');

    Route::get('/categories', 'CategoryController@show')->name('show_category');

    Route::get('/categories/delete/{category}', 'CategoryController@delete')->name('delete_category');

    Route::post('/categories/store', 'CategoryController@store')->name('store_category');

    Route::any('/categories/{category}', 'CategoryController@update')->name('update_category');



    /**
     * Roles
     */
    Route::get('/roles/create', 'RoleController@create')->name('create_role');

    Route::get('/roles', 'RoleController@show')->name('show_role');

    Route::get('/roles/delete/{role}', 'RoleController@delete')->name('delete_role');

    Route::post('/roles/store', 'RoleController@store')->name('store_role');

    Route::any('/roles/{role}', 'RoleController@update')->name('update_role');




});

Route::group(['middleware' => 'App\Http\Middleware\RecruiterMiddleware'], function()
{

    /**
     * Adverts
     */
    Route::get('/adverts/create', 'AdvertController@create')->name('create_advert');

    Route::get('/adverts/user', 'AdvertController@userAdvert')->name('user_advert');

    Route::get('/adverts/delete/{advert}', 'AdvertController@delete')->name('delete_advert');

    Route::post('/adverts/store', 'AdvertController@store')->name('store_advert');

    Route::any('/adverts/{advert}', 'AdvertController@update')->name('update_advert');


    /**
     * Companies
     */
    Route::get('/companies/create', 'CompanyController@create')->name('create_company');

    Route::get('/companies/user', 'CompanyController@userCompany')->name('user_company');

    Route::get('/companies/delete/{company}', 'CompanyController@delete')->name('delete_company');

    Route::post('/companies/store', 'CompanyController@store')->name('store_company');

    Route::any('/companies/{company}', 'CompanyController@update')->name('update_company');

});


Route::group(['middleware' => 'App\Http\Middleware\CandidateMiddleware'], function()
{
    Route::get('/candidate/dashboard', 'PageController@candidate_dashboard')->name('candidate_dashboard');

});



Route::get('/', 'PageController@index')->name('homepage');

Route::get('/emplois-mahajanga', 'PageController@show_all')->name('all_jobs');

Route::get('/emplois-mahajanga/{id}', 'PageController@show_one')->name('one_job');


Route::get('/entreprises-mahajanga', 'PageController@show_all_companies')->name('all_companies');

Route::get('/entreprises-mahajanga/{id}', 'PageController@show_one_company')->name('one_company');

Route::get('test', function () {

    return view('public.pages.company');

});

/**
 * Auth

Route::get('/register', 'RegistrationController@create')->name('register');

Route::post('/register', 'RegistrationController@store')->name('post_register');

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store')->name('post_login');

Route::get('/logout', 'SessionsController@destroy')->name('logout');
 */


Auth::routes();

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/home', 'HomeController@index')->name('home');
