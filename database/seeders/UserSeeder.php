<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Arjun Regmi',
            'email' => 'arjunregmi3344@gmail.com',
            'mobile_number'=>'9842148199',
            'password' => Hash::make('1234567'),
            'is_admin' =>true
        ]);

    }
}
