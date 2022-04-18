<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "azaviel_somda_admin",
            'email' => 'info@knowledgeforafrica.com',
            'password' => Hash::make('kh3&RC54gdmWXFNz@J'),
            'email_verified_at' => now()
        ]);
    }
}
