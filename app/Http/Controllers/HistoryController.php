<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Project;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $projects = Project::query()
                ->select('projects.id', 'projects.name', 'projects.description', 'projects.deploy_link', 'levels.name as level_name', 'users.name as added_by_name', 'projects.is_highlight', 'projects.views', 'projects.is_active', 'projects.created_at', 'projects.updated_at')
                ->join('levels', 'projects.level_id', '=', 'levels.id')
                ->join('users', 'projects.added_by', '=', 'users.id')
                ->where('projects.is_active', false)
                ->paginate(6);

            $images = Images::query()
                ->select('images.*', 'projects.name')
                ->join('projects', 'projects.id', '=', 'images.project_id')
                ->where('images.is_active', false)
                ->orderBy('images.project_id')
                ->paginate(12);


            return view("history.list", compact('projects', 'images'));
        } else {
            return redirect()->route('login');
        }
    }
    public function redirect($id)
    {

        if (Auth::check() && Auth::user()->role == 'admin') {
            $project = Project::findOrFail($id);
            $project->is_active = true;
            $project->save();

            $project->touch();

            return redirect()->back();
        } else {
            return redirect()->route('login');
        }
    }
    public function redirect_image($id)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $image = Images::findOrFail($id);
            $image->is_active = true;
            $image->save();
            $image->touch();
            return redirect()->back();
        } else {
            return redirect()->route('login');
        }
    }
}
