@extends('main')

@section('title')
    <h1>Data Prodi</h1>
@endsection

@section('content')
    <a href={{ route('prodi.create') }} class="btn btn-primary mb-3">Tambah Prodi</a>
    <table class="table table-border table-hover" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Singkatan</th>
            <th>Kaprodi</th>
            <th>Nama Fakultas</th>
            <th>Kode Fakultas</th>
            <th>Dekan Fakultas</th>
            <th>Aksi</th>
        </tr>
        @foreach ($prodis as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama_prodi }}</td>
                <td>{{ $p->singkatan }}</td>
                <td>{{ $p->kaprodi }}</td>
                <td>{{ $p->fakultas->nama_fakultas }}</td>
                <td>{{ $p->fakultas->kode_fakultas }}</td>
                <td>{{ $p->fakultas->dekan_fakultas }}</td>
                <td>
                    <a href="{{ route('prodi.edit', $p->id) }}" class="btn btn-warning mb-2">Edit</a>
                    <form method="POST" action="{{ route('prodi.destroy', $p->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                            title='Delete' data-nama='{{ $p->nama_prodi }}'>Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    <p>RyHar </p>
@endsection
