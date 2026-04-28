@extends('layouts.app')

@section('title', 'Data Fakultas')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-gray-800">Data Fakultas</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($result as $item)
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
            <div class="flex items-start justify-between mb-4">
                <div class="text-primary-600 bg-primary-50 p-3 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-gray-100 text-gray-800 uppercase tracking-wide">
                    {{ $item->kode_fakultas }}
                </span>
            </div>
            
            <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $item->nama_fakultas }}</h3>
            
            <div class="mt-4 flex items-center text-sm text-gray-600 bg-gray-50 p-3 rounded-lg border border-gray-100">
                <svg class="flex-shrink-0 mr-2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <div class="flex flex-col">
                    <span class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-0.5">Dekan</span> 
                    <span class="font-semibold text-gray-800">{{ $item->dekan_fakultas }}</span>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full">
            <div class="text-center py-16 bg-white rounded-xl shadow-sm border border-gray-100 border-dashed">
                <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                <h3 class="mt-4 text-base font-medium text-gray-900">Belum ada data fakultas</h3>
                <p class="mt-1 text-sm text-gray-500">Data fakultas yang ditambahkan akan muncul di sini.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection