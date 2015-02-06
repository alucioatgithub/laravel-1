<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
function configureConnectionByName($dbname, $username, $pass)
{
    // Just get access to the config.
    $config = App::make('config');

    // Will contain the array of connections that appear in our database config file.
    $connections = $config->get('database.connections');

    // This line pulls out the default connection by key (by default it's `mysql`)
    $defaultConnection = $connections[$config->get('database.default')];

    // Now we simply copy the default connection information to our new connection.
    $newConnection = $defaultConnection;
    // Override the database name.
    $newConnection['database'] = $dbname;
    $newConnection['username'] = $username;
    $newConnection['password'] = $pass;

    // This will add our new connection to the run-time configuration for the duration of the request.
    App::make('config')->set('database.connections.mysql', $newConnection);
    // Just get access to the config.
    $config = App::make('config');

    // Will contain the array of connections that appear in our database config file.
    $connections = $config->get('database.connections');
}


Route::get('/', 'HomeController@index');

Route::group(['domain' => '{account}.krita.app', 'middleware' => 'subdomain'], function()
{
    Route::get('/', function($account)
    {
        return redirect('/');
    });

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

Route::get('home', 'HomeController@index');
Route::get('topdf', 'HomeController@topdf');

Route::post('testpost', 'HomeController@testpost');



