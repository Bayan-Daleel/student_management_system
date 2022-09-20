<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        Role::insert([
            ['name'=>'Admin'],
            ['name'=>'Receiptionist'],
            ['name'=>'Manager'],
            ['name'=>'CEO'],
        ]);

      User::factory()->create([
          'role_id'=>1,
          'active'=>1,
          'name'=>'bayan',
          'username'=>'bayan',
          'email'=>'bayan.dl@gmail.com',
          'password'=>bcrypt('1234'),
          'remember_token'=>random_int(9,10),
         ]);
      User::factory()->create([
          'role_id'=>2,
          'active'=>1,
          'name'=>'asmaa',
          'username'=>'asmaa',
          'email'=>'asmaa.dl@gmail.com',
          'password'=>bcrypt('1234'),
          'remember_token'=>random_int(9,10),
         ]);
    }
}
