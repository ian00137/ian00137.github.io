@extends('template')
@section('content')
    

<div class="profil w-100 flex-center flex-column">
    <div class="foto flex-center bg-white br-2 shadow" style="background-image: url({{ $user->foto }}); background-size: cover; background-position: center;"></div>
    <p>{{ $user->nama }}</p>
</div>
<form class="flex-column pd-2 mgy-3 w-100 border-box br-2 bg-in inner-shadow" enctype="multipart/form-data" action="" method="POST">
    @csrf


    <label class="mgt-3" for="">Foto</label>
    <input class="br-1 input1 cl-white pd-2" type="file" name="foto">   
    <label class="mgt-3" for="">Passowrd</label>
    <input class="br-1 input1 cl-black pd-2" type="password" name="password">
    <label class="mgt-3" for="">Nama</label>
    <input class="br-1 input1 cl-black pd-2" type="text" name="nama" value= "{{ $user->nama }}">
    <label class="mgt-3" for="">Lokasi</label>
    <input class="br-1 input1 cl-black pd-2" type="text" name="lokasi" value="{{ $user->lokasi }}">
    <label class="mgt-3" for="">Tempat, Tanggal Lahir </label>
    <input class="br-1 input1 cl-black pd-2" type="text" name="ttl" value="{{ $user->ttl }}">
    <label class="mgt-3" for="">Alumni</label>
    <input class="br-1 input1 cl-black pd-2" type="text" name="alumni" value=" {{ $user->alumni }} ">

    <div class="mgt-3 w-100 flex-end flex-align">
        <p class="mgx-1">Kosongkan yang tidak ingin diubah</p>
        <button class="button1 bg-primary pd-2 br-1" type="submit">SIMPAN</button>
    </div>


</form>
@endsection