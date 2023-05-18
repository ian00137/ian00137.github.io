<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        return view('profil', ['user' => $user, 'title' => 'Profil']);
    }

    public function updateData(Request $req):RedirectResponse
    {
        $user = User::find(1);


        if ($_FILES['foto']['name']){

            $req->validate([
                'foto' => 'image|max:2048'
            ]);
    
            // simpan gambar ke dalam folder storage/app/public
            $path = $req->file('foto')->store('public/image');
    
            // dapatkan URL gambar
            $url = Storage::url($path);
            $user->foto = $url;
        }

        if($req['password']){

            $user->password = Hash::make($req['password']);
        }
        $user->lokasi = $req['lokasi'];
        $user->ttl = $req['ttl'];
        $user->alumni = $req['alumni'];
        $user->save();


        return redirect()->route('profil');
    }
}
