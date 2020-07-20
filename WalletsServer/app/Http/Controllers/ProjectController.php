<?php

namespace App\Http\Controllers;

use App\Model\Project;
use Illuminate\Http\Request;
use App\Http\Services\ProjectServices;
class ProjectController extends Controller
{
    //
    private $project;
    protected $projectService;
    public function __construct(Project $project, ProjectServices $projectService){
        $this->project = $project;
        $this->projectService = $projectService;
    }
    public function getDetail(Request $request){
        $projectDetail = $this->projectService->getDetail();
        //dd(response()->json($projectDetail));
        return response()->json($projectDetail);
    }
}
