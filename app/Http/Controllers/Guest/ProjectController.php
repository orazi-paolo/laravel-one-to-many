<?php

namespace App\Http\Controllers\Guest;

use App\Models\Project;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('guest.projects.index', compact('projects'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('guest.projects.show', compact('project'));
    }
}