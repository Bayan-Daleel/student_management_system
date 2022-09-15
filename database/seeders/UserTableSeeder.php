<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::insert([
            ['name'=>'Admin'],
            ['name'=>'Receiptionist'],
            ['name'=>'Manager'],
            ['name'=>'CEO'],
        ]);
    }
}
