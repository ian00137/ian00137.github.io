@extends('template')

@section('content')
<h2>TAMBAH PROJECT</h2>
<form class="flex-column pd-2 mgy-3 w-100 border-box br-2 bg-in inner-shadow" enctype="multipart/form-data" method="POST" action="">
    @csrf
    <label class="mgt-3" for="">Foto</label>
    <input class="br-1 input1 cl-white pd-2" type="file" name="foto">   
    <label class="mgt-3" for="">Judul</label>
    <input class="br-1 input1 cl-black pd-2" type="text" name="judul">
    <label class="mgt-3" for="">Deskripsi</label>
    <input class="br-1 input1 cl-black pd-2" type="text" name="deskripsi">
    <label class="mgt-3" for="">Link</label>
    <input class="br-1 input1 cl-black pd-2" type="text" name="link">
    <label class="mgt-3" for="">Kategori</label>
    <select class="br-1 input1 cl-black pd-2" name="kategori">
        <option value="WEB">WEB</option>
        <option value="ANDROID">ANDROID</option>
        <option value="UI/UX DESIGN">UI/UX DESIGN</option>
        <option value="OTHER">OTHER</option>
    </select>

    <div class="mgt-3 w-100 flex-end flex-align">
        <button class="button1 bg-primary pd-2 br-1">TAMBAH</button>
    </div>


</form>
@endsection