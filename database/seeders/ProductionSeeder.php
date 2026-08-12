<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // TODO: replace placeholder values before running against production.
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Phil McCub',
                'password' => 'ChangeMe123!',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
