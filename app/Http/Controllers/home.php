<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\knowledge;
use App\Models\project;
use App\Models\skill;
use App\Models\sosmed;
use App\Models\User;
use App\Models\visitor;

class home extends Controller
{
    public function index(){

        $knowledge = knowledge::all();
        $project = project::all();
        $skill = skill::all();
        $sosmed = sosmed::all();
        $user = User::find(1);
        $visitor = new visitor;
        $visitor->save();
        $projectjml = project::count();
        $visitor = visitor::count();
        $uijml = project::where('kategori', 'UI/UX DESIGN')->count();




        return view('home',[
            'knowledge' => $knowledge,
            'project' => $project,
            'skill' => $skill,
            'sosmed' => $sosmed,
            'user' => $user,
            'visitor' => $visitor,
            'projectjml' => $projectjml,
            'uijml' => $uijml
        ]);
    }
}
