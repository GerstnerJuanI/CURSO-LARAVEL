<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/', 'HomeController');

Route::get('cursos','CursoController@index')->name('cursos.index'); // 7.4

Route::get('cursos/create', 'CursoController@create')->name('cursos.create');

Route::get('cursos/{id}', 'CursoController@show')->name('cursos.show');

Route::post('cursos', 'CursoController@store')->name('cursos.store');

Route::get('cursos/{curso}/edit', 'CursoController@edit')->name('cursos.edit');

Route::put('cursos/{curso}','CursoController@update')->name('cursos.update');

/*Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }

});*/