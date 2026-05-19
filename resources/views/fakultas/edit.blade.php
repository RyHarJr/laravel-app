@extends('main')

@section('title')
    <h1>Form Edit Data Fakultas</h1>
@endsection

@section('content')
    <a href="{{ route('fakultas.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <form action="{{ route('fakultas.update', $fakultas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_fakultas" class="form-label">Nama Fakultas</label>
            <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas"
                value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}" required>
            @error('nama_fakultas')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kode_fakultas" class="form-label">Kode Fakultas</label>
            <input type="text" class="form-control" id="kode_fakultas" name="kode_fakultas"
                value="{{ old('kode_fakultas', $fakultas->kode_fakultas) }}" required>
            @error('kode_fakultas')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="dekan_fakultas" class="form-label">Dekan Fakultas</label>
            <input type="text" class="form-control" id="dekan_fakultas" name="dekan_fakultas"
                value="{{ old('dekan_fakultas', $fakultas->dekan_fakultas) }}" required>
            @error('dekan_fakultas')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
