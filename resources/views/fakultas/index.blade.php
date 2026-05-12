@extends('main')

@section('title')
    <h1>Data Fakultas</h1>
@endsection



@section('content')
    <a href={{ route('fakultas.create') }} class="btn btn-primary mb-3">Tambah Fakultas</a>
    <table class="table table-border table-hover" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Singkatan</th>
            <th>Kaprodi</th>
        </tr>
        @foreach ($result as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama_fakultas }}</td>
                <td>{{ $p->kode_fakultas }}</td>
                <td>{{ $p->dekan_fakultas }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    <p>RyHar </p>
@endsection
