<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' => 'S/. 1,500.00',
                'amount' => '1500.00',
                'amount2' => '150000'
            ]
        );
        Product::create(
            [
                'name' => 'S/. 2,500.00',
                'amount' => '2500.00',
                'amount2' => '250000'
            ]
        );
        Product::create(
            [
                'name' => 'S/. 4,000.00',
                'amount' => '4000.00',
                'amount2' => '400000'
            ]
        );
        Product::create(
            [
                'name' => 'S/. 5,000.00',
                'amount' => '5000.00',
                'amount2' => '500000'
            ]
        );
        Product::create(
            [
                'name' => 'S/. 10,000.00',
                'amount' => '10000.00',
                'amount2' => '1000000'
            ]
        );
        Product::create(
            [
                'name' => 'S/. 15,000.00',
                'amount' => '15000.00',
                'amount2' => '1500000'
            ]
        );
        Product::create(
            [
                'name' => 'S/. 20,000.00',
                'amount' => '20000.00',
                'amount2' => '2000000'
            ]
        );
        Product::create(
            [
                'name' => 'S/. 25,000.00',
                'amount' => '25000.00',
                'amount2' => '2500000'
            ]
        );
    }
}
