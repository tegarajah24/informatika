<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosens = [
            [
                'name' => 'Prof. Dr. Andi Wijaya',
                'nidn' => '0401027802',
                'title' => 'Guru Besar',
                'email' => 'andi@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Dr. Tegar Hidayat',
                'nidn' => '0401028901',
                'title' => 'Lektor Kepala',
                'email' => 'tegar@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Ahmad Fauzi, Ph.D.',
                'nidn' => '0401028609',
                'title' => 'Lektor Kepala',
                'email' => 'ahmad@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Eko Prasetyo, Ph.D.',
                'nidn' => '0401028505',
                'title' => 'Lektor',
                'email' => 'eko@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Siti Aminah, M.Kom.',
                'nidn' => '0401029404',
                'title' => 'Lektor',
                'email' => 'siti@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Yusuf Maulana, M.T.',
                'nidn' => '0401029107',
                'title' => 'Lektor',
                'email' => 'yusuf@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Dian Kartika, M.Kom.',
                'nidn' => '0401029308',
                'title' => 'Lektor',
                'email' => 'dian@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Hendra Gunawan, M.Kom.',
                'nidn' => '0401028811',
                'title' => 'Lektor',
                'email' => 'hendra@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Budi Raharjo, M.T.',
                'nidn' => '0401029203',
                'title' => 'Asisten Ahli',
                'email' => 'budi@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Rina Astuti, M.Cs.',
                'nidn' => '0401029506',
                'title' => 'Asisten Ahli',
                'email' => 'rina@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Sri Wahyuni, M.T.',
                'nidn' => '0401029010',
                'title' => 'Asisten Ahli',
                'email' => 'sri@example.com',
                'photo_url' => null,
            ],
            [
                'name' => 'Maria Ulfa, M.Cs.',
                'nidn' => '0401029612',
                'title' => 'Asisten Ahli',
                'email' => 'maria@example.com',
                'photo_url' => null,
            ],
        ];

        foreach ($dosens as $dosen) {
            Dosen::create($dosen);
        }
    }
}
