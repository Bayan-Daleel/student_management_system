<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'bayan',
            'username'=>'bayan',
            'email'=>'bayan.dl@gmail.com',
            'password'=>bcrypt('1234'),
            'remember_token'=>str_random(10),
        ]);
    }
}
