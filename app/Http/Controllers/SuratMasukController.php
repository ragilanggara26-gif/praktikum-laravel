<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratmasuk = [
            [
             'id' => 1,
             'nomor_surat' => '001/SM/2026',
             'tanggal' => '2023-10-01',
             'pengirim' => 'PT.Sinovasi Idea',
             'perihal' => 'Permohonan Izin',
            ],
            [
             'id' => 2,
             'nomor_surat' => '002/SM/2026',
             'tanggal' => '2023-10-02',
             'pengirim' => 'PT.Sinovasi Idea',
             'perihal' => 'Permohonan Kerjasama',
            ],
            [
             'id' => 3,
             'nomor_surat' => '003/SM/2026',
             'tanggal' => '2023-10-03',
             'pengirim' => 'PT.Sinovasi Idea',
             'perihal' => 'Permohonan Bantuan',
            ],
        ];
        return view('surat-masuk.index',compact('suratmasuk'));
    }

    public function show($id)
    {
        return view('surat-masuk.show', ['id' => $id]);
}
}
