<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'Username'=>'trisha',
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('1111'),
            'role'=>'admin'
        ]);   
    }
}
