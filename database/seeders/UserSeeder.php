<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Kenn Secusana',
                'email' => 'kennsecusana@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('kenn123')
            ],
            [
                'name' => 'Severus Snape',
                'email' => 'severussnape@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('severus123')
            ],
            [
                'name' => 'Draco Malfoy',
                'email' => 'dracomalfoy@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('draco123')
            ],

        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}
