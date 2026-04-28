<h1>Berita</h1>
@foreach ($berita as $item)
    <p>{{ $item->judul }}</p>
    <p>{{ $item->deskripsi }}</p>
@endforeach