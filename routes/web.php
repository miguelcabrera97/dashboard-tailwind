<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TemplatesBdController;
use App\Http\Controllers\SitesController;
use App\Http\Controllers\UserController;

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });    
});

Route::get('/sites',[UserController::class,'show'])->name('sites');
Route::get('/plantillas',[UserController::class, 'plantillas'])->name('plantillas');

Route::controller(SitesController::class)->group(function(){
    
    //Ruta a Crontolador para mostrar Plantillas Disponibles
    //Route::get('/crearsitio','crear')->name('crearsitio'); 

    //Ruta para mostrar Sitios que el Usuario a Creado por medio de API
    // Route::get('/sitios/{user}',[SitesController::class, 'sitios'])->name('sitios');

    //Ruta a Controlador para crear sitio
    Route::post('/crear','crear')->name('crear');

    Route::get('/editar/{cuenta}/{id}','editar');

    Route::get('/delete/{site}/{id}','delete');

    Route::get('/templates','show')->name('templates');
});

//

Route::get('/cargar',[TemplatesBdController::class,'templates']);