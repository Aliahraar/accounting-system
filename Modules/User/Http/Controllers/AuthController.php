<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Modules\User\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function login(Request $request)
    {
    $email = $request->username;
    $password = $request->password;

    // Find user
    $user = User::where('email', $email)->first();

    // Check if user exists and password is correct
    if (!$user || !Hash::check($password, $user->password)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    // Create token
    $token = $user->createToken('api_token')->plainTextToken;

    return response()->json([
        'message' => 'Login successful',
        'token' => $token,
        'user' => $user
    ], 200);
     }


}
