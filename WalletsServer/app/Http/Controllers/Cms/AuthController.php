<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Cms\User\StoreUserRequest;
// use App\Http\Requests\Cms\User\UpdateUserRequest;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['login']]);
        // $this->middleware('auth:web');
    }

    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');    
    }

    public function action_register(Request $request)
    {
        // dd(456);

        $validated = $request->validate([
            'password' => 'required|confirmed',
            'name' => 'required|min:3|max:55',
            'email' =>'required|string|email|unique:users'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        return redirect()->route('login');
    }

    public function action_login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ($token = Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('home')->with( ['email' =>  $this->respondWithToken($token)] );
        }
        $email= 'khong hop le';
        return redirect()->route('login')->with('message', 'Login Failed');
    }

    public function me()
    {
        return response()->json(Auth::user());
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    public function refresh()
    {
        return $this->respondWithToken(Auth::refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 1
        ]);
    }

    public function guard()
    {
        return Auth::guard();
    }
}
