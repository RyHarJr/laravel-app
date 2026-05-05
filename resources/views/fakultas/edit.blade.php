@extends('layouts.app')

@section('title', 'Edit Data Fakultas')

@section('content')
<div class="max-w-3xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-gray-800">Edit Fakultas</h2>
        <a href="{{ route('fakultas.index') }}" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <form action="{{ route('fakultas.update', $fakultas->id) }}" method="POST" class="p-6 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="kode_fakultas" class="block text-sm font-medium text-gray-700 mb-1">Kode Fakultas</label>
                <input type="text" name="kode_fakultas" id="kode_fakultas" value="{{ old('kode_fakultas', $fakultas->kode_fakultas) }}" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm @error('kode_fakultas') border-red-500 @enderror" placeholder="Contoh: FIK" maxlength="5" required>
                @error('kode_fakultas')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="nama_fakultas" class="block text-sm font-medium text-gray-700 mb-1">Nama Fakultas</label>
                <input type="text" name="nama_fakultas" id="nama_fakultas" value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm @error('nama_fakultas') border-red-500 @enderror" placeholder="Contoh: Fakultas Ilmu Komputer" required>
                @error('nama_fakultas')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="dekan_fakultas" class="block text-sm font-medium text-gray-700 mb-1">Nama Dekan</label>
                <input type="text" name="dekan_fakultas" id="dekan_fakultas" value="{{ old('dekan_fakultas', $fakultas->dekan_fakultas) }}" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm @error('dekan_fakultas') border-red-500 @enderror" placeholder="Nama lengkap dekan beserta gelar" required>
                @error('dekan_fakultas')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end gap-3">
                <a href="{{ route('fakultas.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-primary-600 border border-transparent rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
