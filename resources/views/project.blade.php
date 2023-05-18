@extends('template')

@section('content')
<div class="flex-betwen">
    <h2>PROJECT</h2>
    <a href="project/tambah" class="button1 w-fit pd-2 bg-in br-1">Buat</a>
</div>
<table class=" flex-column pd-2 mgy-3 w-100 flex-center border-box br-2 bg-in inner-shadow of-scroll">
    <tr>
        <th>Foto</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>kategori</th>
        <th>Link</th>
        <th>Aksi</th>
    </tr>

        @foreach ($project as $item)
        <tr>
            <td><img src=" {{ $item->foto }}" alt=""></td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>{{ $item->kategori }}</td>
            <td><a href="{{ $item->link }}">{{ $item->link }}</a></td>
            <td><a href="/project/{{ $item->id }}">Edit</a> <a href="/project/delete/{{ $item->id }}">Hapus</a></td>
        </tr>
        @endforeach


</table>
@endsection