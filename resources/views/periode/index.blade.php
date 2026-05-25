@extends('main')

@section('title')
    <h1>Data Periode</h1>
@endsection

@section('content')
    <a href={{ route('periode.create') }} class="btn btn-primary mb-3">Tambah Periode</a>
    <table class="table table-border table-hover" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tahun Akademik</th>
            <th>Kode Semester</th>
            <th>Aksi</th>
        </tr>
        @foreach ($result as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->tahun_akademik }}</td>
                @if ($p->kode_smt == 1)
                    <td>Ganjil</td>
                @else
                    <td>Genap</td>
                @endif

                <td class="d-flex d-inline gap-2">
                    <a href="{{ route('periode.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                    <form method="POST" action="{{ route('periode.destroy', $p->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                            title='Delete' data-nama='{{ $p->tahun_akademik }}'>Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
