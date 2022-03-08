<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//IMPORTAS EL CONTROLER QUE SE CREO
use App\Http\Controllers\App1Controller;
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

Route::get('/', function () {
    return view('welcome');
});



//LA DIRECCION
//AGREGAR VISTA INDEX GET
Route::get('/proyecto', [App1Controller::class,'index']) ->name('proyecto.index');
//AGREGAR VISTA CREATE GET
Route::get('/proyecto/create',[App1Controller::class,'create']) -> name('proyecto.create');
//VISUALIzAR
Route::get('/proyecto/{app1}',[App1Controller::class,'show']) -> name('proyecto.show');
//EIDTAR
Route::get('/proyecto/{app1}/edit',[App1Controller::class,'edit']) -> name('proyecto.edit');
//ACTUALIZAR
Route::put('/proyecto/{app1}',[App1Controller::class,'update']) -> name('proyecto.update');
//DELETE
Route::delete('/proyecto/{app1}',[App1Controller::class,'destroy']) -> name('proyecto.destroy');
Route::post('/proyecto',[App1Controller::class,'store']) -> name('proyecto.store');
Auth::routes();