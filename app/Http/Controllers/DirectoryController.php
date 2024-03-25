<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directorys = Level::query()->get();
        return view("directorys.list", compact('directorys'));
    }
    public function directory()
    {
        $directorys = Level::query()
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('projects')
                    ->whereColumn('level_id', 'levels.id');
            })
            ->get();
        $projects = Project::select('projects.id', 'projects.name', 'projects.description', 'projects.deploy_link', 'levels.name as level_name', 'projects.views', DB::raw('MIN(images.image) AS image'))
            ->join('levels', 'levels.id', '=', 'projects.level_id')
            ->join('images', 'images.project_id', '=', 'projects.id')
            ->groupBy('projects.id')
            ->get();
        return view("directorys.directory", compact('directorys', 'projects'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Level $level)
    {
        return view("directorys.create", compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        Level::query()->create($requestData);
        return redirect()->route('directory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($level)
    {

        $directorys = Level::query()->select()->where('id', $level)->get();

        return view("directorys.edit", compact('directorys', 'level'));
    }
    public function details(Level $level)
    {
        return view("directorys.details");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Level $level)
    {
        $requestData = $request->all();

        // DB::enableQueryLog();
        Level::query()->where('id', $requestData['id'])->update([
            'name' => $requestData['name'],
            'description' => $requestData['description'],
            'updated_at' => $requestData['updated_at'],
        ]);
        // $queries = DB::getQueryLog();
        // dd($queries);
        return redirect()->route('directory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($level)
    {
        $count = Project::query()
            ->where('id', $level)
            ->count();
        if ($count > 0) {
            return redirect()->route('directory.index');
        } else {
            Level::query()->where('id', $level)->delete();
            return redirect()->route('directory.index');
        }
    }
}
