<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$780kqrIBOuPazvobv7kWlOGOrU3NgNgOf1b6W9jbVjEW2LTy0lqy.',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
