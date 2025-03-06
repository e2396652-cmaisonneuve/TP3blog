<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Controllers\ArticleController;
use App\Controllers\CommentController;
use App\Controllers\CategorieController;
use App\Routes\Route;

Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/users', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');
Route::get('/user/show', 'UserController@show');
Route::get('/user/edit', 'UserController@edit');
Route::post('/user/edit', 'UserController@update');
Route::post('/user/delete', 'UserController@delete');

Route::get('/articles', 'ArticleController@index');
Route::get('/article/create', 'ArticleController@create');
Route::post('/article/create', 'ArticleController@store');
Route::get('/article/show', 'ArticleController@show');
Route::get('/article/edit', 'ArticleController@edit');
Route::post('/article/edit', 'ArticleController@update');
Route::post('/article/delete', 'ArticleController@delete');

Route::get('/comments', 'CommentController@index');
Route::get('/comment/create', 'CommentController@create');
Route::post('/comment/create', 'CommentController@store');
Route::get('/comment/show', 'CommentController@show');
Route::get('/comment/edit', 'CommentController@edit');
Route::post('/comment/edit', 'CommentController@update');
Route::post('/comment/delete', 'CommentController@delete');

Route::get('/categories', 'CategorieController@index');
Route::get('/categorie/create', 'CategorieController@create');
Route::post('/categorie/create', 'CategorieController@store');
Route::get('/categorie/show', 'CategorieController@show');
Route::get('/categorie/edit', 'CategorieController@edit');
Route::post('/categorie/edit', 'CategorieController@update');
Route::post('/categorie/delete', 'CategorieController@delete');

Route::dispatch();
