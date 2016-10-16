<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::resource('usuarios', 'UserController');

Route::resource('arquivos', 'FileController');

Route::get('download/{filename}/{name}', function($filename, $name)
{
    // Check if file exists in app/storage/file folder
    $file_path = storage_path() .'/app/arquivos/'. $filename;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $name, [
            'Content-Length: '. filesize($file_path)
        ]);
    }
    else
    {
        // Error
        exit('Requested file does not exist on our server!');
    }
})->where('filename', '[A-Za-z0-9\-\_\.]+');
