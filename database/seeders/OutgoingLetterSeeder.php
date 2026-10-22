<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('outgoing_letters')->insert([
            [
                'nomor_surat' => 'OUT-001',
                'tanggal' => '2023-10-01',
                'pengirim' => 'John Doe',
                'perihal' => 'Permohonan Informasi',
                'keterangan' => 'Surat permohonan informasi terkait proyek X.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nomor_surat' => 'OUT-002',
                'tanggal' => '2023-10-05',
                'pengirim' => 'Jane Smith',
                'perihal' => 'Undangan Rapat',
                'keterangan' => 'Undangan rapat koordinasi proyek Y.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nomor_surat' => 'OUT-003',
                'tanggal' => '2023-10-10',
                'pengirim' => 'Michael Johnson',
                'perihal' => 'Pemberitahuan Perubahan Jadwal',
                'keterangan' => "Pemberitahuan perubahan jadwal rapat proyek Z.",
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
