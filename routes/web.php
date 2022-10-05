<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactanosController;



/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------
--------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');

//Route::controller(CursoController::class)->group(function () {

    //Route::get('cursos','index')->name('cursos.index');
    //La forma que esta arriba es lo mismo que el de abajo
    //La diferencia es que el de arriba se enmarca dentro de group
    //El de abajo se hace de manera mas libre se pone fuera de controller group una por una
   //Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

    //Route::get('cursos/create','create')->name('cursos.create');
    /*Route::get('crear-curso', [CursoController::class, 'create']);*/
  
    //Route::post('cursos','store')->name('cursos.store');

    //Route::get('cursos/{curso}','show')->name('cursos.show');
    /*Route::get('cursos/{curso}', [CursoController::class, 'show']);*/

    //Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');

    //Route::put('cursos/{curso}','update')->name('cursos.update');//Se le pone put para cuando se desea actualizar

    //});


    //Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

    //OPTIMIZACION DE RUTAS
    Route::resource('cursos',CursoController::class);

    //CAMBIAR NOMBRE DE URL CUANDO YA NO SE QUIERE 'cursos', para no cambiar palabra por palabra esta la opcion de abajo
    //Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

    //Para cuando se requiere una vista estatica
    Route::view('nosotros','nosotros')->name('nosotros');

    Route::view('login','login')->name('login');

    Route::view('menu', 'menu')->name('menu');

    Route::view('registro','registro')->name('registro');

    //Emails
    Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

    Route::post('contactanos', [ContactanosController::class , 'store'])->name('contactanos.store');

/*
Route::get('cursos/create', function () {
    
});
*/



/*
//Mas de una variable
Route::get('cursos/{curso}/{categoria}', function($curso,$categoria){
    return "Bienvenido al curso $curso de la categoria: $categoria";
});
*/

//Es como la combinacion de los dos de arriba
// Route::get('cursos/{curso}/{categoria?}', function($curso,$categoria = null){ 
   
//    if($categoria)
//    {
//     return "Bienvenido al curso $curso de la categoria: $categoria";
//    }
//    else
//    {
//     return "Bienvenido al curso: $curso";
//    }

// });
