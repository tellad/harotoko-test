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
        // factory(App\Models\User::class, 50)->create();
        $this->call([
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
            ShopsTableSeeder::class,
            TicketsTableSeeder::class,
            TicketImagesTableSeeder::class,
            ShopImagesTableSeeder::class,
            OrdersTableSeeder::class,
            ]);
    }
}
