<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function createUser(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name'     => 'required',
            'email'    => 'required',
            'number'   => 'required',
            'password' => 'required',
            'role'     => 'required'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'message' => 'Credentials missing or invalid',
                'errors'  => $validate->errors(),
            ], 400);
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'number'   => $request->number,
            'password' => bcrypt($request->passwrod),
            'role'     => $request->role
        ]);

        return response()->json([
            'message' => 'User create',
            'user'  => $user
        ]);
    }
}
