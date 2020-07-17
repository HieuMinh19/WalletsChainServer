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
        //$this->middleware('auth:api', ['except' => ['login']]);
    }

    public function index(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');    }

    public function register(Request $request)
    {

        $validated = $request->validate([
            'password' => 'required|confirmed',
            'name' => 'required|min:3|max:55',
            'email' =>'required|string|email|unique:users'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $credentials = $request->only('email', 'password');
        $user = User::create($validated);
        Auth::guard('web')->attempt($credentials);

        return view('home.Home');
    }

    public function actionlogin(Request $request)
    {
        $loginData = $request->validate([
            'password' => 'required',
            'email' =>'required'
        ]);
        if ($token = Auth::attempt($loginData)) {
            //return $this->respondWithToken($token);
            return redirect()->route('listproject')->with( ['email' =>  $this->respondWithToken($token)] );
        }
        $email= 'khong hop le';
        return redirect()->route('login')->with('message', 'Login Failed');;
        // return redirect('auth.login', compact('email'));

    }

    public function me()
    {
        return response()->json(Auth::user());
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Successfully logged out']);
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
