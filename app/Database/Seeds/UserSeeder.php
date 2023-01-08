<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

        $user_object->insertBatch([
            [
                "name" => "Naimur Rahman",
                "email" => "naimur@gmail.com",
                "phone" => "7899654125",
                "role" => "admin",
                "password" => password_hash("abc123", PASSWORD_DEFAULT)
            ],
            [
                "name" => "Rabbany",
                "email" => "rabbany@gmail.com",
                "phone" => "8888888888",
                "role" => "editor",
                "password" => password_hash("abc123", PASSWORD_DEFAULT)
            ]
        ]);
    }
}
