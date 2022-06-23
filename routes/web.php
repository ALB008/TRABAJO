<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;

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
    return view('index');
})->name('index');

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/books', [AdminController::class, 'books']);

//////////////////////////////// T A B L A S /////////////////////////////////////////

//Generos
Route::get('/generos', [GeneroController::class, 'generos'])->name('generos'); //name: es para poder acceder desde cualquier parte
Route::get('/generos/nuevo', [GeneroController::class, 'create'])->name('generoNuevo');
Route::post('/generos/storeGenero', [GeneroController::class, 'store'])->name('createGenero');
Route::get('/generos/{cod_gen}', [GeneroController::class, 'view'])->name('viewGenero');
Route::post('/generos/updateGenero', [GeneroController::class, 'update'])->name('updateGenero');
Route::get('/deleteGenero/{cod_gen}', [GeneroController::class, 'delete'])->name('deleteGenero');


//Editoriales
Route::get('/editoriales', [EditorialController::class, 'editoriales'])->name('editoriales');
Route::get('/editoriales/nuevo', [EditorialController::class, 'create'])->name('editorialNuevo');
Route::post('/editoriales/storeEditorial', [EditorialController::class, 'store'])->name('createEditorial');
Route::get('/editoriales/{cod_edit}', [EditorialController::class, 'view'])->name('viewEditorial');
Route::post('/editoriales/updateEditorial', [EditorialController::class, 'update'])->name('updateEditorial');
Route::get('/deleteEditorial/{cod_edit}', [EditorialController::class, 'delete'])->name('deleteEditorial');

//Actividades
Route::get('/actividades', [ActividadController::class, 'actividades'])->name('actividades');
Route::get('/actividades/nuevo', [ActividadController::class, 'create'])->name('actividadNuevo');
Route::post('/actividades/storeEditorial', [ActividadController::class, 'store'])->name('createActividad');
Route::get('/actividades/{cod_activ}', [ActividadController::class, 'view'])->name('viewActividad');
Route::post('/actividades/updateEditorial', [ActividadController::class, 'update'])->name('updateActividad');
Route::get('/deleteActividad/{cod_activ}', [ActividadController::class, 'delete'])->name('deleteActividad');

//Autores - BOLEANO (estado) opcion
Route::get('/autores', [AutorController::class, 'autores'])->name('autores');
Route::get('/autores/nuevo', [AutorController::class, 'create'])->name('autorNuevo');
Route::post('/autores/storeEditorial', [AutorController::class, 'store'])->name('createAutor');
Route::get('/autores/{cod_aut}', [AutorController::class, 'view'])->name('viewAutor');
Route::post('/autores/updateEditorial', [AutorController::class, 'update'])->name('updateAutor');
Route::get('/deleteAutor/{cod_aut}', [AutorController::class, 'delete'])->name('deleteAutor');

//Empleados - numerico (genero) opcion
Route::get('/empleados', [EmpleadoController::class, 'empleados'])->name('empleados');
Route::get('/empleados/nuevo', [EmpleadoController::class, 'create'])->name('empleadoNuevo');
Route::post('/empleados/storeEmpleado', [EmpleadoController::class, 'store'])->name('createEmpleado');
Route::get('/empleados/{cod_emp}', [EmpleadoController::class, 'view'])->name('viewEmpleado');
Route::post('/empleados/updateEmpleado', [EmpleadoController::class, 'update'])->name('updateEmpleado');
Route::get('/deleteEmpleado/{cod_emp}', [EmpleadoController::class, 'delete'])->name('deleteEmpleado');

/////////////////////////////// F O R A N E A S ///////////////////////////////////////////

//Usuarios numerico (genero) opcion  --  foranea (id empleado)
Route::get('/usuarios', [UsuarioController::class, 'usuarios'])->name('usuarios');
Route::get('/usuarios/nuevo', [UsuarioController::class, 'create'])->name('usuarioNuevo');
Route::post('/usuarios/storeUsuario', [UsuarioController::class, 'store'])->name('createUsuario');
Route::get('/usuarios/{cod_usu}', [UsuarioController::class, 'view'])->name('viewUsuario');
Route::post('/usuarios/updateUsuario', [UsuarioController::class, 'update'])->name('updateUsuario');
Route::get('/deleteUsuario/{cod_usu}', [UsuarioController::class, 'delete'])->name('deleteUsuario');

//Libros boleano (estado) -- foranea (id editorial) NICE
Route::get('/libros', [LibroController::class, 'libros'])->name('libros');
Route::get('/libros/nuevo', [LibroController::class, 'create'])->name('libroNuevo');
Route::post('/libros/storeLibro', [LibroController::class, 'store'])->name('createLibro');
Route::get('/libros/{cod_lib}', [LibroController::class, 'view'])->name('viewLibro');
Route::post('/libros/updateLibro', [LibroController::class, 'update'])->name('updateLibro');
Route::get('/deleteLibro/{cod_lib}', [LibroController::class, 'delete'])->name('deleteLibro');

//Prestamo
Route::get('/prestamos', [PrestamoController::class, 'prestamos'])->name('prestamos');
Route::get('/prestamos/nuevo', [PrestamoController::class, 'create'])->name('prestamoNuevo');
Route::post('/prestamos/storePrestamo', [PrestamoController::class, 'store'])->name('createPrestamo');
Route::get('/prestamos/{cod_pres}', [PrestamoController::class, 'view'])->name('viewPrestamo');
Route::post('/prestamos/updatePrestamo', [PrestamoController::class, 'update'])->name('updatePrestamo');
Route::get('/deletePrestamo/{cod_pres}', [PrestamoController::class, 'delete'])->name('deletePrestamo');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
