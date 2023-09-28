<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){

        $Projects = Project::all();

        return view('home', ['projects' => $Projects]);
    }
}
