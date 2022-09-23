<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagoStripeController;
use App\Http\Controllers\TemplatesBdController;
use App\Http\Controllers\SitesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

});

//Solo se usa uan vez

Route::get('/cargar',[TemplatesBdController::class,'templates']);



Route::get('/facturacion', function(){
    $stripe = new \Stripe\StripeClient(
        'sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP'
      );
    $idcreado = DB::table('clientes')->where('email','=', ''.Auth::user()->email.'')->first();


    $responses = $stripe->subscriptions->all( ['customer' => ''.$idcreado->id_stripe.''] );
    $invoices = $stripe->invoices->all(['customer' => ''.$idcreado->id_stripe.'']);
    //return dd($invoices->data[1]->lines->data[0]->period->end);
    
    
    $start = array();
    $end = array();
    

    $cont = intval( sizeof($invoices->data)) ;
    for ($i=0; $i < $cont  ; $i++) { 
        $start[$i] =  $invoices->data[$i]->lines->data[0]->period->start;
      
        $end[$i] =  $invoices->data[$i]->lines->data[0]->period->end;
        
    }


   // return sizeof($invoices->data);
   return view('stripe.facturacion', compact('invoices','end','start'));
})->name('facturacion');


Route::get('/checkout', function(){
    return view('stripe.checkout');
});

Route::get('/Mxn-Anual/{email?}',[PagoStripeController::class, 'PagarMxnAnual'])-> name("mxn");