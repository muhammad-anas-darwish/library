<?php

namespace Database\Seeders;

use App\Domains\Core\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

        User::factory()->count(10)->create()->each(function ($user, $i) {
            $user->update([
                'name' => "User $i",
                'email' => "user.$i@example.com",
            ]);
        });
    }
}
