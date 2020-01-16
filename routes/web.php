<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Routing\Route;


Route::get('/', 'PagesController@index');
Route::resource('auths', 'AuthsController');
Route::resource('students','StudentsController');
Route::resource('teachers', 'TeachersController');
Route::resource('levels', 'LevelsController');
Route::resource('parts', 'PartsController');
Route::resource('books', 'BooksController');
Route::resource('sections', 'SectionsController');
Route::resource('groups', 'GroupsController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
