<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

	        'name'			=>'Honey',
	        'price'			=>'750',
	        'description'	=>'Best honey in Bangladesh',
	        'quantity'		=>'10',
	        'brand'		=>'Agro',

        
        ]);

        factory(Product::class, 10)->create();
    }
}
