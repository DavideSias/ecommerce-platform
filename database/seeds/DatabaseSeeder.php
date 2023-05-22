<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlbumSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(CategoryItemSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ItemOrderSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SellerSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleUserSeeder::class);

    }
}
