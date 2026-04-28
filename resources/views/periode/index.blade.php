@extends('layouts.app')

@section('title', 'Data Periode')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-gray-800">Data Periode</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse ($result as $item)
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow flex flex-col items-center text-center">
            <div class="text-blue-600 bg-blue-50 p-4 rounded-full mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
            
            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $item->tahun_akademik }}</h3>
            
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold {{ $item->kode_smt == 1 ? 'bg-indigo-100 text-indigo-800' : 'bg-emerald-100 text-emerald-800' }} uppercase tracking-wide">
                Semester {{ $item->kode_smt == 1 ? 'Ganjil' : 'Genap' }}
            </span>
        </div>
        @empty
        <div class="col-span-full">
            <div class="text-center py-16 bg-white rounded-xl shadow-sm border border-gray-100 border-dashed">
                <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <h3 class="mt-4 text-base font-medium text-gray-900">Belum ada data periode</h3>
                <p class="mt-1 text-sm text-gray-500">Data periode akademik akan muncul di sini.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection