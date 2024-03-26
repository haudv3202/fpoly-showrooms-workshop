<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Project_user;
use App\Models\Technical;
use App\Models\Technical_project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = config('app.role');

        if (isset($role) && $role == "admin") {
            $ourteam = Technical::query()->latest('id')->paginate(12);
            return view('ourteams.list', compact('ourteam'));
        } else {
            $ourteam = Technical::query()
                ->latest('id')
                ->whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('technical_projects')
                        ->whereColumn('technicals.id', 'technical_projects.technical_id');
                })
                ->paginate(12);


            return view('ourteams.ourteam', compact('ourteam'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = Project::query()->latest('id')->paginate();
        return view('ourteams.create', compact('project'));
    }
    public function details()
    {
        return view('ourteams.details');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $technical = Technical::create(['name' => $request->name]);
        $data = [
            'project_id' => $request->project_id,
            'technical_id' => $technical->id,
        ];
        Technical_project::create($data);
        return redirect()->route('ourteams.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $technical = Technical::findOrFail($id);
        $technicalProject = Technical_project::where('technical_id', $technical->id)->firstOrFail();
        $project_id = $technicalProject->project_id;
        $project_users = Project_user::where('project_id', $technicalProject->project_id)
            ->join('users', 'project_users.author_id', '=', 'users.id')
            ->select('users.id', 'users.name', 'users.email', 'users.avatar', 'users.role')
            ->latest('id')->paginate();
        return view('ourteams.details', compact('project_users', 'project_id'));
    }
    public function deleteMembers(Request $request)
    {
        $projectId = $request->input('project_id');
        $authorId = $request->input('author_id');

        // Xóa bản ghi trong bảng Project_user dựa trên project_id và author_id
        try {
            Project_user::where('project_id', $projectId)
                ->where('author_id', $authorId)
                ->delete();

            // Xóa thành công, redirect hoặc trả về response phù hợp
            return redirect()->back()->with('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            // Xảy ra lỗi trong quá trình xóa, xử lý và thông báo lỗi
            return redirect()->back()->with('error', 'Error deleting record: ' . $e->getMessage());
        }
    }
    public function addMembers(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $_SESSION['err'] = "Người dùng không tồn tại";
            return back();
        }

        $isExist = Project_user::where('project_id', $request->project_id)
            ->where('author_id', $user->id)
            ->exists();
        if ($isExist) {
            $_SESSION['err'] = "Người dùng đã có trong Our Team";
            return back();
        }

        try {
            $data = [
                'project_id' => $request->project_id,
                'author_id' => $user->id,
            ];
            Project_user::create($data);
            return back();
        } catch (\Exception $e) {
            $_SESSION['err'] = "Đã xảy ra lỗi khi thêm người dùng vào Our Team";
            return back();
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $technical = Technical::findOrFail($id);
        $project = Project::query()->latest('id')->paginate();
        return view('ourteams.edit', compact('technical', 'project', 'technical'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $technical = Technical::findOrFail($id);

        $technical->update(['name' => $request->name]);

        $technicalProject = Technical_project::where('technical_id', $technical->id)->firstOrFail();

        $technicalProject->update(['project_id' => $request->project_id]);

        return redirect()->route('ourteams.index');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technical $ourTeam)
    {
        dd($ourTeam);
    }

    public function viewMore($id)
    {

        $technicalProject = Technical_project::where('technical_id', $id)->firstOrFail();

        $project_id = $technicalProject->project_id;

        $project_users = Project_user::where('project_id', $technicalProject->project_id)
            ->join('users', 'project_users.author_id', '=', 'users.id')
            ->select('users.id', 'users.name', 'users.email', 'users.avatar', 'users.role')
            ->latest('id')->paginate();
        $project = Project::query()->select('projects.id', 'projects.name', 'projects.description', 'projects.deploy_link', 'levels.name as level_name', 'users.name as added_by_name', 'projects.is_highlight', 'projects.views', 'projects.is_active', 'projects.created_at', 'projects.updated_at', DB::raw('MIN(images.image) AS image'))
            ->join('levels', 'projects.level_id', '=', 'levels.id')
            ->join('users', 'projects.added_by', '=', 'users.id')
            ->join('images', 'images.project_id', '=', 'projects.id')
            ->where('projects.id', '=', $project_id)
            ->groupBy('projects.id')
            ->get();
        $domain = Project::query()->select('domains.name')
            ->join('project_domains', 'project_domains.project_id', '=', 'projects.id')
            ->join('domains', 'domains.id', '=', 'project_domains.subject_id')
            ->where('projects.id', '=', $project_id)
            ->get();

        return view('ourteams.ourteamDetail', compact('project_users', 'project_id', 'project', 'domain'));
    }
}
