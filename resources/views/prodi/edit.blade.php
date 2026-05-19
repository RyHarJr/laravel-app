@extends('main')

@section('title')
    <h1>Form Edit Data Prodi</h1>
@endsection

@section('content')
    <a href="{{ route('prodi.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_prodi" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi"
                value="{{ old('nama_prodi', $prodi->nama_prodi) }}" required>
            @error('nama_prodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="singkatan" class="form-label">Singkatan</label>
            <input type="text" class="form-control" id="singkatan" name="singkatan"
                value="{{ old('singkatan', $prodi->singkatan) }}" maxlength="2" required>
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kaprodi" class="form-label">Nama Kaprodi</label>
            <input type="text" class="form-control" id="kaprodi" name="kaprodi"
                value="{{ old('kaprodi', $prodi->kaprodi) }}" maxlength="30" required>
            @error('kaprodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="fakultas_id" class="form-label">Fakultas</label>
            <select class="form-select" id="fakultas_id" name="fakultas_id" required>
                <option value="" disabled selected>Pilih Fakultas</option>
                @foreach ($fakultas as $fak)
                    <option value="{{ $fak->id }}"
                        {{ old('fakultas_id', $prodi->fakultas_id) == $fak->id ? 'selected' : '' }}>
                        {{ $fak->nama_fakultas }}</option>
                @endforeach
            </select>
            @error('fakultas_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
