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
            "company" =>"Mundo Quántico",
            "currency" => "PEN",
            "product" => "Book - Dominando el Sistema",
            "amount" => "300"
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
                    "amount" => 300,
                    "capture" => true,
                    "currency_code" => "PEN",
                    "description" => "Book - Dominando el Sistema",
                    "email" => $request->email,
                    "installments" => 0,
                    "antifraud_details" => array(
                        "address" => "Av. Lima 123",
                        "address_city" => "LIMA",
                        "country_code" => "PE",
                        "first_name" => "Will",
                        "last_name" => "Muro",
                        "phone_number" => "9889678986",
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
