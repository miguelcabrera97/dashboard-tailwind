<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagoStripeController;
use App\Http\Controllers\TemplatesBdController;
use App\Http\Controllers\SitesController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });
});

Route::controller(UserController::class)->group(function(){
    //Muestra los sitios creados
    Route::get('/sites','show')->name('sites');
    //Muestra las plantillas disponibles
    Route::get('/plantillas','plantillas')->name('plantillas');
});

Route::controller(SitesController::class)->group(function(){
    //Ruta a Controlador para crear sitio
    Route::post('/crear','crear')->name('crear');
    //Ruta para editar sitios
    Route::get('/editar/{cuenta}/{id}','editar');
    //Ruta para borrar sitios
    Route::get('/delete/{site}/{id}','delete');
});

//Solo se usa una vez
Route::get('/cargar',[TemplatesBdController::class,'templates']);

Route::controller(PagoStripeController::class)->group(function(){
    //Llama a la API de Stripe para mostrar las subcripciones, facturas
    Route::get('/facturacion','facturacion')->name('facturacion');
    //Boton para cancelar Subscripciones, recibe el id de subscripcion
    Route::post('/cancelar','cancelarSuscripcion')->name('cancelar');
    //Boton para pausar Subscripciones, recibe el id de subscripcion
    Route::post('/pausar','pausarSuscripcion')->name('pausar');
    //Boton para reactivar Subscripciones, recibe el id de subscripcion
    Route::post('/reanudar','reanudarSuscripcion')->name('reanudar');
    //Ruta a checkout, recibe el id del sitio  y nombre
    Route::get('/checkout','pagoSitio')->name('check');
});

Route::post('/datos', function(Request $request){
  $nombre = $request->nombre;
  $id = $request->siteid;
  return view('stripe.checkout', compact('nombre', 'id'));
});

Route::post('/publish',[SitesController::class,'publish'])->name('publicar');
Route::get('prueba/{sitioId}', function ($sitioId) {
    return view('users.publicando_sitio', compact('sitioId'));
});

Route::post('/despublish',[SitesController::class,'despublish'])->name('despublicar');
//Vista de soporte
// Route::get('/soporte', function(){
//   return view('soporte.soporte');
// })->name('soporte');
Route::get('/soporte',[SoporteController::class,'sitios'])->name('soporte');
Route::get('/tickets',[SoporteController::class,'ticket'])->name('tickets');


Route::post("/supportform",[SoporteController::class,'InsertDataSupport'])->name('supportform');
