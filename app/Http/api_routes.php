<?php
/**
 * Api Doc Comment
 *
 * @category Api
 * @package  MyPackage
 * @author   Sakib <sakibwebworm@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version  php 5.5.6
 * @link     github.com
 */
$api = app('Dingo\Api\Routing\Router');

$api->version(
    'v1', function ($api) {

        $api->post('/auth/login', 'App\Api\V1\Controllers\AuthController@login');
        $api->post('/auth/signup', 'App\Api\V1\Controllers\AuthController@signup');
        $api->post('/auth/recovery', 'App\Api\V1\Controllers\AuthController@recovery');
        $api->post('/auth/reset', 'App\Api\V1\Controllers\AuthController@reset');

        // example of protected route
        $api->get(
            'protected', ['middleware' => ['api.auth'], function () {        
                return \App\User::all();
            }]
        );

        // example of free route
        $api->get(
            'free', function () {
                return \App\User::all();
            }
        );
        $api->group(
            ['middleware' => 'api.auth'], function ($api) {
                $api->post('movie/store', 'App\Api\V1\Controllers\MovieController@store');
                $api->get('movie', 'App\Api\V1\Controllers\MovieController@index');
                $api->post('movies', 'App\Api\V1\Controllers\MovieController@store');
                $api->put('movies/{id}', 'App\Api\V1\Controllers\MovieController@update');
                $api->delete('movies/{id}', 'App\Api\V1\Controllers\MovieController@destroy');
            }
        );
    }
);
