@extends('main')

@section('title')
    <h1>Form Edit Data Mahasiswa</h1>
@endsection

@section('content')
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama"
                value="{{ old('nama', $mahasiswa->nama) }}" required>
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm"
                value="{{ old('npm', $mahasiswa->npm) }}" required>
            @error('npm')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto (kosongkan jika tidak ingin mengganti)</label>
            @if ($mahasiswa->foto)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto {{ $mahasiswa->nama }}" width="150">
                </div>
            @endif
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            @error('foto')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="prodi_id" class="form-label">Program Studi</label>
            <select class="form-select" id="prodi_id" name="prodi_id" required>
                <option value="" disabled>Pilih Program Studi</option>
                @foreach ($prodis as $prodi)
                    <option value="{{ $prodi->id }}"
                        {{ old('prodi_id', $mahasiswa->prodi_id) == $prodi->id ? 'selected' : '' }}>
                        {{ $prodi->nama_prodi }}</option>
                @endforeach
            </select>
            @error('prodi_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
