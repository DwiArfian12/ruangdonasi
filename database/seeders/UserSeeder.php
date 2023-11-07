<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            ['nama' => 'Admin 1', 'email' => 'admin1@gmail.com', 'password' => bcrypt('admin123'), 'jenis_user_id' => 1, 'no_hp' => '0', 'nik' => '0', 'alamat' => '-', 'jenis_kelamin' => 'Laki-laki'],
            ['nama' => 'Donatur 1', 'email' => 'donatur1@gmail.com', 'password' => bcrypt('donatur123'), 'jenis_user_id' => 2, 'no_hp' => '085898383891', 'nik' => '4672873805060001', 'alamat' => 'Jl. Legi No. 9B, Papringan, Caturtunggal, Depok, Sleman, DIY', 'jenis_kelamin' => 'Laki-laki'],
            ['nama' => 'Donatur 2', 'email' => 'donatur2@gmail.com', 'password' => bcrypt('donatur123'), 'jenis_user_id' => 2, 'no_hp' => '085872839384', 'nik' => '7483909312030002', 'alamat' => 'Jl. Karangmalang No. 13, Caturtunggal, Depok, Sleman, DIY', 'jenis_kelamin' => 'Perempuan'],
            ['nama' => 'Penerima 1', 'email' => 'penerima1@gmail.com', 'password' => bcrypt('penerima123'), 'jenis_user_id' => 3, 'no_hp' => '085862738272', 'nik' => '7482839003050002', 'alamat' => 'Jl. Wulung No. 1A, Papringan, Caturtunggal, Depok, Sleman, DIY', 'jenis_kelamin' => 'Perempuan'],
            ['nama' => 'Penerima 2', 'email' => 'penerima2@gmail.com', 'password' => bcrypt('penerima123'), 'jenis_user_id' => 3, 'no_hp' => '085882918717', 'nik' => '7361828305030003', 'alamat' => 'Jl. Pandega Marta No. 5, Caturtunggal, Depok, Sleman, DIY', 'jenis_kelamin' => 'Laki-laki'],
        ]);
    }
}
