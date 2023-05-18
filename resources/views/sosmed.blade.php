@extends('template')

@section('content')
<h2>SOSIAL MEDIA</h2>
<form class="flex-column pd-2 mgy-3 w-100 border-box br-2 bg-in inner-shadow" enctype="multipart/form-data" method="POST" action="">
    @csrf
    <label class="mgt-3" for="">Instagram</label>
    <div class="flex w-100">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="instagramu" placeholder="Username" value="{{ $sosmed[0]->username }}">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="instagraml" placeholder="Link" value="{{ $sosmed[0]->link }}">
    </div>
    <label class="mgt-3" for="">Facebook</label>
    <div class="flex w-100">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="facebooku" placeholder="Username" value="{{ $sosmed[1]->username }}">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="facebookl" placeholder="Link" value="{{ $sosmed[1]->link }}">
    </div>
    <label class="mgt-3" for="">Email</label>
    <div class="flex w-100">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="emailu" placeholder="Username" value="{{ $sosmed[2]->username }}">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="emaill" placeholder="Link" value="{{ $sosmed[2]->link }}">
    </div>
    <label class="mgt-3" for="">Github</label>
    <div class="flex w-100">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="githubu" placeholder="Username" value="{{ $sosmed[3]->username }}">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="githubl" placeholder="Link" value="{{ $sosmed[3]->link }}">
    </div>
    <label class="mgt-3" for="">Linked IN</label>
    <div class="flex w-100">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="linkedinu" placeholder="Username" value="{{ $sosmed[4]->username }}">
        <input class="br-1 w-100 input1 cl-black pd-2" type="text" name="linkedinl" placeholder="Link" value="{{ $sosmed[4]->link }}">
    </div>


    <div class="mgt-3 w-100 flex-end flex-align">
        <button class="button1 bg-primary pd-2 br-1">SIMPAN</button>
    </div>


</form>
@endsection