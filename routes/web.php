<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\categorias;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\producto;
use App\Http\Controllers\productos;
use App\Http\Controllers\productosController;
use App\Http\Controllers\usuario;
use App\Models\usuarios;
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

/*Route::get('/', function () {
    return view('home');
});*/
//Route::get('/',HomeController::class);
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth::routes();

//Route::get('usuarios/login',[usuario::class,'login'])->name('usuarios.login');
//Route::post('usuarios/{validar}',[usuario::class,'validalogin'])->name('usuarios.validar');


Route::get('/',HomeController::class);
Route::get('homeAdmin',[HomeController::class,'validor'])->name('validor');
//Route::get('/home', function () {return view('home');})->name('homeadmin');

Route::get('home', [homeController::class,'__invoke'])->name('home');
//Route::get('homeAdminU', [homeController::class,'homeAdmin'])->name('homeAdmin');
Route::get('productos/tortas', [productosController::class,'tortas'])->name('home.tortas');
Route::get('productos/panes', [productosController::class,'panes'])->name('home.panes');

Route::get('info/nosotros', [infoController::class,'nosotros'])->name('home.nosotros');
Route::get('info/contactos', [infoController::class,'contactos'])->name('home.contactos');

//Route::get('usuarios/login',[usuario::class,'login'])->name('usuarios.login');


//rutas Administrador
//rutas de produto
//Route::get('/home', function () {return view('home');})->name('homeAdmin');
//Route::get('/homeAdmin', function () {return view('homeAdmin');})->name('homeAdmin');

Route::get('producto/listar',[producto::class,'listar'])->name('producto.listado');
Route::get('producto/create',[producto::class, 'create'])->name('producto.create');
Route::get('producto/{producto}',[producto::class, 'viewP'])->name('producto.view');
Route::post('producto',[producto::class, 'saveP'])->name('producto.saveP');
Route::get('producto/{producto}/edit',[producto::class,'edit'])->name('producto.edit');
Route::put('producto/{producto}',[producto::class,'editU'])->name('producto.editU');
Route::delete('producto/{producto}',[producto::class,'eliminar'])->name('producto.eliminar');
///usuario rutas
Route::get('usuario/create',[usuario::class,'createusuario'])->name('usuario.create');
Route::post('usuario',[usuario::class,'saveU'])->name('usuario.saveU');

//CATEGORIAS RUTAS
Route::get('categoria/listado',[categorias::class,'listar'])->name('categoria.listado');
Route::get('categoria/create',[categorias::class,'create'])->name('categoria.create');
Route::get('categoria/{categoria}',[categorias::class ,'showC'])->name('categoria.show');
Route::post('categoria',[categorias::class, 'saveC'])->name('categoria.saveC');
Route::get('categoria/{categoria}/edit',[categorias::class,'edit'])->name('categoria.edit');
Route::put('categoria/{categoria}',[categorias::class,'editC'])->name('categoria.editC');
Route::delete('categoria/{categoria}',[categorias::class,'eliminar'])->name('categoria.eliminar');


Auth::routes();
