<?php

use App\Http\Controllers\bienvenidoController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\DoctoresController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\vista1Controller;
use App\Models\Especialidad;
use App\Models\Paciente;
use Illuminate\Support\Facades\Route;

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


/*
busca la raiz /, y manda a llamar la funcion anonima
luego devuelve la pagina welcome que se encuentra
en el apartado de views
*/
Route::get('/', function () {
       return view('welcome');
});

//_----------------------------------------------------
//ejemplo modificando la pagina
// Route::get('/', function () {
//     return 'welcome daniel';
// });

//otro ejemplo creando un archivo en views
//y hacemos referencias al archivo creado
// Route::get('/', function () {
//     return view('vistaLogin');
// });

//---------------------------------------------------------

//este es la mejor manera para no andar cambiando las rutas de manera manual, 
//sino que lo haga automatico
//http://fsinicio.test/contacto y nos revuelve con el return la pagina de login
// Route::get('/contacto', function () { 
//     return view('contacto');
// });

//http://fsinicio.test/login asi lo ponemos en el navegador
// Route::get('/login', function () { 
//     return view('login');
// });

//__________________________________________________

//agragar controladores
/*ctl ñ: se abre la consola y colocamos:
php artisan make:controller vista1Controller
vista1Controller es el nombre que le damos al controlador 
*/


//vista predefinida(ruta principal)
Route::get('/', function () {
       return view('welcome');
});


//vista1
Route::get('/vista_inicial', [vista1Controller::class, 'vista_inicial']);


//vista doctores
Route::get('/doctores', [DoctoresController::class,'index'])->name('doctores.index');
Route::get('/doctores/create', [DoctoresController::class,'create'])->name('doctores.create');
Route::get('/doctores/{id}', [DoctoresController::class,'show'])->name('doctores.show');
Route::post('/doctores/save', [DoctoresController::class,'store'])->name('doctores.store');
Route::delete('/doctores/delete/{id}', [DoctoresController::class,'destroy'])->name('doctores.destroy');
Route::get('/doctores/edit/{id}', [DoctoresController::class,'edit'])->name('doctores.edit');
Route::put('/doctores/update{id}', [DoctoresController::class,'update'])->name('doctores.update');



//vista especialidades
Route::get('/especialidades', [EspecialidadController::class,'index'])->name('especialidades.index');
Route::get('/especialidades/create', [EspecialidadController::class,'create'])->name('especialidades.create');
Route::get('/especialidades/{id}', [EspecialidadController::class,'show'])->name('especialidades.show');
Route::post('/especialidades/save', [EspecialidadController::class,'store'])->name('especialidades.store');
Route::delete('/especialidades/delete/{id}', [EspecialidadController::class,'destroy'])->name('especialidades.destroy');
Route::get('/especialidades/edit/{id}', [EspecialidadController::class,'edit'])->name('especialidades.edit');
Route::put('/especialidades/update{id}', [EspecialidadController::class,'update'])->name('especialidades.update');




//vista pacientes
Route::get('/pacientes', [PacienteController::class,'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacienteController::class,'create'])->name('pacientes.create');
Route::get('/pacientes/{id}', [PacienteController::class,'show'])->name('pacientes.show');
Route::post('/pacientes/save', [PacienteController::class,'store'])->name('pacientes.store');
Route::delete('/pacientes/delete/{id}', [PacienteController::class,'destroy'])->name('pacientes.destroy');
Route::get('/pacientes/edit/{id}', [PacienteController::class,'edit'])->name('pacientes.edit');
Route::put('/pacientes/update{id}', [PacienteController::class,'update'])->name('pacientes.update');





//vista binvenido
Route::get('/vista_bienvenido', [bienvenidoController::class, 'funcionBienvenido']);

//vista contacto
Route::get('/vista_contacto', [contactoController::class, 'funcionContacto']);

//vista login
Route::get('/vista_login', [loginController::class, 'funcionLogin']);

