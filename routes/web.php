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
use Illuminate\Http\Request;

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

//Route::get('/cargar',[TemplatesBdController::class,'templates']);



Route::get('/facturacion', function(){
    $stripe = new \Stripe\StripeClient(
        'sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP'
      );
    $idcreado = DB::table('clientes')->where('email','=', ''.Auth::user()->email.'')->first();

    $responses = $stripe->subscriptions->all( ['customer' => ''.$idcreado->id_stripe.''] );
    $invoices = $stripe->invoices->all(['customer' => ''.$idcreado->id_stripe.'']);
    $cancel=$stripe->subscriptions->all(['customer' => ''.$idcreado->id_stripe.'', 'status'=>'canceled']);
    $active=$stripe->subscriptions->all(['customer' => ''.$idcreado->id_stripe.'']);
    //return dd($invoices->data[1]->lines->data[0]->period->end);
    $cont2=intval(sizeof($cancel->data));
    $cont3=intval(sizeof($active->data));
    $sub = array();
   
    //dd($cancel, $active);
    //return 'Hola';
    
    $start = array();
    $end = array();
    $activas = array();
    $canceladas = array();

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

    $subscripciones = array_merge($canceladas, $activas);
    //dd($suscripciones);
    //return $invoices;
   // return sizeof($invoices->data);
   
   return view('stripe.facturacion', compact('invoices','end','start', 'subscripciones'));
})->name('facturacion');


Route::get('/checkout', function(){
    return view('stripe.checkout');
});

Route::get('/Mxn-Anual/{email?}',[PagoStripeController::class, 'PagarMxnAnual'])-> name("mxn");

Route::get('/pago', function(){
    $stripe = new \Stripe\StripeClient(
        'sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP'
      );
     $pago = $stripe->paymentLinks->create([
        'line_items' => [
          [
            'price' => 'price_1La0lrIouA9z8SYyz2y25JYC',
            'quantity' => 1,
          ],
        ],
      ]);
      return redirect()->away(''.$pago->url.'');
});


Route::post('/cancelar', function(Request $request){
  
     $stripe = new \Stripe\StripeClient(
     'sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP'
   );
   $stripe->subscriptions->cancel(
     ''.$request->sub.'',
     []
   );
   return view('pages/dashboard/dashboard');
})->name('cancelar');

Route::get('/sus', function(){
  
  $stripe = new \Stripe\StripeClient(
     'sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
   $subs=$stripe->subscriptions->all();
   $cont = intval( sizeof($subs->data));
   $status = array();
   for ($i=0; $i < $cont ; $i++) {
    $status[$i] = $subs->data[$i]->status;
   }
   //return $cont;
   return $status;
  // return view('stripe.suscripcion', compact('subs', 'status'));
  
});