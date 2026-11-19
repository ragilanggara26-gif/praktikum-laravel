@extends('layouts.app')
@section('title', 'Detail Surat Keluar')
@section('content')
    <div class="mx-auto max-w-2xl overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-md">
        <h1 class="bg-gradient-to-r from-sky-600 to-indigo-500 px-6 py-5 text-2xl font-bold text-white">Detail Surat Keluar</h1>

        <p class="flex items-center border-b border-slate-100 px-6 py-4 text-slate-800 hover:bg-slate-50"><strong class="w-40 shrink-0 text-xs font-semibold uppercase tracking-wider text-slate-500">Nomor Surat:</strong> {{ $surat->nomor_surat }}</p>
        <p class="flex items-center border-b border-slate-100 px-6 py-4 text-slate-800 hover:bg-slate-50"><strong class="w-40 shrink-0 text-xs font-semibold uppercase tracking-wider text-slate-500">Tanggal:</strong> {{ $surat->tanggal }}</p>
        <p class="flex items-center border-b border-slate-100 px-6 py-4 text-slate-800 hover:bg-slate-50"><strong class="w-40 shrink-0 text-xs font-semibold uppercase tracking-wider text-slate-500">Pengirim:</strong> {{ $surat->pengirim }}</p>
        <p class="flex items-center border-b border-slate-100 px-6 py-4 text-slate-800 hover:bg-slate-50"><strong class="w-40 shrink-0 text-xs font-semibold uppercase tracking-wider text-slate-500">Perihal:</strong> {{ $surat->perihal }}</p>
        <p class="flex items-center px-6 py-4 text-slate-800 hover:bg-slate-50"><strong class="w-40 shrink-0 text-xs font-semibold uppercase tracking-wider text-slate-500">Keterangan:</strong> {{ $surat->keterangan ?? '-' }}</p>

        <a href="{{ route('surat-keluar.index') }}" class="m-6 inline-block rounded-lg bg-sky-600 px-5 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-sky-700">&larr; Kembali</a>
    </div>
@endsection
