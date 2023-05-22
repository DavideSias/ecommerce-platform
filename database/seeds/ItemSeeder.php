<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/../../items.json');
        $items = json_decode($json, true);
        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
