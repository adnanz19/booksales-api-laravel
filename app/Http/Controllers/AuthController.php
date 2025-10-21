<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request){
        //1.setup validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8',
        ]);

        //2.cek validator error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //3.create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        //4.cek keberhasilan
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'User created successfully',
                'data' => $user,
            ], 201);
        }

        //5.cek gagal
        return response()->json([
            'success' => false,
            'message' => 'User created failed',
        ], 409); //conflict
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //Get kredensial dari request
        $credentials = $request->only('email', 'password');

        //cek isFailed
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'your email or password is wrong',
            ]);
        }

        //cek isSuccess
        return response()->json([
            'success' => true,
            'message' => 'Login success',
            'user' => auth()->guard('api')->user(),
            'token' => $token
        ], 200);
    }

    public function logout(){
        //try catch
        try {
            JWTAuth::invalidate(JWTAuth::getToken());

            return response()->json([
                'success' => true,
                'message' => 'Logout success',
            ], 200);
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Logout failed',
            ], 500);
        }
        //1. invalidate token
        //2. cek keberhasilan

        //catch
        //3. cek gagal
    }
}
