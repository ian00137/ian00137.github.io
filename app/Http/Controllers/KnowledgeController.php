<?php

namespace App\Http\Controllers;

use App\Models\knowledge;
use App\Http\Requests\StoreknowledgeRequest;
use App\Http\Requests\UpdateknowledgeRequest;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function knowledgeTambah(Request $req)
    {
        $kl = new knowledge;
        $kl->nama = $req->nama;
        $kl->save();
        return redirect()->route('skill');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function knowledgeEdit(Request $req)
    {
        $kl = knowledge::find($req->id);
        return view('knowledge-edit', ['title'=>'skill','kl' => $kl]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function knowledgeEditProses(Request $req)
    {
        $kl = knowledge::find($req->id);
        $kl->nama = $req->nama;
        $kl->save();
        return redirect()->route('skill');
    }

    /**
     * Display the specified resource.
     */
    public function knowledgeDelete(Request $req)
    {
        $kl = knowledge::find($req->id);
        if($kl){
            $kl->delete();
        }
        return redirect()->route('skill');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(knowledge $knowledge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateknowledgeRequest $request, knowledge $knowledge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(knowledge $knowledge)
    {
        //
    }
}
