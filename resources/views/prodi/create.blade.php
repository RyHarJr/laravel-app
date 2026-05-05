@extends('layouts.app')

@section('title', 'Tambah Data Program Studi')

@section('content')
<div class="max-w-3xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Program Studi</h2>
        <a href="{{ route('prodi.index') }}" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <form action="{{ route('prodi.store') }}" method="POST" class="p-6 space-y-6">
            @csrf

            <div>
                <label for="nama_prodi" class="block text-sm font-medium text-gray-700 mb-1">Nama Program Studi</label>
                <input type="text" name="nama_prodi" id="nama_prodi" value="{{ old('nama_prodi') }}" class="p-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm @error('nama_prodi') border-red-500 @enderror" placeholder="Contoh: Teknik Informatika" required>
                @error('nama_prodi')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="singkatan" class="block text-sm font-medium text-gray-700 mb-1">Singkatan</label>
                <input type="text" name="singkatan" id="singkatan" value="{{ old('singkatan') }}" class="p-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm @error('singkatan') border-red-500 @enderror" placeholder="Contoh: TI" maxlength="2" required>
                @error('singkatan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="kaprodi" class="block text-sm font-medium text-gray-700 mb-1">Nama Kaprodi</label>
                <input type="text" name="kaprodi" id="kaprodi" value="{{ old('kaprodi') }}" class="p-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm @error('kaprodi') border-red-500 @enderror" placeholder="Nama lengkap kaprodi beserta gelar" maxlength="30" required>
                @error('kaprodi')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="fakultas_id" class="block text-sm font-medium text-gray-700 mb-1">Fakultas</label>
                <select name="fakultas_id" id="fakultas_id" class="p-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm @error('fakultas_id') border-red-500 @enderror" required>
                    <option value="" disabled selected>Pilih Fakultas</option>
                    @foreach($fakultas as $f)
                        <option value="{{ $f->id }}" {{ old('fakultas_id') == $f->id ? 'selected' : '' }}>{{ $f->nama_fakultas }} ({{ $f->kode_fakultas }})</option>
                    @endforeach
                </select>
                @error('fakultas_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end gap-3">
                <a href="{{ route('prodi.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-primary-600 border border-transparent rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
