<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Project;
use App\Models\Project_user;
use App\Models\Technical;
use App\Models\Technical_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return redirect()->route('ourteams.index');
        } else {
            $banners = Images::whereNull('project_id')
                ->where('is_active', true)
                ->get();

            $projects = Project::select('projects.*', DB::raw('MIN(images.image) AS image'))
                ->join('images', 'images.project_id', '=', 'projects.id')
                ->where([
                    ['projects.is_active', '=', 1],
                    ['projects.is_highlight', '=', 1],
                ])
                ->groupBy('projects.id')
                ->get();
            $technical = Technical::query()
                ->inRandomOrder()
                ->whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('technical_projects')
                        ->whereColumn('technical_id', 'technicals.id');
                })
                ->join('technical_projects', 'technical_projects.technical_id', '=', 'technicals.id')
                ->join('projects', 'projects.id', '=', 'technical_projects.project_id')
                ->where('projects.is_active', true)
                ->first();
            // $technicalProject = Technical_project::where('technical_id', $technical->id)
            //     ->orderByDesc('project_id')
            //     ->firstOrFail();
            $project_id = $technical->project_id;
            // dd($project_id);
            // DB::enableQueryLog();
            $project_users = Project_user::where('project_id', $project_id)
                ->join('users', 'project_users.author_id', '=', 'users.id')
                ->select('users.id', 'users.name', 'users.email', 'users.avatar', 'users.role')
                ->latest('id')->paginate();
            // $queries = DB::getQueryLog();
            // dd($technicalProject);
            // DB::enableQueryLog();
            $projectForTeam = Project::query()->select('projects.id', 'projects.name', 'projects.description', 'projects.deploy_link', 'levels.name as level_name', 'users.name as added_by_name', 'projects.is_highlight', 'projects.views', 'projects.is_active', 'projects.created_at', 'projects.updated_at', DB::raw('MIN(images.image) AS image'))
                ->join('levels', 'projects.level_id', '=', 'levels.id')
                ->join('users', 'projects.added_by', '=', 'users.id')
                ->join('images', 'images.project_id', '=', 'projects.id')
                ->where('projects.id', '=', $project_id)
                ->groupBy('projects.id')
                ->first();
            // $queries = DB::getQueryLog();
            // dd($queries);
            $domain = Project::query()->select('domains.name')
                ->join('project_domains', 'project_domains.project_id', '=', 'projects.id')
                ->join('domains', 'domains.id', '=', 'project_domains.subject_id')
                ->where('projects.id', '=', $project_id)
                ->get();
            return view('home', compact('banners', 'projects', 'technical', 'project_users', 'projectForTeam', 'domain'));
        }
    }
}
