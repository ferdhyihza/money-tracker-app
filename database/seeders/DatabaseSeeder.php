<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'google_id' => '123',
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => 'ava'
        ]);

        Account::create([
            'user_id' => 1,
            'name' => 'Dompet',
            'type' => 'Cash',
            'balance' => 50000
        ]);
        Account::create([
            'user_id' => 1,
            'name' => 'Livin',
            'type' => 'Bank',
            'balance' => 100000
        ]);
        Account::create([
            'user_id' => 1,
            'name' => 'Bank Jatim',
            'type' => 'Bank',
            'balance' => 100000
        ]);
    }
}
