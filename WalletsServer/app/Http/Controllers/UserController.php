<?php
namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use Authenticatable;
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function register(Request $request){
        $user = $this->user->create([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'password' => Hash::make($request->get('password'))
        ]);

        $data = [
            'code'=> 200,
            'message'=> 'User created successfully',
            'data'=>$user
        ];
        return response()->json($data);
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $token = auth()->attempt($credentials);;
        try {
           if (!$token) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (\Exception $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        // return response()->json(compact('token'));
        $data = [
            'code' => 200,
            'message' => "OK",
            'data' => [
                'user' => auth()->user(),
                'token' => $token,
                'expires_in' => auth()->factory()->getTTL() * 60
            ],
            
        ];
        return response()->json($data);
    }

    public function getUserInfo(Request $request){
        // $user = JWTAuth::toUser($request->token);
        $user = auth()->user();
        return response()->json(['result' => $user]);
    }

}
