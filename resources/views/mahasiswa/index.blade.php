@extends('main')

@section('title')
    <h1>Data Mahasiswa</h1>
@endsection

@section('content')
    <a href={{ route('mahasiswa.create') }} class="btn btn-primary mb-3">Tambah Mahasiswa</a>
    <table class="table table-border table-hover" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Prodi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        @foreach ($mahasiswas as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->npm }}</td>
                <td>{{ $m->prodi->nama_prodi }}</td>
                <td>
                    @if ($m->foto)
                        <img src="{{ asset('storage/' . $m->foto) }}" alt="Foto {{ $m->nama }}" width="100">
                    @else
                        <p>No Photo</p>
                    @endif
                </td>
                <td class="d-flex d-inline gap-2">
                    <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-warning">Edit</a>
                    <form method="POST" action="{{ route('mahasiswa.destroy', $m->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                            title='Delete' data-nama='{{ $m->nama }}'>Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    <p>RyHar </p>
@endsection
