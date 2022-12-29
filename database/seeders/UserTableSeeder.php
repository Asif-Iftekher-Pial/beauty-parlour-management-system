<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        'name' => 'Ronell Chelsea',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('123456'),
        'role' =>'admin',
        'address'=>'Rizal,Philippines',
        'mobile'=> '639661901454',
        ]);
    }
}
