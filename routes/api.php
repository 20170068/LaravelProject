<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/getCustomers', [CustomerController::class, 'GetCustomer']);
//Route::get('/getCustomers', [CustomerController::class, 'GetCustomer']);


/*-------------------------------------CRUD ESTADO---------------------------------------*/
/*DEVOLER TODA LA TABLA*/
use App\Http\Controllers\EstadoController;
Route::get('/ReadEst', [EstadoController::class, 'ReadEstado']);
Route::get('/getEstado',[EstadoController::class, 'GetEstado']);
/*DEVOLVER POR ID*/
Route::get('/ReadEstId', [EstadoController::class, 'ReadEstadoId']);
/*GUARDAR*/
/*UPDATE (ACTUALIZAR)*/
Route::post('/update/{id}', [EstadoController::class, 'update']);
/*DELETE (BORRAR)*/
Route::post('/delete/{id}', [EstadoController::class, 'destroy']);
/*----------------------------------------------------------------------------------------*/
/*-------------------------------------CRUD CIUDAD---------------------------------------*/
/*DEVOLER TODA LA TABLA*/
//use App\Http\Controllers\CiudadController;
route::get('/ReadCiud',[CiudadController::class, 'ReadCiud']);
/*DEVOLVER POR ID*/
Route::get('/ReadciudId', [CiudadController::class, 'ReadCiudId']);
/*GUARDAR*/
Route::post('/storeciud', [CiudadController::class, 'storeCiud']);
/*UPDATE (ACTUALIZAR)*/
Route::post('/updateciud/{id}', [CiudadController::class, 'updateCiud']);
/*DELETE (BORRAR)*/
Route::post('/deleteciud/{id}', [CiudadController::class, 'DeleteCiud']);
/*----------------------------------------------------------------------------------------*/
/*-------------------------------------CRUD MUNICIPIO---------------------------------------*/
/*DEVOLER TODA LA TABLA*/
//use App\Http\Controllers\MunicipioController;
Route::get('/ReadMun',[MunicipioController::class, 'ReadMunic']);
/*DEVOLVER POR ID*/
Route::get('/ReadmunId', [MunicipioController::class, 'ReadMunId']);
/*GUARDAR*/
Route::post('/storemun', [MunicipioController::class, 'storeMun']);
/*UPDATE (ACTUALIZAR)*/
Route::post('/updatemun/{id}', [MunicipioController::class, 'updateMun']);
/*DELETE (BORRAR)*/
Route::delete('/deletemun/{id}', [MunicipioController::class, 'DeleteMun']);
/*----------------------------------------------------------------------------------------*/

//use App\Http\Controllers\UltrasonicoController;

Route::get('/getdata',[UltrasonicoController::class, 'getdata']);

/*MIDDLEWARE -----------------------------------------------------------------------------*/
//use App\Http\Controllers\UserController;
Route::post('register',[UserController::class, 'register']);
Route::post('login', 'UserController@authenticate');
Route::group(['middleware' => ['jwt.verify']], function() {
    /*AÑADE AQUI LAS RUTAS QUE QUIERAS PROTEGER CON JWT*/
    Route::post('/store', [EstadoController::class, 'store']);
});
    Route::get('/testguzzle',[UserController::class, 'getjson']);



/*----------------------------Api creada para nuestro proyecto----------------------------*/
/*Ultrasonico-----------------------------------------------------------------------------*/
//use App\Http\Controllers\UltrasonicoController;
Route::get('/getdata',[UltrasonicoController::class, 'getdata']);
Route::get('/verdat',[UltrasonicoController::class, 'Verdat']);

/*Temp-----------------------------------------------------------------------------*/
//use App\Http\Controllers\TempController;
Route::get('/guardardata',[TempController::class, 'GuardarData']);
Route::get('/verdata',[TempController::class, 'VerData']);
/*Hum-----------------------------------------------------------------------------*/
//use App\Http\Controllers\HumController;
Route::get('/guardardatos',[HumController::class, 'GuardarDatos']);
Route::get('/verdatos',[HumController::class, 'VerDatos']);
/*Led-----------------------------------------------------------------------------*/
use App\Http\Controllers\LedController;
Route::get('/guardarda',[LedController::class, 'GuardarDa']);
Route::get('/verda',[LedController::class, 'VerDa']);
/*Pir-----------------------------------------------------------------------------*/
use App\Http\Controllers\PirController;
Route::get('/guardardatospir',[PirController::class, 'GuardarDatosPir']);
Route::get('/verdatospir',[PirController::class, 'VerDatosPir']);
/*Humo-----------------------------------------------------------------------------*/
//use App\Http\Controllers\HumoController;
Route::get('/guardardatoshumo',[HumoController::class, 'GuardarDatosHumo']);
Route::get('/verdatos',[HumoController::class, 'VerDatosHumo']);
/*Fotoresistencia--------------------------------------------------------------------*/
Route::get('/guardarfot',[FotoresController::class, 'GuardarDatosFot']);
Route::get('/verdatosfot',[FotoresController::class, 'VerDatosFot']);
/*Puerta-----------------------------------------------------------------------------*/
Route::get('/guardarpuerta',[PuertaController::class, ' GuardarDatosPuerta']);
Route::get('/verdatospuerta',[PuertaController::class, 'VerDatosPuerta']);