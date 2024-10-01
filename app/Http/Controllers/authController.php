<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Validator;


class authController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        try {
            $validator = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'c_password' => 'required|same:password',
            ]);




            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);

            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['name'] =  $user->name;

            return response()->json(["success" => true, "message" => "user add successfully", "user" => $success], 200);
        } catch (\Exception $e) {
            return response()->json(["success" => false, "message" => $e->getMessage()], 422);
        }
    }
    public function login(Request $request): JsonResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['name'] =  $user->name;

            return response()->json(["success" => true, "message" => "User login successfully.", "user" => $success], 200);
        } else {
            return response()->json(["success" => false, "message" => "Unauthorised"], 422);
        }
    }

    public function logout(Request $request)
    {
        try {
            auth()->user()->tokens()->delete();
            return response()->json(['success' => true, 'message' =>  'logout successfully',], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' =>  $e->getMessage(),],  422);
        }
    }
}
