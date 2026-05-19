@extends('main')

@section('title')
    <h1>Data Fakultas</h1>
@endsection



@section('content')
    <a href={{ route('fakultas.create') }} class="btn btn-primary mb-3">Tambah Fakultas</a>
    @session('success')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession
    <table class="table table-border table-hover" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Fakultas</th>
            <th>Singkatan</th>
            <th>Dekan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($result as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama_fakultas }}</td>
                <td>{{ $p->kode_fakultas }}</td>
                <td>{{ $p->dekan_fakultas }}</td>
                <td>
                    <a href="{{ route('fakultas.edit', $p->id) }}" class="btn btn-warning mb-2">Edit</a>

                    <form method="POST" action="{{ route('fakultas.destroy', $p->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                            title='Delete' data-nama='{{ $p->nama_fakultas }}'>Hapus</button>
                    </form>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    <p>RyHar </p>
@endsection
