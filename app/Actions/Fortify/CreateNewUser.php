<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pais' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $client = new \GuzzleHttp\Client();
        // DUDA ACCOUNT CREATE
        $response = $client->request('POST', 'https://api.duda.co/api/accounts/create', [
            'body' => '{"account_type":"CUSTOMER","account_name":"'.$input['email'].'","first_name":"'.$input['name'].'" ,"last_name":"'.$input['last_name'].'","lang":"es"}',
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
                'Content-Type' => 'application/json',
            ],
            ]);
            
        $stripe = new \Stripe\StripeClient(
            'sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP'
          );

         $customer = $stripe->customers->create(array(
            'email' => $input['email'],
            'name'=>$input['name'],
            'description'=> 'Cliente Social Conecta',
            //'currecy' => 'mxn'
          ));

        DB::table('clientes')->insert([
            'id_stripe' => $customer->id,
            'name' => $input['name'],
            'email' => $customer->email,
            'descripcion'=>$customer->description,
            //'currency' => $customer->currency,
            'invoice_prefix' => $customer->invoice_prefix,
            ]);

        
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'last_name' => $input['last_name'],
            'pais' => $input['pais'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
