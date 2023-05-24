<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index () {
        $projects = Project::all();
        return view('proyectos.index', compact('projects'));
    }

    public function show (Project $project) {
        return view('proyectos.show', compact('project'));
    }
}