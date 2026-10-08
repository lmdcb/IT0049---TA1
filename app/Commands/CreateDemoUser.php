<?php

namespace App\Commands;

use App\Models\UserModel;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class CreateDemoUser extends BaseCommand
{
    protected $group = 'Users';
    protected $name = 'user:create-demo';
    protected $description = 'Create an initial demo user with a hashed password.';

    public function run(array $params)
    {
        $username = CLI::prompt('Username');
        $fullName = CLI::prompt('Full name');
        $password = CLI::prompt('Password');

        if (trim($username) === '' ||
            trim($fullName) === '' ||
            trim($password) === '') {
            CLI::error('All fields are required.');
            return;
        }

        $userModel = new UserModel();

        if ($userModel->where('username', $username)->first()) {
            CLI::error('Username already exists.');
            return;
        }

        $userModel->insert([
            'username'   => $username,
            'full_name'  => $fullName,
            'password'   => password_hash($password, PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        CLI::write('User created successfully.', 'green');
    }
}
