<?php

/**
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 *
 * @category Route
 * @package  MyPackage
 * @author   Sakib <sakibwebworm@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version  php 5.5.6
 * @link     github.com
*/

Route::get('/', 'PagesController@index');
Route::get('/all_movies', 'MoviesController@index');
Route::get(
    '/movies/{id}', [
    'middleware' => 'auth',
    'uses' => 'MoviesController@show'
    ]
);
//admin routes

Route::group(
    array('prefix' => 'admin','middleware' => 'auth'), function () {
    
        Route::group(
            ['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
        
                Route::get('add_slider', 'SlidersController@create');
                Route::get('update_delete_slider', 'SlidersController@updateDeleteslider');
                Route::post('store_slider', 'SlidersController@store');
                Route::get('sliders/{id}/edit', 'SlidersController@edit');
                Route::delete('sliders/{id}/delete', 'SlidersController@destroy');
                Route::put('sliders/{id}/update', 'SlidersController@update');
                Route::get('add_movie', 'MoviesController@create');
                Route::post('store_movie', 'MoviesController@store');
                Route::get('movies/{id}/edit', 'MoviesController@edit');
                Route::put('movies/{id}/update', 'MoviesController@update');
                Route::delete('movies/{id}/delete', 'MoviesController@destroy');
                Route::delete('movies/{id}/destruction', 'MoviesController@destruction');
                Route::post('quick_store', 'MoviesController@quickstore');
                Route::get('quick_add_movie', 'MoviesController@quickadd');
            }
        );

        Route::get('all_movies', 'MoviesController@allmovies');
        Route::get('api', 'UserController@showapi');
        Route::post('save/store_api', 'UserController@saveapi');
        Route::get('wishlist', 'MoviesController@wishlist');
    }
);
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/find', 'SearchController@find');

