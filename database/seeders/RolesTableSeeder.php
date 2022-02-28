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
                "id"    => 2,
                "title" => "Admin"
            ],
            [
                'id'    => 3,
                'title' => 'Speaker',
            ],
            [
                'id'    => 4,
                'title' => 'Delegate',
            ],
            [
                'id'    => 5,
                'title' => 'Sponsor',
            ],
            [
                'id'    => 6,
                'title' => 'Exhibitors',
            ],
            [
                'id'    => 7,
                'title' => 'Media',
            ],
            [
                'id'    => 8,
                'title' => 'Partners',
            ],
            [
                'id'    => 9,
                'title' => 'Guest of Honour',
            ],
            [
                'id'    => 10,
                'title' => 'User',
            ],
        ];

        Role::insert($roles);
    }
}


// don't edit roles especially id 😥