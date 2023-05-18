<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project2Controller extends Controller
{
    public function index(){
        return view('project', ['title' => 'project']);
    }
}
