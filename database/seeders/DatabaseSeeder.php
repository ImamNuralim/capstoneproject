<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Live_chat;
use App\Models\Murid;
use App\Models\Postingan;
use App\Models\Reports;
use App\Models\User_Umum;
use App\Models\Ustaz;
use App\Models\Materi_video;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Imam Nuralim',
            'username' => 'imamnuralim',
            'email' => 'imamnuralim@gmail.com',
            'is_super' => 1,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Im Admin',
            'username' => 'imadmin',
            'email' => 'imadmin@gmail.com',
            'is_super' => 0,
            'password' => bcrypt('12345')
        ]);

    }
}
