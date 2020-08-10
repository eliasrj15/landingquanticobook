<?php

namespace App\Http\Controllers;

use Requests;
use App\Product;
use Culqi\Culqi;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index (){

        $key_public = "pk_live_37CG47QVwOQP8Pk9";
        $mem = Product::get(['id', 'name','amount2']);

        $datos =[
            "company" =>"Mundo Quantico",
            "currency" => "PEN",
            "product" => "Libro - Dominando el Sistema",
            "amount" => "99900"
        ];
        return view ('welcome', compact('key_public', 'datos','mem'));
    }

    public function save_amount (Request $request){
        try {
            Requests::register_autoloader();
            $SECRET_KEY = "sk_live_xeEHLNAvdPNu0Xgx";
            // $SECRET_KEY = "sk_test_KJ4SzttFNT2HNrz7";
            $culqi = new Culqi(array('api_key' => $SECRET_KEY));

            $amout = 0;
            $desciption = '';

            if ($request->pi == 99) {
                $amout = 99900;
                $desciption = 'Libro - Dominando el Sistema';
            } else {
                $product = Product::find($request->pi);
                $amout = $product->amount2;
                $desciption = 'Pago de Membresia';

                if ($product == null) {
                    return response()->json(9999999);
                }
            }

            $charge = $culqi->Charges->create(
                array(
                    "amount" => $amout,
                    "capture" => true,
                    "currency_code" => "PEN",
                    "description" => $desciption,
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

            return response()->json($charge);
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
}
