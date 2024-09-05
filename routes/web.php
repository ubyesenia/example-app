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
    
Route::get('cursos', 'index');
Route::get('cursos/create', 'create');
Route::get('cursos/{curso?}', 'show');
});