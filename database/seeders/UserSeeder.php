<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'teste@teste.com'],
            [
                'name' => 'teste',
                'password' => Hash::make('123')
            ]
        );
    }
}
