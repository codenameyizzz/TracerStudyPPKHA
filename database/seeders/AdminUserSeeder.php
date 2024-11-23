<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $adminEmail = 'admin@example.com';

        // Cek apakah pengguna admin sudah ada
        $admin = User::where('email', $adminEmail)->first();

        if (!$admin) {
            // Jika belum ada, buat pengguna admin baru
            User::factory()->admin()->create([
                'name' => 'Admin User',
                'email' => $adminEmail,
                'password' => Hash::make('password123'),
            ]);
        } else {
            // Jika sudah ada, perbarui data pengguna admin
            $admin->update([
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ]);
        }
    }
}
