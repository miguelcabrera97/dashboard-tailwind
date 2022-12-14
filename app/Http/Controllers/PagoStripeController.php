<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;
use Illuminate\Support\Facades\Auth;

class PagoStripeController extends Controller {

    public function pagoSitio(Request $request){
          //return $request->sitioId;
          $idcreado = DB::table('clientes')->where('email','=',$request->emailuser)->first();
          $stripe = new \Stripe\StripeClient(
            'sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP'
          );

          $producto=$stripe->products->create([
            'name' => ''.$request->name.'',
            'description' => 'Sitio de Conectaply',
            'default_price_data'=>[
                'currency' => 'mxn',
                'unit_amount_decimal' => '20000',
                'recurring' => [

                "interval"=> "month",
                "interval_count"=> 1,
                ]
            ]

          ]);

           DB::table('facturacion')->insert([
             ['total' => '2000',
              'divisa' => 'mxn',


              'cliente' => ''.$idcreado->id_stripe.'',
              'estado' => 'Activa',
              'product_name' => ''.$producto->name.'',
             ]
           ]);
            //return $producto;
          $subscripcion = $stripe->checkout->sessions->create([
            'customer' => ''.$idcreado->id_stripe.'',
            'success_url' => 'http://127.0.0.1:8000/prueba/'.$request->sitioId.'',
            'cancel_url' => 'https://www.youtube.com',
            'line_items' => [
              [
                'price' => ''.$producto->default_price.'',
                'quantity' => 1,
              ],
            ],
            'mode' => 'subscription',
          ]);
          //return $subscripcion;
          return redirect()->away(''.$subscripcion->url.'');
    }

    public function cancelarSuscripcion(Request $request){
        $stripe = new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
        $stripe->subscriptions->cancel(
          ''.$request->sub.'',
          []
        );
        //DB::table('facturacion')->where('product_name', '=', $request->nombre )->delete();
        return view('pages/dashboard/dashboard');

    }

    public function pausarSuscripcion(Request $request){

      $stripe= new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');

      $stripe->subscriptions->update(
        ''.$request->sub.'',
        [
          'pause_collection' => ['behavior' => 'keep_as_draft']
        ],

      );

      // $update= DB::update(
      //   'update facturacion set estado = Pausados where id_sub = ?',
      //   [''.$request->sub.'']
      // );
      return view('pages/dashboard/dashboard');
    }

    public function reanudarSuscripcion(Request $request){
      $stripe= new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
      $stripe->subscriptions->update(
        ''.$request->sub.'',
        [
          'pause_collection' => '',
        ],

      );

      // DB::table('facturacion')->insert([
      //   [
      //     'estado' => 'Activa'
      //   ]]);
      //     }
    }

    public function facturacion(){
        //llave privada para acceder a stripe
        $stripe = new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
        //Consulta a BD para obtener el id del cliente
        $idcreado = DB::table('clientes')->where('email','=', ''.Auth::user()->email.'')->first();
        //Obtiene las facturas, las suscripciones activas y canceladas.
        $invoices = $stripe->invoices->all(['customer' => ''.$idcreado->id_stripe.'']);
        $cancel=$stripe->subscriptions->all(['customer' => ''.$idcreado->id_stripe.'', 'status'=>'canceled']);
        $active=$stripe->subscriptions->all(['customer' => ''.$idcreado->id_stripe.'']);
        $contador_id_Suscripcion=sizeof($active->data);
        $id_subs= array();
        //return $contador_id_Suscripcion;
        for($i=0; $i<$contador_id_Suscripcion; $i++){
           $id_subs[$i]= $active->data[$i]->id;
        }
        $cont2=intval(sizeof($cancel->data));
        $cont3=intval(sizeof($active->data));

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

        $sitios=DB::select('select product_name from facturacion');
        $cont4=sizeof($sitios);
        $product_name = array();
         for($i=0; $i<$cont4; $i++){
           $product_name[$i] = $sitios[$i];
         }

        $subscripciones = array_merge($canceladas, $activas);
        //return dd($active);
       return view('stripe.facturacion', compact('id_subs','invoices','end','start', 'subscripciones','product_name'));
    }
}
