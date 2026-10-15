@extends('layouts.app')
@section('title', 'Surat Keluar')
@section('content')
    <h1>Halaman Surat Keluar</h1>
    <table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%;">
        <thead style="background-color: #777777;">
            <tr>
                <th>ID</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suratkeluar as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['nomor_surat'] }}</td>
                <td>{{ $item['tanggal'] }}</td>
                <td>{{ $item['pengirim'] }}</td>
                <td>{{ $item['perihal'] }}</td>
                <td>
                    <a href="{{ route('surat-keluar.show', $item['id']) }}">Detail Surat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
