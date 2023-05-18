@extends('template')

@section('content')
<h2>EDIT KNOWLEDGE</h2>
<form class="flex-column pd-2 mgy-3 w-100 border-box br-2 bg-in inner-shadow" method="POST" action="">
    @csrf 
    <label class="mgt-3" for="">PENGETAHUAN</label>
    <input class="br-1 input1 cl-black pd-2" type="text" name="nama" value="{{ $kl->nama }}">
    <div class="mgt-3 w-100 flex-end flex-align">
        <button class="button1 bg-primary pd-2 br-1">SIMPAN</button>
    </div>


</form>
@endsection