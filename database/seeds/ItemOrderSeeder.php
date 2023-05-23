<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemsOrders = [];

        for($i = 1; $i <= 20; $i++) {
            $itemsOrders[$i]['item_id'] = rand(1, 8);
            $itemsOrders[$i]['order_id'] = rand(1, 20);
        };

        foreach($itemsOrders as $itemOrder){
            DB::table('item_order')->insert($itemOrder);
        }
    }
}
