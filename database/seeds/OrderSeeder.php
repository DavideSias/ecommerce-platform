<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++) {
            Order::create([
                'customer_id' => rand(1, 2),
                'tot_price' => rand(50, 400),
                'note' => "Note specifiche dell'ordine effettuato"
            ]);
        }
    }
}
