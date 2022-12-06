<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;
use Illuminate\Support\Facades\Auth;

class PagoStripeController extends Controller
{
    // public function PagarMxnAnual(Request $emailuser){
    //     // This is your test secret API key.
    //     \Stripe\Stripe::setApiKey('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
    //  //   return $emailuser->emailuser;
    //     header('Content-Type: application/json');

    //     $idcreado = DB::table('clientes')->where('email','=',$emailuser->emailuser)->first();

        
    //     $checkout_session = \Stripe\Checkout\Session::create([
    //     'line_items' => [[
    //         # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    //         'price' => 'price_1La0lrIouA9z8SYyz2y25JYC',
    //         'quantity' => 1,
    //     ]],
    //     'mode' => 'subscription',
    //     'customer' => ''.$idcreado->id_stripe.'',
    //     'success_url' => 'https://www.google.com',
    //     'cancel_url' => "https://conexioneleven.socialsystemsconnect.com/public/facturacion",
    //     ]);


    //     return redirect()->away(''.$checkout_session->url.'');

    // }

    public function pagoSitio(Request $request){
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
             'estado' => 'nose',
             'product_name' => ''.$producto->name.'',
            ]
          ]);
            //return $producto;
          $subscripcion = $stripe->checkout->sessions->create([
            'customer' => ''.$idcreado->id_stripe.'',
            'success_url' => 'http://127.0.0.1:8000/facturacion',// https://api.duda.co/api/sites/multiscreen/publish/{site_name}0
            'cancel_url' => 'https://www.youtube.com',
            'line_items' => [
              [
                'price' => ''.$producto->default_price.'',
                'quantity' => 1,
              ],
            ],
            'mode' => 'subscription',
          ]);
          
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
      // Set your secret key. Remember to switch to your live secret key in production.
      // See your keys here: https://dashboard.stripe.com/apikeys
      $stripe= new \Stripe\StripeClient('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');

      $stripe=\Stripe\Subscription::update(
        ''.$request->sub.'',
        [
          'pause_collection' => '',
        ]
      );
          }
}
