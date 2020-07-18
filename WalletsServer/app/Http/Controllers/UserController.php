<?php
namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use App\Http\Services\UserServices;


class UserController extends Controller
{
    use Authenticatable;
    private $user;
    protected $userService;

    public function __construct(User $user, UserServices $userService)
    {
        $this->user = $user;
        $this->userService = $userService;
        // $this->guard = "api";
        // $this->middleware('auth:api');

    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|confirmed',
            'name' => 'required|min:3|max:55',
            'email' =>'required|string|email|unique:users'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);       
        $data = [
            'code'=> 200,
            'message'=> 'User created successfully',
            'data'=>$user
        ];
        return response()->json($data);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $token = auth()->attempt($credentials);
        try {
           if (!$token) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (\Exception $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        $data = [
            'code' => 200,
            'message' => "OK",
            'data' => [
                'user' => auth()->user(),
                'token' => $token,
                'expires_in' => auth()->factory()->getTTL() * 60
            ]
        ];
        return response()->json($data);
    }

    public function getUserInfo(Request $request)
    {
        return response()->json(auth()->user());
    }

    public function getHistory(Request $request)
    {
        $transactions = $this->userService->getHistory(auth()->user(), intval($request->get('type')));
        foreach ($transactions as $key => $transaction){    
            if($transaction->public_key_to == $transaction->public_key_from){
                unset($transactions[$key]);
            }
        }
        return response()->json($transactions);
    }

}
