<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;

class UserController extends Controller
{

    public function self()
    {
        $user = new UserResource(Auth::user());
        return response()->json(['data' => $user], 200);
    }
}
