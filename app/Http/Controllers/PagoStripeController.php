<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
             [
              'total' => '2000',
              'divisa' => 'mxn',
              'cliente' => ''.$idcreado->id_stripe.'',
              'estado' => 'Activa',
              'product_name' => ''.$producto->name.'',
             ]
           ]);

           DB::table('sitios')->where('pagado', false)->update(['pagado'=>true]);

            //return $producto;
          $subscripcion = $stripe->checkout->sessions->create([
            'customer' => ''.$idcreado->id_stripe.'',
            'success_url' => 'http://127.0.0.1:8000/',
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
      //return $request;
        $stripe = new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
        $stripe->subscriptions->cancel(
          ''.$request->sub.'',
          []
        );
        //DB::table('facturacion')->where('product_name', '=', $request->nombre )->delete();
        DB::table('facturacion')->where('product_name', $request->nombre)->update(['estado'=>'Cancelada']);
        return redirect()->route('facturacion');

    }

    public function pausarSuscripcion(Request $request){
     
      $stripe= new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');

      $stripe->subscriptions->update(
        ''.$request->sub.'',
        [
          'pause_collection' => ['behavior' => 'keep_as_draft']
        ],

      );
      DB::table('facturacion')->where('product_name', $request->nombre)->update(['estado'=>'Pausado']);
      // $update= DB::update(
      //   'update facturacion set estado = Pausados where id_sub = ?',
      //   [''.$request->sub.'']
      // );
      //return $request->sub;
      return redirect()->route('facturacion');
    }

    public function reanudarSuscripcion(Request $request){
      
      $stripe= new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
      $stripe->subscriptions->update(
        ''.$request->sub.'',
        [
          'pause_collection' => '',
        ],
        
      );
      //return $request->sub;
      DB::table('facturacion')->where('product_name', $request->nombre)->update(['estado'=>'Activa']);
      return redirect()->route('facturacion');
    }

    public function facturacion(){
        //llave privada para acceder a stripe
        $stripe = new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
        //Consulta a BD para obtener el id del cliente
        $idcreado = DB::table('clientes')->where('email','=', ''.Auth::user()->email.'')->first();
        $id_stripe = $idcreado->id_stripe;
        $portal=$stripe->billingPortal->sessions->create([
          'customer' => ''.$id_stripe.'',
          'return_url' => 'http://127.0.0.1:8000'
        ]);
       //return $portal;
       return redirect()->away($portal->url);
        
        $sub_status=DB::table('facturacion')->where('cliente','=', ''.$id_stripe.'')->get();

        
        $con_status = sizeof($sub_status);
        $status=array();
        for($i=0; $i<$con_status; $i++){
          $status[$i]=$sub_status[$i]->estado;
        }
        
        //Obtiene las facturas, las suscripciones activas y canceladas.
        $invoices = $stripe->invoices->all(['customer' => ''.$idcreado->id_stripe.'']);
        //return $invoices;
        $cancel=$stripe->subscriptions->all(['customer' => ''.$idcreado->id_stripe.'', 'status'=>'canceled']);
        $active=$stripe->subscriptions->all(['customer' => ''.$idcreado->id_stripe.'']);
        
        //return $active;
        $id_subs= array();
        //return $contador_id_Suscripcion;
        
        $cont2=intval(sizeof($cancel->data));
        $cont3=intval(sizeof($active->data));

        $start = array();
        $end = array();
        // $activas = array();
        // $canceladas = array();

        $cont = intval( sizeof($invoices->data)) ;
        for ($i=0; $i < $cont; $i++) {
            $start[$i] =  $invoices->data[$i]->lines->data[0]->period->start;
            $end[$i] =  $invoices->data[$i]->lines->data[0]->period->end;
            //$status[$i] = $subs->data[$i]->status;
        };

        // for($i=0; $i<$cont2; $i++){
        //   $canceladas[$i] = $cancel->data[$i]->status;
        // }

        // for($i=0; $i<$cont3; $i++){
        //   $activas[$i] = $active->data[$i]->status;
        // }

        //$sitios=DB::select('select product_name from facturacion');
        $sitios2= DB::table('facturacion')->where('cliente', ''.$idcreado->id_stripe.'')->orderBy('id','desc')->get();

        $cont4=sizeof($sitios2);
        $product_name = array();
         for($i=0; $i<$cont4; $i++){
           $product_name[$i] = $sitios2[$i];
         }

        //$subscripciones = array_merge($canceladas, $activas);

        //return $id_subs;
        //return dd($active);
        ///return $sitios2;
       //return $subscripciones;
       //return $status;
       return view('stripe.facturacion', compact('invoices','end','start', 'product_name','status'));
    }
}
