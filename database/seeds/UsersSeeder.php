<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'email'        => 'admin@gmail.com',
            // 'level'        => 1,
            'password'     => bcrypt('admin'),
        ]);
    }
}
