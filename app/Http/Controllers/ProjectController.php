<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Images;
use App\Models\Project_domain;
use App\Models\Project_user;
use App\Models\Technical_project;
use App\Models\Domain;
use App\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::query()->select('projects.id', 'projects.name', 'projects.description', 'projects.deploy_link', 'levels.name as level_name', 'users.name as added_by_name', 'projects.is_highlight', 'projects.views', 'projects.is_active', 'projects.created_at', 'projects.updated_at')
            ->join('levels', 'projects.level_id', '=', 'levels.id')
            ->join('users', 'projects.added_by', '=', 'users.id')
            ->get();
        return view('projects.list', compact('projects'));
    }
    public function projectDetail($id)
    {
        return view('projects.projectDetail', compact('id'));
    }

    public function create()
    {
        $levels = Level::query()->select('name', 'id')->get();
        $users = User::query()->select('name', 'id')->get();
        return view('projects.create', compact('levels', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $levels = Level::query()->select('name', 'id')->get();
        $users = User::query()->select('name', 'id')->get();
        $info = Project::select()->where('id', $project->id)->get();
        return view('projects.edit', compact('levels', 'users', 'info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        var_dump($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Technical_project::query()->where('project_id', $project->id)->delete();
        Project_user::query()->where('project_id', $project->id)->delete();
        Project_domain::query()->where('project_id', $project->id)->delete();
        Images::query()->where('project_id', $project->id)->delete();
        $project->delete();
        return redirect()->route('project-list');
    }
}
