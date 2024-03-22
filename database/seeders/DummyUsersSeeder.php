<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            //data ustaz
            [
                'username' => 'elgato12',
                'name' => 'elgato',
                'email' => 'elgato@gmail.com',
                'password' => bcrypt('ustaz'),
                'telp'=>'081337010101',
                'role' => 'ustaz',
                'kategori' => 'Ilmu Fikih'
            ],
            [
                'username' => 'gustavofring',
                'name' => 'gustavo',
                'email' => 'gustavo@gmail.com',
                'password' => bcrypt('ustaz'),
                'telp'=>'081337010102',
                'role' => 'ustaz',
                'kategori' => 'Ilmu Tauhid'
            ],
            [
                'username' => 'haisenberg',
                'name' => 'haisenberg',
                'email' => 'white@gmail.com',
                'password' => bcrypt('ustaz'),
                'telp'=>'081337010103',
                'role' => 'ustaz',
                'kategori' => 'Ilmu Tasawuf'
            ],
            [
                'username' => 'jessepinkman',
                'name' => 'pink man',
                'email' => 'jesse@gmail.com',
                'password' => bcrypt('ustaz'),
                'telp'=>'081337010104',
                'role' => 'ustaz',
                'kategori' => 'Ilmu Tafsir'
            ],
            [
                'username' => 'doneladio',
                'name' => 'doneladio',
                'email' => 'eladio@gmail.com',
                'password' => bcrypt('ustaz'),
                'telp'=>'081337010105',
                'role' => 'ustaz',
                'kategori' => 'Ilmu Hadis'
            ],
            //data murid
        ];
    }
}
