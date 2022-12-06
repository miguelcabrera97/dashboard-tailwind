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
//Muestra los sitios creados
Route::get('/sites',[UserController::class,'show'])->name('sites');
//Muestra las plantillas disponibles
Route::get('/plantillas',[UserController::class, 'plantillas'])->name('plantillas');

Route::controller(SitesController::class)->group(function(){

    //Ruta a Crontolador para mostrar Plantillas Disponibles
    //Route::get('/crearsitio','crear')->name('crearsitio');

    //Ruta para mostrar Sitios que el Usuario a Creado por medio de API
    // Route::get('/sitios/{user}',[SitesController::class, 'sitios'])->name('sitios');

    //Ruta a Controlador para crear sitio
    Route::post('/crear','crear')->name('crear');
    //Ruta para editar sitios
    Route::get('/editar/{cuenta}/{id}','editar');
    //Ruta para borrar sitios
    Route::get('/delete/{site}/{id}','delete');

});

//Solo se usa una vez
Route::get('/cargar',[TemplatesBdController::class,'templates']);


//Llama a la API de Stripe para mostrar las subcripciones, facturas
Route::get('/facturacion', function(){
    //llave privada para acceder a stripe
    $stripe = new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
    //Consulta a BD para obtener el id del cliente
    $idcreado = DB::table('clientes')->where('email','=', ''.Auth::user()->email.'')->first();
    //Obtiene los productos, las facturas, las suscripciones activas y canceladas.
    $productos = $stripe->products->all([]);
    $invoices = $stripe->invoices->all(['customer' => ''.$idcreado->id_stripe.'']);
    $cancel=$stripe->subscriptions->all(['customer' => ''.$idcreado->id_stripe.'', 'status'=>'canceled']);
    $active=$stripe->subscriptions->all(['customer' => ''.$idcreado->id_stripe.'']);
    //return dd($invoices->data[1]->lines->data[0]->period->end);
    $cont2=intval(sizeof($cancel->data));
    $cont3=intval(sizeof($active->data));
    

    //dd($cancel, $active);
    //return 'Hola';
    $prod = array();
    $start = array();
    $end = array();
    $activas = array();
    $canceladas = array();
    $descripcion = array();

    $d1 =array();
    $d2 =array();

    $cont = intval( sizeof($invoices->data)) ;
    for ($i=0; $i < $cont; $i++) {
        $start[$i] =  $invoices->data[$i]->lines->data[0]->period->start;
        $end[$i] =  $invoices->data[$i]->lines->data[0]->period->end;
        //$status[$i] = $subs->data[$i]->status;
    };

    for($i=0; $i<$cont2; $i++){
      $canceladas[$i] = $cancel->data[$i]->status;

    }

    for($i=0; $i<$cont3; $i++){
      $activas[$i] = $active->data[$i]->status;

    }

    $sitios=DB::select('select product_name from facturacion');
    //return $sitios;
    $cont4=sizeof($sitios);
    $product_name = array();
     for($i=0; $i<$cont4; $i++){
       $product_name[$i] = $sitios[$i];
     }




    $subscripciones = array_merge($canceladas, $activas);
     //return $product_name;
    //return $productos;
    //return $descripcion;
    //return $productos->data[0]->name;
    //dd($invoices);
    //return $active;
    //return $idcreado;
    //return $invoices;
    //return sizeof($invoices->data);
    //return $productos;
   return view('stripe.facturacion', compact('invoices','end','start', 'subscripciones', 'descripcion','product_name'));
})->name('facturacion');

//Ruta a checkout
Route::get('/checkout', function(){return view('stripe.checkout');});

// Boton para cancelar Subscripciones, recibe el id de subscripcion
Route::post('/cancelar', [PagoStripeController::class,'cancelarSuscripcion'])->name('cancelar');

//
Route::get('/checkout',[PagoStripeController::class,'pagoSitio'])->name('check');

Route::post('/datos', function(Request $request){
  $nombre = $request->nombre;

  return view('stripe.checkout', compact('nombre'));

});


//Vista de soporte
// Route::get('/soporte', function(){
//   return view('soporte.soporte');
// })->name('soporte');
Route::get('/soporte',[SoporteController::class,'sitios'])->name('soporte');
Route::get('/tickets',[SoporteController::class,'ticket'])->name('tickets');
