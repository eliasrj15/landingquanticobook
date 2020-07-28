<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Requests;
use Culqi\Culqi;


class HomeController extends Controller
{
    public function index (){

        $key_public = "pk_live_37CG47QVwOQP8Pk9";
        $datos =[
            "company" =>"Mundo Quantico",
            "currency" => "PEN",
            "product" => "Libro - Dominando el Sistema",
            "amount" => "99900"
        ];
        return view ('welcome', compact('key_public', 'datos'));
    }

    public function save_amount (Request $request){
        try {
            //dd($request->token);
            Requests::register_autoloader();
            $SECRET_KEY = "sk_live_xeEHLNAvdPNu0Xgx";
            $culqi = new Culqi(array('api_key' => $SECRET_KEY));

            $charge = $culqi->Charges->create(
                array(
                    "amount" => 99900,
                    "capture" => true,
                    "currency_code" => "PEN",
                    "description" => "Libro - Dominando el Sistema",
                    "email" => $request->email,
                    "installments" => 0,
                    "antifraud_details" => array(
                        "address" => "Jr. Manuel del Pino N° 571 - Lince, Lima",
                        "address_city" => "LIMA",
                        "country_code" => "PE",
                        "first_name" => "Jose Manuel",
                        "last_name" => "Carbajal Umpiri",
                        "phone_number" => "999999999",
                    ),
                    "source_id" => $request->token
                )
            );

            return $charge;
        }catch (\Exception $e){
            return $e->getMessage();
        }


    }
}
