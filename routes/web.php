<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;//YU: IMPORTANDO EL CONTROLADOR
use App\Http\Controllers\CursoController;//YU: IMPORTANDO EL CONTROLADOR CURSO
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    //return view('welcome');
    return 'Esta es la página principal';
}); */

Route::get('/',HomeController::class);//YU: LLAMA AL MÉTODO INVOKE CUANDO ES UNA ÚNICA RUTA

//YU: agregando rutas de prueba
/*Route::get('curso', function () {
    return 'Esta es la página de cursos';
});

Route::get('cursos/create', function () {
    return 'Aqui podrás crear un curso';
});

Route::get('cursos/{curso?}', function ($curso=null){
    return 'Bienvenido al curso '.$curso;
})*/

/*Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso?}', [CursoController::class, 'show']);*/

Route::controller(CursoController::class)->group(function(){
    
Route::get('cursos', action: 'index')->name('cursos.index');//Se recomienda colocar un nombre a cada ruta 
Route::get('cursos/create', 'create')->name('cursos.create');//y hacer referencia a este nombre en los llamados a la ruta
Route::post('cursos', 'store')->name('cursos.store');
Route::get('cursos/{id}', 'show')->name('cursos.show');
Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
Route::put('cursos/{curso}', 'update')->name('cursos.update');//Laravel recomienda que el método a utilizar para actualizar info sea el PUT
Route::delete('cursos/{curso}', action: 'destroy')->name('cursos.destroy');//Laravel recomienda colocar el nombre destroy a la función que maejará la eliminación
});