@extends('main')

@section('title')
    <h1>Form Edit Data Periode</h1>
@endsection

@section('content')
    <a href="{{ route('periode.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <form action="{{ route('periode.update', $periode->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="tahun_akademik" class="form-label">Tahun Akademik</label>
            <input type="text" class="form-control" id="tahun_akademik" name="tahun_akademik"
                value="{{ old('tahun_akademik', $periode->tahun_akademik) }}" required>
            @error('tahun_akademik')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kode_smt" class="form-label">Kode Semester</label>
            <select class="form-select" id="kode_smt" name="kode_smt" required>
                <option value="" disabled selected>Pilih Kode Semester</option>
                <option value="1" {{ old('kode_smt', $periode->kode_smt) == '1' ? 'selected' : '' }}>Ganjil</option>
                <option value="2" {{ old('kode_smt', $periode->kode_smt) == '2' ? 'selected' : '' }}>Genap</option>
            </select>
            @error('kode_smt')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
