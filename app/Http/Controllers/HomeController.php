<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Project;
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
            $banners = Images::whereNull('project_id')->get(); // Fetch banners (images with null project_id)
            $projects = Project::select('projects.*', DB::raw('MIN(images.image) AS image'))
                ->join('images', 'images.project_id', '=', 'projects.id')
                ->where([
                    ['projects.is_active', '=', 1],
                    ['projects.is_highlight', '=', 1],
                ])
                ->groupBy('projects.id')
                ->get();

            return view('home', compact('banners', 'projects'));
        }
    }
}
