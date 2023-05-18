<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::all();
        return view('project', ['title' => 'Project', 'project' => $project]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        return view('project-add', ['title' => 'Project']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function tambahProses(Request $req):RedirectResponse
    {
        $project = new Project;
        if ($_FILES['foto']['name']){

            $req->validate([
                'foto' => 'image|max:2048'
            ]);
    
            // simpan gambar ke dalam folder storage/app/public
            $path = $req->file('foto')->store('public/project');
    
            // dapatkan URL gambar
            $url = Storage::url($path);
            $project->foto = $url;
        } else{
            $project->foto = '';
        }
        $project->judul = $req->judul;
        $project->deskripsi = $req->deskripsi;
        $project->link = $req->link;
        $project->kategori = $req->kategori;
        $project->save();
        return redirect()->route('project');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Request $req)
    {
        $project = project::find($req->id);
        if($project){
            return view('project-edit', ['title' => 'Project', 'project' => $project]);
        } else
        return redirect()->route('project');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProses(Request $req)
    {
        $project = project::find($req->id);
        if($project){
            if ($_FILES['foto']['name']){
    
                $req->validate([
                    'foto' => 'image|max:2048'
                ]);
        
                // simpan gambar ke dalam folder storage/app/public
                $path = $req->file('foto')->store('public/project');
        
                // dapatkan URL gambar
                $url = Storage::url($path);
                $project->foto = $url;
            }
            $project->judul = $req->judul;
            $project->deskripsi = $req->deskripsi;
            $project->link = $req->link;
            $project->kategori = $req->kategori;
            $project->save();
        }
        return redirect()->route('project');
    }

    /**
     * Update the specified resource in storage.
     */
    public function editDelete(Request $req):RedirectResponse
    {
        $project = Project::find($req->id);
        if($project){
            $project->delete();
        }
        return redirect()->route('project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
