@extends('layouts.app')
@section('title', 'Daftar Surat Masuk')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Surat Masuk</h1>

    @can('manage-letters')
        <a href="{{ route('surat-masuk.create') }}" class="inline-block px-4 py-2 mb-4 rounded-md bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700">+ Tambah Surat</a>
    @endcan

    @if (session('success'))
        <p class="mb-4 px-4 py-3 rounded-md bg-emerald-50 border border-emerald-200 text-emerald-700">{{ session('success') }}</p>
    @endif

    <table class="w-full bg-white text-sm text-left border border-slate-200 rounded-lg shadow-sm">
        <thead class="bg-slate-200 text-slate-700">
            <tr>
                <th class="px-4 py-3">No</th><th class="px-4 py-3">Nomor</th><th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Pengirim</th><th class="px-4 py-3">Perihal</th><th class="px-4 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
        @forelse ($suratMasuk as $surat)
            <tr class="hover:bg-slate-50">
                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                <td class="px-4 py-3">{{ $surat->nomor_surat }}</td>
                <td class="px-4 py-3">{{ $surat->tanggal }}</td>
                <td class="px-4 py-3">{{ $surat->pengirim }}</td>
                <td class="px-4 py-3">{{ $surat->perihal }}</td>
                <td class="px-4 py-3">
                    <a href="{{ route('surat-masuk.show', $surat->id) }}" class="px-2.5 py-1 rounded bg-sky-100 text-sky-700 hover:bg-sky-200">Detail</a>

                    @can('manage-letters')
                        <a href="{{ route('surat-masuk.edit', $surat->id) }}" class="px-2.5 py-1 rounded bg-amber-100 text-amber-700 hover:bg-amber-200">Edit</a>
                        <form action="{{ route('surat-masuk.destroy', $surat->id) }}"
                              method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                              onclick="return confirm('Hapus surat ini?')" class="px-2.5 py-1 rounded bg-red-100 text-red-700 hover:bg-red-200">Hapus</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="px-4 py-6 text-center text-slate-500">Belum ada surat masuk.</td></tr>
        @endforelse
        </tbody>
    </table>
@endsection
