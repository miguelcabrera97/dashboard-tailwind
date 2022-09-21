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
}
