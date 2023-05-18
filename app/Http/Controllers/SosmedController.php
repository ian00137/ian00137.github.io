<?php

namespace App\Http\Controllers;

use App\Models\sosmed;
use App\Http\Requests\StoresosmedRequest;
use App\Http\Requests\UpdatesosmedRequest;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sosmed = sosmed::all();
        return view('sosmed', ['title' => 'Sosmed', 'sosmed' => $sosmed]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function update(Request $req)
    {
        $sosmed = sosmed::all();
        $sosmed[0]->username = $req->instagramu;
        $sosmed[0]->link = $req->instagraml;
        $sosmed[0]->save();

        $sosmed[1]->username = $req->facebooku;
        $sosmed[1]->link = $req->facebookl;
        $sosmed[1]->save();

        $sosmed[2]->username = $req->emailu;
        $sosmed[2]->link = $req->emaill;
        $sosmed[2]->save();

        $sosmed[3]->username = $req->githubu;
        $sosmed[3]->link = $req->githubl;
        $sosmed[3]->save();

        $sosmed[4]->username = $req->linkedinu;
        $sosmed[4]->link = $req->linkedinl;
        $sosmed[4]->save();

        return redirect()->route('sosmed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresosmedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(sosmed $sosmed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sosmed $sosmed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sosmed $sosmed)
    {
        //
    }
}
