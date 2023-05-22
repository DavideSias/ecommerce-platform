<?php

use App\Seller;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sellers = [
            [
                'user_id' => 1,
                'name' => 'Michele Shop',
                'slug'=> 'michele-shop',
                'vat_number' => '11111111111',
                'logo_image' => 'https://picsum.photos/id/237/200/300',
                'cover_image' => 'https://picsum.photos/id/1/200/300',
            ],
            [
                'user_id' => 2,
                'name' => 'Davide Shop',
                'slug'=> 'davide-shop',
                'vat_number' => '11111111112',
                'logo_image' => 'https://picsum.photos/id/19/200/300',
                'cover_image' => 'https://picsum.photos/id/20/200/300',
            ]
        ];

        foreach($sellers as $seller){
            Seller::create($seller);
        }
    }
}
