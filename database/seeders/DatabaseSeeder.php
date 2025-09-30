<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::firstOrCreate(
            ['email' => 'teste@gmail.com'],
            [
                'name' => 'Arnold Schwarzenegger', 
                'password' => Hash::make('123')
            ]
        );


        Contact::factory(10)->create([
            'user_id' => $user->id,
        ]);
    }
}