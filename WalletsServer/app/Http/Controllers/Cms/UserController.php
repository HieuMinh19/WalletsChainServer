<?php

namespace App\Http\Controllers\Cms;

use App\Model\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;
use App\Http\Requests\Cms\User\StoreUserRequest;
use App\Http\Requests\Cms\User\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index()
    {
        try {
            return view('user.UserList');
        } catch (Exception $ex) {
            return view('errors.500');
        }
    }

    public function getall(Request $request)
    {
        $query = DB::table('users')->get();
        return datatables($query)->make(true);
    }

    public function create()
    {
        try {
            return view('user.UserAdd');
        } catch (Exception $ex) {
            return view('errors.500');
        }
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        return response()->json($user);
    }

    public function show(Request $request)
    {
        try {
            return view('user.UserEdit');
        } catch (Exception $ex) {
            return view('errors.500');
        }
    }

    public function edit()
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
