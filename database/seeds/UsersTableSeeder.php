<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@velemajstor.com',
            'password' => bcrypt('123456'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Majstor',
            'email' => 'majstor@velemajstor.com',
            'password' => bcrypt('111111'),
            'role' => 'majstor'
        ]);

        factory(App\User::class, 10)->create();
    }
}
