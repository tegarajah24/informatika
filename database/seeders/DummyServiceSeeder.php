<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            \App\Models\Service::create([
                'title' => 'Layanan Dummy ' . $i,
                'desc' => 'Ini adalah deskripsi layanan dummy nomor ' . $i . ' yang dibuat secara otomatis untuk pengujian sistem.',
            ]);
        }
    }
}
