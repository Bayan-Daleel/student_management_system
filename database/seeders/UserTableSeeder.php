<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'=>1,
            'active'=>1,
            'name'=>'bayan',
            'username'=>'bayan',
            'email'=>'bayan.dl@gmail.com',
            'password'=>bcrypt('1234'),
            'remember_token'=>str_random(10),
        ]);
    }
}
