<?php

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            
            [
                'product_id' => 10,
            ],
            [
                'product_id' => 10,
            ],
            [
                'product_id' => 10,
            ],
            [
                'product_id' => 10,
            ],
            [
                'product_id' => 10,
            ],
            [
                'product_id' => 10,
            ],
            [
                'product_id' => 10,
            ],
            [
                'product_id' => 10,
            ],
            [
                'product_id' => 10,
            ],
            [
                'product_id' => 10,
            ],
        ]);
    }
}
