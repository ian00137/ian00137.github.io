<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;
use App\Http\Requests\StoreskillRequest;
use App\Http\Requests\UpdateskillRequest;
use App\Models\knowledge;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kl = knowledge::all();
        $skill = skill::all();
        return view('skills', ['title' => 'Skill', 'skill' => $skill, 'kl' => $kl]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function skillTambah()
    {
        return view('skills-add', ['title' => 'Skill']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function skillTambahProses(Request $req):RedirectResponse
    {
        $skill = new Skill;
        if ($_FILES['foto']['name']){

            $req->validate([
                'foto' => 'image|max:2048'
            ]);
    
            // simpan gambar ke dalam folder storage/app/public
            $path = $req->file('foto')->store('public/skill');
    
            // dapatkan URL gambar
            $url = Storage::url($path);
            $skill->foto = $url;
        } else{
            $skill->foto = '';
        }
        $skill->nama = $req->nama;
        $skill->kemampuan = $req->kemampuan;
        $skill->kategori = $req->kategori;
        $skill->save();
        return redirect()->route('skill');
    }

 
    public function skillDelete(Request $req)
    {
        $skill = skill::find($req->id);
        if($skill){
            $skill->delete();
        }
        return redirect()->route('skill');
    }


    public function skillEdit(Request $req)
    {
        $skill = skill::find($req->id);
        if($skill){
            
            return view('skills-edit',['title' => 'Skill', 'skill' => $skill]);
        }
        return redirect()->route('skill');

    }

    public function skillEditProses(Request $req)
    {
        $skill = Skill::find($req->id);
        if ($_FILES['foto']['name']){

            $req->validate([
                'foto' => 'image|max:2048'
            ]);
    
            // simpan gambar ke dalam folder storage/app/public
            $path = $req->file('foto')->store('public/skill');
    
            // dapatkan URL gambar
            $url = Storage::url($path);
            $skill->foto = $url;
        } 
        $skill->nama = $req->nama;
        $skill->kemampuan = $req->kemampuan;
        $skill->kategori = $req->kategori;
        $skill->save();
        return redirect()->route('skill');
    }
}
