<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@pos.com'],
            [
                'name' => 'Admin Toko',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'kasir@pos.com'],
            [
                'name' => 'Kasir Rina',
                'password' => Hash::make('password'),
                'role' => 'kasir',
            ]
        );

        User::updateOrCreate(
            ['email' => 'mimin@pos.com'],
            [
                'name' => 'Kasir mimin',
                'password' => Hash::make('password'),
                'role' => 'kasir',
            ]
        );

        $this->call(CategorySeeder::class);
    }
}