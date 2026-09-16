<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'usertest1',
                'full_name' => 'User Test 1',
                'role' => 'Administrator'
            ],
            [
                'username' => 'usertest2',
                'full_name' => 'User Test 2',
                'role' => 'Manager'
            ],
            [
                'username' => 'usertest3',
                'full_name' => 'User Test 3',
                'role' => 'Cashier'
            ],
            [
                'username' => 'usertest4',
                'full_name' => 'User Test 4',
                'role' => 'Cashier'
            ],
            [
                'username' => 'usertest5',
                'full_name' => 'User Test 5',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}