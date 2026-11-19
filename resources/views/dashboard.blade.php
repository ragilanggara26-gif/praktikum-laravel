@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    {{-- Banner sambutan --}}
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-indigo-600 via-indigo-500 to-sky-500 p-8 text-white shadow-lg mb-8">
        <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/10"></div>
        <div class="absolute -bottom-12 right-24 h-32 w-32 rounded-full bg-white/10"></div>

        <div class="relative">
            <p class="text-sm font-medium text-indigo-100 mb-1">Selamat datang kembali</p>
            <h1 class="text-3xl font-bold mb-2">Dashboard</h1>
            <p class="text-indigo-50">Selamat datang di Sistem Informasi Surat!</p>

            <div class="mt-4 flex flex-wrap items-center gap-2 text-sm">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/20 px-3 py-1 font-medium backdrop-blur">
                    {{ auth()->user()->name }}
                </span>
                <span class="inline-flex items-center rounded-full bg-white px-3 py-1 text-xs font-bold uppercase tracking-wide
                    {{ auth()->user()->role === 'petugas' ? 'text-emerald-600' : 'text-amber-600' }}">
                    {{ auth()->user()->role }}
                </span>
            </div>
        </div>
    </div>

    {{-- Hak akses --}}
    <h2 class="text-sm font-semibold uppercase tracking-wider text-slate-500 mb-3">Hak Akses Anda</h2>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        @can('manage-letters')
            <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-slate-800">Akses penuh (Petugas)</p>
                    <p class="text-sm text-slate-600 mb-3">Sebagai petugas, Anda dapat melihat, menambah, mengubah, dan menghapus surat.</p>
                    <div class="flex flex-wrap gap-2 text-xs font-medium">
                        <span class="rounded-full bg-sky-100 px-3 py-1 text-sky-700">Lihat</span>
                        <span class="rounded-full bg-indigo-100 px-3 py-1 text-indigo-700">Tambah</span>
                        <span class="rounded-full bg-amber-100 px-3 py-1 text-amber-700">Edit</span>
                        <span class="rounded-full bg-red-100 px-3 py-1 text-red-700">Hapus</span>
                    </div>
                </div>
            </div>
        @else
            <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12S6 5 12 5s9.5 7 9.5 7-3.5 7-9.5 7-9.5-7-9.5-7z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-slate-800">Akses baca (Pembaca)</p>
                    <p class="text-sm text-slate-600 mb-3">Sebagai pembaca, Anda hanya dapat melihat daftar dan detail surat.</p>
                    <div class="flex flex-wrap gap-2 text-xs font-medium">
                        <span class="rounded-full bg-sky-100 px-3 py-1 text-sky-700">Lihat</span>
                        <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-400 line-through">Tambah</span>
                        <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-400 line-through">Edit</span>
                        <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-400 line-through">Hapus</span>
                    </div>
                </div>
            </div>
        @endcan
    </div>

@endsection
