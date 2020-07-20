<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use App\Model\TransOutput;
use App\Model\Project;
use Illuminate\Support\Facades\DB;

class ProjectServices
{
    public function getDetail()
    {
        $result = Project::select('name','stocks','price','description');
        return $result->get();
    }
}
