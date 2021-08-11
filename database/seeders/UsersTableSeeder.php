<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'John Doe',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'designation'    => 'Doctor',
                'organisation'   => 'Thika',
                'state'          => 'Kenya',
                'city_town'      => 'Nairobi',
                'website'        => '',
            ],
        ];

        User::insert($users);
    }
}
