<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query();
        return UserResource::collection($users->paginate());
    }
    public function show(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return UserResource::make($user);
    }    
}
