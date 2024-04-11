<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $directorys = Level::query()->get();
            return view("directorys.list", compact('directorys'));
        } else {
            return redirect()->route('login');
        }
    }
    public function directory()
    {

        if (Auth::check() && Auth::user()->role == 'admin') {
            $directorys = Level::query()->get();
            return view("directorys.list", compact('directorys'));
        } else {
            $directorys = Level::query()
                ->whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('projects')
                        ->whereColumn('level_id', 'levels.id')
                        ->where('projects.is_active', true);
                })
                ->get();

            $projects = Project::select('projects.id', 'projects.name', 'projects.description', 'projects.deploy_link', 'levels.name as level_name', 'projects.views', DB::raw('MIN(images.image) AS image'))
                ->join('levels', 'levels.id', '=', 'projects.level_id')
                ->join('images', 'images.project_id', '=', 'projects.id')
                ->where('projects.is_active', true)
                ->groupBy('projects.id')
                ->get();

            return view("directorys.directory", compact('directorys', 'projects'));
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Level $level)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view("directorys.create", compact('level'));
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
            ]);
            $requestData = $request->all();
            Level::query()->create($requestData);
            return redirect()->route('directory.index')->with('success', 'Add new success');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($level)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $directorys = Level::query()->select()->where('id', $level)->get();

            return view("directorys.edit", compact('directorys', 'level'));
        } else {
            return redirect()->route('login');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Level $level)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
            ]);
            $requestData = $request->all();

            // DB::enableQueryLog();
            Level::query()->where('id', $requestData['id'])->update([
                'name' => $requestData['name'],
                'description' => $requestData['description'],
                'updated_at' => $requestData['updated_at'],
            ]);
            // $queries = DB::getQueryLog();
            // dd($queries);
            return redirect()->route('directory.index')->with('update', 'Successful update');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($level)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $count = Project::query()
                ->where('id', $level)
                ->count();
            if ($count > 0) {
                return redirect()->route('directory.index');
            } else {
                Level::query()->where('id', $level)->delete();
                return redirect()->route('directory.index')->with('delete', 'Successful deletion');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
