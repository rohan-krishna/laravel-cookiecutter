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
        //
        $admin = User::create(['name' => 'Admin', 'email' => 'admin@test.test', 'password' => bcrypt('password!23')]);
    }
}
