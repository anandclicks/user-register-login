<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'role'     => $request->role,
            'password' => bcrypt($request->password),
        ]);

        return response()->json([
            'message' => 'User create',
            'success' => true,
            'user'  => $user,
            'role' => $request->role,
        ]);
    }

    function userLogin(Request $request){

        $validate = Validator::make($request->all(),[
            'email'     => 'required|email',
            'password'  => 'required|string'
        ]);

        if($validate->fails()){
          return  response()->json([
                'message' => 'Invalide credentiols',
                'error'   => $validate->errors(),
            ]);
        };

        $userForLogin = User::where('email', $request->email)->first();
        if(!$userForLogin){
            return response()->json([
                'message' => "User does'nt Exist",
            ],404);
        };

        if(Hash::check($request->password, $userForLogin->password)){
            dd("password maches",$userForLogin);
        }else {
            dd('invalide credentiols');
        }

    }
}
