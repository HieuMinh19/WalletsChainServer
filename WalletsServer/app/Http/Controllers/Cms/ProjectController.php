<?php

namespace App\Http\Controllers\Cms;

use App\Model\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;
use App\Http\Requests\Cms\Project\StoreProjectRequest;
use App\Http\Requests\Cms\Project\UpdateProjectRequest;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        try {
            return view('project.ProjectList');
        } catch (Exception $ex) {
            return view('errors.500');
        }
    }

    public function getall(Request $request)
    {
        $query = DB::table('projects')->get();
        return datatables($query)->make(true);
    }

    public function create()
    {
        try {
            return view('project.ProjectAdd');
        } catch (Exception $ex) {
            return view('errors.500');
        }
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $project = Project::create($data);
        // return response()->json($project);
        return redirect()->route('listproject');
    }

    public function show($id)
    {
        try {
            $project = Project::find($id);
            //var_dump($project);die();
            return view('project.ProjectEdit',['project' => $project]);
        } catch (Exception $ex) {
            return view('errors.500');
        }
    }

    public function edit()
    {
        
    }

    public function update(UpdateProjectRequest $request)
    {
        $project = Project::find($request->id);
        if (!$project) {
            return 'Không tìm thấy';
        }
        $data = $request->validated();
        $project->update($data);
        return redirect()->route('listproject');
    }

    public function destroy($id)
    {
        
    }
}
