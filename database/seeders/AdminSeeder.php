<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'role' => 'owner',
                'name' => 'Owner',
                'email' => 'owner@test.com',
                'password' => bcrypt('secret123')
            ],
            [
                'role' => 'administrator',
                'name' => 'Administrator',
                'email' => 'admin@test.com',
                'password' => bcrypt('secret123')
            ],
            [
                'role' => 'payroll',
                'name' => 'Payroll Officer',
                'email' => 'payroll@test.com',
                'password' => bcrypt('secret123')
            ],

        ];
    }
}
