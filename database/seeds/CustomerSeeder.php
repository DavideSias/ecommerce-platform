<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'user_id' => 3,
                'address' => 'Via Mazzini',
                'first_name' => 'Michele Shop',
                'last_name'=> 'michele-shop',
                'phone_number' => '11111111111',
            ],
        ];

        foreach($customers as $customer){
            Customer::create($customer);
        }
    }
}
