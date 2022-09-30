<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;

class PagoStripeController extends Controller
{
    public function PagarMxnAnual(Request $emailuser){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
     //   return $emailuser->emailuser;
        header('Content-Type: application/json');

        $idcreado = DB::table('clientes')->where('email','=',$emailuser->emailuser)->first();

        
        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1La0lrIouA9z8SYyz2y25JYC',
            'quantity' => 1,
        ]],
        'mode' => 'subscription',
        'customer' => ''.$idcreado->id_stripe.'',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://conexioneleven.socialsystemsconnect.com/public/facturacion",
        ]);


        return redirect()->away(''.$checkout_session->url.'');

    }

    public function pagoSitio(Request $request){
        $stripe = new \Stripe\StripeClient(
            'sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP'
          );
          
          
          $producto=$stripe->products->create([
            'name' => ''.$request->name.'',
            'description' => 'Sitio de Conectaply',
            'default_price_data'=>[
                'currency' => 'mxn',
                'unit_amount_decimal' => '120000',
                'recurring' => [
                
                "interval"=> "month",
                "interval_count"=> 1,
                
            ]
            ]

            
          ]);
            //return $producto;
          $subscripcion = $stripe->checkout->sessions->create([
            'customer' => 'cus_MWpr4MwsIGU6iX',
            
            'success_url' => 'https://www.google.com',
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
        //   $link=$stripe->paymentLinks->create([
        //     'line_items' => [
        //       [
        //         'price' => ''.$producto->default_price.'',
        //         'quantity' => 1,
                
                
        //       ],
        //     ],
        //   ]);
          return redirect()->away(''.$subscripcion->url.'');
    }
}
