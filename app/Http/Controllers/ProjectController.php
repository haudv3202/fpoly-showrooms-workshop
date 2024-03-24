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
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function create(Project $project)
    {
        $levels = Level::query()->select('name', 'id')->get();
        $users = User::query()->select('name', 'id')->get();
        return view('projects.create', compact('levels', 'users', 'project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        // project
        $query = Project::create($requestData);
        $newProjectID = $query->id;
        // img
        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                $extension = $image->getClientOriginalExtension();
                $pathFile = $image->storeAs('storage/projects', $image->getClientOriginalName(), 'public');
                $image->move(\public_path("storage/projects/"), $image->getClientOriginalName());
                if ($pathFile) {
                    $path =  $pathFile;

                    Images::create([
                        'image' => $path,
                        'type' => $extension,
                        'project_id' => $newProjectID,
                        'created_at' => $requestData['create_at'],
                        'updated_at' => $requestData['updated_at'],
                    ]);
                }
            }
        }
        //domain
        $newDomainID = Domain::create([
            'name' => $requestData['domain_link'],
            'created_at' => $requestData['create_at'],
            'updated_at' => $requestData['updated_at'],
        ]);
        $newDomainID = $newDomainID->id;
        // technical
        $newTechnicalID = Technical::create([
            'name' => $requestData['technical'],
            'created_at' => $requestData['create_at'],
            'updated_at' => $requestData['updated_at'],
        ]);
        $newTechnicalID = $newTechnicalID->id;
        // domain_projects
        Project_domain::create([
            'project_id' =>  $newProjectID,
            'subject_id' =>  $newDomainID
        ]);
        // technical_projects
        Technical_project::create([
            'project_id' =>  $newProjectID,
            'technical_id' => $newTechnicalID
        ]);
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $levels = Level::query()->select('name', 'id')->get();
        $users = User::query()->select('name', 'id')->get();
        $info = Project::select()->where('id', $project->id)->get();
        $images = Images::query()->select()->where('project_id', $project->id)->get();
        return view('projects.edit', compact('levels', 'users', 'info', 'project', 'images'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $requestData = $request->all();
        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                $extension = $image->getClientOriginalExtension();
                $pathFile = $image->storeAs('storage/projects', $image->getClientOriginalName(), 'public');
                $image->move(\public_path("storage/projects/"), $image->getClientOriginalName());
                if ($pathFile) {
                    $path =  $pathFile;

                    Images::create([
                        'image' => $path,
                        'type' => $extension,
                        'project_id' => $requestData['id'],
                        'created_at' => $requestData['updated_at'],
                        'updated_at' => $requestData['updated_at'],
                    ]);
                }
            }
        }
        $project->newQuery()->where('id', $requestData['id'])->update([
            'name' => $requestData['name'],
            'is_active' => $requestData['is_active'],
            'is_highlight' => $requestData['is_highlight'],
            'deploy_link' => $requestData['deploy_link'],
            'level_id' => $requestData['level_id'],
            'added_by' => $requestData['added_by'],
            'updated_at' => $requestData['updated_at']
        ]);

        return redirect()->route('project.index');
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

        return redirect()->route('project.index');
    }
    public function destroyImage($id)
    {
        $image = Images::findOrFail($id);
        $projectId = $image->project_id;

        $image->delete();

        return redirect()->route('project.edit', ['project' => $projectId]);
    }
}
