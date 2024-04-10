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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $projects = Project::query()
                ->select('projects.id', 'projects.name', 'projects.description', 'projects.deploy_link', 'levels.name as level_name', 'users.name as added_by_name', 'projects.is_highlight', 'projects.views', 'projects.is_active', 'projects.created_at', 'projects.updated_at')
                ->join('levels', 'projects.level_id', '=', 'levels.id')
                ->join('users', 'projects.added_by', '=', 'users.id')
                ->where('projects.is_active', true)
                ->get();
            return view('projects.list', compact('projects'));
        } else {
            return redirect()->route('login');
        }
    }


    public function create(Project $project)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $levels = Level::query()->select('name', 'id')->get();
            $users = User::query()->select('name', 'id')->get();
            return view('projects.create', compact('levels', 'users', 'project'));
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'img' => 'required|image',
                'deploy_link' => 'required',
                'domain_link' => 'required',
                'technical' => 'required',
            ]);
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
        } else {
            return redirect()->route('login');
        }
    }

    public function show($id)
    {

        $views = Project::query()
            ->select('views')
            ->where('id', $id)
            ->get();


        Project::query()
            ->where('id', $id)
            ->update([
                'views' => $views[0]->views + 1
            ]);

        $projectDetails = Project::query()->select(
            'projects.name',
            'projects.description',
            'projects.views',
            'projects.created_at',
            'projects.updated_at',
            'domains.name AS domain_name',
            'technicals.name AS technical_name',
            'levels.name AS level_name'
        )
            ->leftJoin('project_domains', 'project_domains.project_id', '=', 'projects.id')
            ->leftJoin('domains', 'domains.id', '=', 'project_domains.subject_id')
            ->leftJoin('technical_projects', 'technical_projects.project_id', '=', 'projects.id')
            ->leftJoin('technicals', 'technicals.id', '=', 'technical_projects.technical_id')
            ->leftJoin('levels', 'levels.id', '=', 'projects.level_id')
            ->where('projects.id', '=', $id)
            ->get();

        $images = Images::query()
            ->where('project_id', '=', $id)
            ->where('is_active', true)
            ->get();
        $projects = Project::query()->select('projects.*', DB::raw('MIN(images.image) AS image'))
            ->join('images', 'images.project_id', '=', 'projects.id')
            ->where([
                ['projects.is_active', '=', 1],
                ['projects.is_highlight', '=', 1],

            ])
            ->groupBy('projects.id')
            ->get();
        return view('projects.projectDetail', compact('projects', 'projectDetails', 'images', 'views'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $levels = Level::query()->select('name', 'id')->get();
            $users = User::query()->select('name', 'id')->get();
            $info = Project::select()->where('id', $project->id)->get();
            $images = Images::query()->select()->where('project_id', $project->id)->where('is_active', true)->get();
            return view('projects.edit', compact('levels', 'users', 'info', 'project', 'images'));
        } else {
            return redirect()->route('login');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                //                'img' => 'required|image',
                'deploy_link' => 'required',
                'domain_link' => 'required',
                'technical' => 'required',
            ]);
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
        } else {
            return redirect()->route('login');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $project->is_active = false;
            $project->save();
            // Cập nhật thời gian updated_at của project
            $project->touch();
            // Technical_project::query()->where('project_id', $project->id)->update(['is_active' => false]);
            // Project_user::query()->where('project_id', $project->id)->update(['is_active' => false]);
            // Project_domain::query()->where('project_id', $project->id)->update(['is_active' => false]);
            //Images::query()->where('project_id', $project->id)->update(['is_active' => false]);
            // Tiếp tục với các thao tác khác nếu cần

            return redirect()->route('project.index');
        } else {
            return redirect()->route('login');
        }
    }

    public function destroyImage($id)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $image = Images::findOrFail($id);
            $image->is_active = false;
            $image->save();
            // Cập nhật thời gian updated_at của ảnh
            $image->touch();

            return redirect()->back();
        } else {
            return redirect()->route('login');
        }
    }


    public function search(Request $request)
    {
        $requestData = $request->all();

        $searchQuery = isset($requestData['search']) ? $requestData['search'] : '';

        $directorys = Level::query()
            ->whereExists(function ($query) use ($searchQuery) {
                $query->select(DB::raw(1))
                    ->from('projects')
                    ->whereColumn('level_id', 'levels.id')
                    ->where(function ($query) use ($searchQuery) {
                        $query->where('name', 'LIKE', '%' . $searchQuery . '%')
                            ->where('is_active', true); // Thêm điều kiện projects.is_active = true
                    });
            })
            ->get();

        $projects = Project::select('projects.id', 'projects.name', 'projects.description', 'projects.deploy_link', 'levels.name as level_name', 'projects.views', DB::raw('MIN(images.image) AS image'))
            ->join('levels', 'levels.id', '=', 'projects.level_id')
            ->join('images', 'images.project_id', '=', 'projects.id')
            ->where(function ($query) use ($searchQuery) {
                $query->where('projects.name', 'LIKE', '%' . $searchQuery . '%')
                    ->where('projects.is_active', true); // Thêm điều kiện projects.is_active = true
            })
            ->groupBy('projects.id')
            ->get();

        return view("directorys.directory", compact('directorys', 'projects'));
    }
}
