<?php

namespace App\Http\Controllers\Cms;

use App\Model\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;
use App\Http\Requests\Cms\Project\StoreProjectRequest;
use App\Http\Requests\Cms\Project\UpdateProjectRequest;

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
        $limit = $request->get('limit',100);
        $query = Project::query();
        $project = $query->paginate($limit);
        return response()->json($project);
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
        return response()->json($project);
    }

    public function show($id)
    {
        
    }

    public function edit()
    {
        try {
            return view('project.ProjectEdit');
        } catch (Exception $ex) {
            return view('errors.500');
        }
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
