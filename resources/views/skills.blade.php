@extends('template')

@section('content')
<div class="flex-betwen w-100">
    <h2>Skills</h2>
    <a href="/skill/tambah" class="button1 w-fit pd-2 bg-in br-1">Buat</a>
</div>
<table class=" flex-column flex-center pd-2 mgy-3 border-box br-2 bg-in inner-shadow">
    <tr>
        <th>Foto</th>
        <th>Skill</th>
        <th>Tingkat Kemampuan</th>
        <th>kategori</th>
        <th>Aksi</th>
    </tr>
    @foreach ($skill as $item)
        <tr>
            <td><img src="{{ $item->foto }}" alt=""></td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kemampuan }}</td>
            <td>{{ $item->kategori }}</td>
            <td><a href="/skill/{{ $item->id }}">Edit</a> <a href="/skill/delete/{{ $item->id }}">Hapus</a></td>
        </tr>
    @endforeach


</table>
<div class="flex-betwen w-100 mgt-3">
    <h2>Knowledge</h2>
</div>
<table class=" flex-column flex-center pd-2 mgy-3 border-box br-2 bg-in inner-shadow">
    <tr>
        <th>Knowledge</th>
        <th>Aksi</th>
    </tr>

    @foreach ($kl as $item)
    <tr>
        <td>{{ $item->nama }}</td>
        <td><a href="knowledge/{{ $item->id }}">Edit</a> <a href="knowledge/delete/{{ $item->id }}">Hapus</a></td>
    </tr>
    @endforeach
    <tr>
        <form action="knowledge" method="POST">
            @csrf
            <td><input class="input1 pd-1 bg-black cl-white" style="border: none;" placeholder="Nama Pengetahuan" type="text" name="nama"></td>
            <td><button type="submit" class="pd-1 button1 br-1 bg-primary">TAMBAH</button></td>
        </form>
    </tr>
</table>
@endsection