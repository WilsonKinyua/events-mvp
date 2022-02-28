<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Super Admin',
            ],
            [
                'id'    => 2,
                'title' => 'Speaker',
            ],
            [
                'id'    => 3,
                'title' => 'Delegate',
            ],
            [
                'id'    => 4,
                'title' => 'Sponsor',
            ],
            [
                'id'    => 5,
                'title' => 'Exhibitors',
            ],
            [
                'id'    => 6,
                'title' => 'Media',
            ],
            [
                'id'    => 7,
                'title' => 'Partners',
            ],
            [
                'id'    => 8,
                'title' => 'Guest of Honour',
            ],
            [
                'id'    => 9,
                'title' => 'User',
            ],
        ];

        Role::insert($roles);
    }
}


// don't edit roles especially id 😥