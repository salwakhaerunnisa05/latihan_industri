<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama_lengkap'  => 'Salwa khaerunnisa',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2009-02-10',
                'kelas'         => 'XI Rpl 1',
            ],
            [
                'nama_lengkap'  => 'Riska Aulia',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2009-01-16',
                'kelas'         => 'XI Rpl 1',
            ],
            [
                'nama_lengkap'  => 'Ani Nur Rahayu',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2008-07-03',
                'kelas'         => 'XI Rpl 1',
            ],
            [
                'nama_lengkap'  => 'Siti Nurfadilla',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2008-10-22',
                'kelas'         => 'XI Rpl 1',
            ],
            [
                'nama_lengkap'  => 'Anggia Rahmania',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2009-03-15',
                'kelas'         => 'XI Rpl 1',
            ],
            [
                'nama_lengkap'  => 'Zaskia Ramahadani Putri',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2009-08-30',
                'kelas'         => 'XI Rpl 1',
            ],
        ]);
    }
}
