@extends('layouts.app')
@section('title', 'Tambah Surat Masuk')
@section('content')
<h1 class="mx-auto max-w-2xl rounded-t-2xl bg-gradient-to-r from-indigo-600 to-sky-500 px-6 py-5 text-2xl font-bold text-white">Tambah Surat Masuk</h1>

<form action="{{ route('surat-masuk.store') }}" method="POST" enctype="multipart/form-data" class="mx-auto max-w-2xl rounded-b-2xl border border-t-0 border-slate-200 bg-white shadow-md">
    @csrf
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Nomor Surat:<br>
        <input name="nomor_surat" value="{{ old('nomor_surat') }}" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
        @error('nomor_surat') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Tanggal:<br>
        <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
        @error('tanggal') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Pengirim:<br>
        <input name="pengirim" value="{{ old('pengirim') }}" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
        @error('pengirim') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Perihal:<br>
        <input name="perihal" value="{{ old('perihal') }}" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
        @error('perihal') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Keterangan:<br>
        <textarea name="keterangan" rows="4" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">{{ old('keterangan') }}</textarea>
        @error('keterangan') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="border-b border-slate-100 px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Kategori:<br>
        <select name="category_id" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
            <option value="">-- Tanpa kategori --</option>
            @foreach ($categories as $kategori)
                <option value="{{ $kategori->id }}" @selected(old('category_id') == $kategori->id)>
                    {{ $kategori->nama }}
                </option>
            @endforeach
        </select>
        @error('category_id') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <p class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">Lampiran (PDF/JPG/PNG, maks. 2 MB):<br>
        <input type="file" name="lampiran" accept=".pdf,.jpg,.jpeg,.png" class="mt-2 block w-full rounded-lg border border-slate-300 px-4 py-2 text-sm font-normal normal-case tracking-normal text-slate-800 file:mr-4 file:rounded-md file:border-0 file:bg-indigo-50 file:px-3 file:py-1 file:text-sm file:font-semibold file:text-indigo-700 hover:file:bg-indigo-100">
        @error('lampiran') <span class="mt-1 block text-sm font-normal normal-case tracking-normal text-red-600">{{ $message }}</span> @enderror
    </p>
    <button type="submit" class="m-6 rounded-lg bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Simpan</button>
    <a href="{{ route('surat-masuk.index') }}" class="text-sm font-medium text-slate-500 hover:text-slate-800 hover:underline">Batal</a>
</form>
@endsection
