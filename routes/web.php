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

Route::get('/', 'MainController@homePage')->name('home');
Route::get('/login', 'MainController@loginPage')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'MainController@registerPage');
Route::get('/confirm-email/{code}', 'Auth\RegisterController@confirmEmail');
Route::get('/confirmed', 'MainController@confirmedPage');
Route::get('/choose-type', 'MainController@chooseType')->name('register');
Route::get('/register-{type}', 'MainController@chooseRegister');
Route::get('/register-company/{step}', 'CompanyController@companySteps');

Route::post('/register-company/{step}', 'CompanyController@companyStepsPost')->name('register-company');
Route::post('/login', 'Auth\LoginController@loginPost')->name('login');
Route::post('/login-company', 'Auth\LoginController@loginCompany')->name('login-company');
Route::post('/register-candidate', 'Auth\RegisterController@registerPost');

// // TODO:
// To make middleware for each type of users
Route::get('/profile-company', 'CompanyProfile@profile');
Route::get('/profile-candidate', 'CandidateProfile@profile');
Route::post('/edit-candidate-profile', 'CandidateProfile@editProfile');
Route::get('/add-jobs', 'CompanyProfile@addJob');

Route::post('/add-logo', 'CompanyProfile@addLogo');
Route::post('/add-job', 'CompanyProfile@registerJob');
