@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('products.index') }}" class="text-sm text-gray-500 hover:text-gray-700 flex items-center gap-1 mb-3">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali ke Daftar
        </a>
        <h1 class="text-2xl font-bold text-gray-900">Detail Produk</h1>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="bg-gradient-to-r from-primary-600 to-primary-700 px-6 py-8 text-white">
            <h2 class="text-2xl font-bold">{{ $product->name }}</h2>
            @if($product->category)
                <span class="mt-2 inline-block bg-white/20 text-white text-xs font-medium px-3 py-1 rounded-full">{{ $product->category }}</span>
            @endif
        </div>

        <div class="p-6 space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-50 rounded-lg p-4">
                    <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Harga</p>
                    <p class="text-xl font-bold text-gray-900 mt-1">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4">
                    <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Stok</p>
                    <p class="text-xl font-bold mt-1 @if($product->stock <= 5) text-red-600 @else text-green-700 @endif">
                        {{ $product->stock }} unit
                        @if($product->stock <= 5)
                            <span class="text-xs font-normal text-red-400">(Stok menipis)</span>
                        @endif
                    </p>
                </div>
            </div>

            @if($product->description)
            <div>
                <p class="text-xs text-gray-500 font-medium uppercase tracking-wide mb-1">Deskripsi</p>
                <p class="text-gray-700 text-sm leading-relaxed">{{ $product->description }}</p>
            </div>
            @endif

            <div class="text-xs text-gray-400 pt-2 border-t border-gray-100">
                Ditambahkan: {{ $product->created_at->format('d M Y, H:i') }} &bull;
                Diperbarui: {{ $product->updated_at->format('d M Y, H:i') }}
            </div>
        </div>

        <div class="px-6 pb-6 flex gap-3">
            <a href="{{ route('products.edit', $product) }}"
               class="bg-primary-600 hover:bg-primary-700 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
                Edit Produk
            </a>
            <form action="{{ route('products.destroy', $product) }}" method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                @csrf @method('DELETE')
                <button type="submit"
                        class="bg-red-50 hover:bg-red-100 text-red-600 px-5 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Hapus
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
