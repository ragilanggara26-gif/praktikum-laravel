@extends('layouts.app')
@section('title', 'Edit Surat Masuk')
@section('content')
<h1 class="mx-auto max-w-2xl rounded-t-2xl bg-gradient-to-r from-indigo-600 to-sky-500 px-6 py-5 text-2xl font-bold text-white">Edit Surat Masuk</h1>

<form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST" class="mx-auto max-w-2xl rounded-b-2xl border border-t-0 border-slate-200 bg-white shadow-md">
    @csrf
    @method('PUT')
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Nomor Surat:<br>
        <input name="nomor_surat" value="{{ old('nomor_surat', $surat->nomor_surat) }}" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
        @error('nomor_surat') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Tanggal:<br>
        <input type="date" name="tanggal" value="{{ old('tanggal', $surat->tanggal) }}" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
        @error('tanggal') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Pengirim:<br>
        <input name="pengirim" value="{{ old('pengirim', $surat->pengirim) }}" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
        @error('pengirim') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Perihal:<br>
        <input name="perihal" value="{{ old('perihal', $surat->perihal) }}" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
        @error('perihal') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Keterangan:<br>
        <textarea name="keterangan" rows="4" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">{{ old('keterangan', $surat->keterangan) }}</textarea>
        @error('keterangan') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <button type="submit" class="m-6 rounded-lg bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Simpan Perubahan</button>
    <a href="{{ route('surat-masuk.index') }}" class="text-sm font-medium text-slate-500 hover:text-slate-800 hover:underline">Batal</a>
</form>
@endsection
