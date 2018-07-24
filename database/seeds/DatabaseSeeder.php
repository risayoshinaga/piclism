<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CameraTableSeeder::class);
        $this->call(BorrowTableSeeder::class);
        $this->call(LendTableSeeder::class);
        $this->call(CamedatasTableSeeder::class);
    }
}
