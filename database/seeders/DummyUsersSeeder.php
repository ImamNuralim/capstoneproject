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
                'username' => 'elgatoo',
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
                'kategori' => 'Ilmu Fikih'
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
                'kategori' => 'Ilmu Tasawuf'
            ],
            [
                'username' => 'doneladio',
                'name' => 'doneladio',
                'email' => 'eladio@gmail.com',
                'password' => bcrypt('ustaz'),
                'telp'=>'081337010101',
                'role' => 'ustaz',
                'kategori' => 'Ilmu Siroh'
            ],
            //data murid
            [
                'username' => 'imamnuralim',
                'description' => 'Halo saya murid Kelas 5',
                'name' => 'Lil Gustavo',
                'email' => 'lilgustav@gmail.com',
                'password' => bcrypt('murid'),
                'telp'=>'081337010102',
                'role' => 'murid'
            ],
            [
                'username' => 'laravel',
                'description' => 'Halo saya murid Kelas 5',
                'name' => 'Laravel Php',
                'email' => 'laravel@gmail.com',
                'password' => bcrypt('murid'),
                'telp'=>'081337010103',
                'role' => 'murid'
            ],
            [
                'username' => 'expotekkoms',
                'description' => 'Halo saya murid Kelas 5',
                'name' => 'expo tekkoms',
                'email' => 'expo@gmails.com',
                'password' => bcrypt('murid'),
                'telp'=>'081337010104',
                'role' => 'murid'
            ],
            [
                'username' => 'kantindekanat',
                'description' => 'Halo saya murid Kelas 5',
                'name' => 'kantin dekanat',
                'email' => 'kantin@gmail.com',
                'password' => bcrypt('murid'),
                'telp'=>'081337010105',
                'role' => 'murid'
            ],
            [
                'username' => 'expotekkom',
                'description' => 'Halo saya murid Kelas 5',
                'name' => 'expo tekkom',
                'email' => 'expo@gmail.com',
                'password' => bcrypt('murid'),
                'telp'=>'081337010106',
                'role' => 'murid'
            ],
            //data admin
            [
                'username' => 'adminTTIC',
                'no_admin' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'name' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'username' => 'adminTIC',
                'no_admin' => 'admin',
                'email' => 'admin@gmail.com',
                'name' => 'admin akbar',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ]
            //data user umum
        //     [
        //         'username' => 'userumum1',
        //         'name' => 'user umum1',
        //         'email' => 'umum1@gmail.com',
        //         'password' => bcrypt('userumum'),
        //         'telp'=>'081337010101',
        //         'role' => 'user umum'
        //     ],
        //     [
        //         'username' => 'userumum',
        //         'name' => 'user umum2',
        //         'email' => 'umum2@gmail.com',
        //         'password' => bcrypt('userumum'),
        //         'telp'=>'081337010102',
        //         'role' => 'user umum'
        //     ],
        //     [
        //         'username' => 'userumum3',
        //         'name' => 'user umum3',
        //         'email' => 'umum3@gmail.com',
        //         'password' => bcrypt('userumum'),
        //         'telp'=>'081337010103',
        //         'role' => 'user umum'
        // ]
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
