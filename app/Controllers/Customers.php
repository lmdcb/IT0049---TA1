<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'User Test 1',
                'email' => 'usertest1@email.com',
                'phone' => '09111111111'
            ],
            [
                'full_name' => 'User Test 2',
                'email' => 'usertest2@email.com',
                'phone' => '09222222222'
            ],
            [
                'full_name' => 'User Test 3',
                'email' => 'usertest3@email.com',
                'phone' => '09333333333'
            ],
            [
                'full_name' => 'User Test 4',
                'email' => 'usertest4@email.com',
                'phone' => '09444444444'
            ],
            [
                'full_name' => 'User Test 5',
                'email' => 'usertest5@email.com',
                'phone' => '09555555555'
            ]
        ];

        return view('customers', $data);
    }
}