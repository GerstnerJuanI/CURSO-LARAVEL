<?php

use App\Http\Controllers\ContactanosController;
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

Route::get('/', 'HomeController')->name('home');

// Route::get('cursos','CursoController@index')->name('cursos.index'); // 7.4

// Route::get('cursos/create', 'CursoController@create')->name('cursos.create');

// Route::get('cursos/{curso}', 'CursoController@show')->name('cursos.show');

// Route::post('cursos', 'CursoController@store')->name('cursos.store');

// Route::get('cursos/{curso}/edit', 'CursoController@edit')->name('cursos.edit');

// Route::put('cursos/{curso}','CursoController@update')->name('cursos.update');

// Route::delete('cursos/{curso}', 'CursoController@destroy')->name('cursos.destroy');

Route::resource('cursos', 'CursoController');

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', 'ContactanosController@index')->name('contactanos.index');

Route::post('contactanos', 'ContactanosController@store')->name('contactanos.store');



//Route::resource('asignaturas', 'CursoController')->parameters(['asignaturas' => 'curso'])->names('cursos'); 
//                                                         // esto se usa cuando queres cambiar el nombre del
//                                                         // direccionamiento sin cambiarlo en todos los archivos

//Route::resource('cursos', CursoController::class);

/*Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }

});*/