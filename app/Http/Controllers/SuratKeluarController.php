<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratkeluar = [
            [
                'id' => 4,
                'nomor_surat' => '004/SM/2026',
                'tanggal' => '2023-10-01',
                'pengirim' => 'PT.Sinovasi Idea',
                'perihal' => 'Permohonan Izin',
            ],
            [
                'id' => 5,
                'nomor_surat' => '005/SM/2026',
                'tanggal' => '2023-10-02',
                'pengirim' => 'PT.Sinovasi Idea',
                'perihal' => 'Permohonan Kerjasama',
            ],
            [
                'id' => 6,
                'nomor_surat' => '006/SM/2026',
                'tanggal' => '2023-10-03',
                'pengirim' => 'PT.Sinovasi Idea',
                'perihal' => 'Permohonan Bantuan',
            ],
        ];
        return view('surat-keluar.index',compact('suratkeluar'));
    }

    public function show($id)
    {
        $suratKeluarDetail = [
            4=>[
                'id' => 4,
                'nomor_surat' => '004/SM/2026',
                'tanggal' => '2023-10-01',
                'pengirim' => 'PT.Sinovasi Idea',
                'perihal' => 'Permohonan Izin',
                ],
            5=>[
                'id' => 5,
                'nomor_surat' => '005/SM/2026',
                'tanggal' => '2023-10-02',
                'pengirim' => 'PT.Sinovasi Idea',
                'perihal' => 'Permohonan Kerjasama',
            ],
            6=>[
                'id' => 6,
                'nomor_surat' => '006/SM/2026',
                'tanggal' => '2023-10-03',
                'pengirim' => 'PT.Sinovasi Idea',
                'perihal' => 'Permohonan Bantuan',
            ]
        ];

        $surat = $suratKeluarDetail[$id] ?? null;
        return view('surat-keluar.show', compact('surat'));
    }
}
