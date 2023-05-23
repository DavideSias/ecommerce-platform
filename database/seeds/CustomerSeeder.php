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
                'first_name' => 'Giovannino',
                'last_name'=> 'Pinco',
                'phone_number' => '11111111111',
            ],
            [
                'user_id' => 4,
                'address' => 'Via Roma',
                'first_name' => 'Marco',
                'last_name'=> 'Pallino',
                'phone_number' => '1111111112',
            ],
        ];

        foreach($customers as $customer){
            Customer::create($customer);
        }
    }
}
