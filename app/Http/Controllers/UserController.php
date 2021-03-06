<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile() {

        $user = Auth::user();

        if ($user){

        return response()->json(['data' => ['success' => true, 'message' => 'Welcome to your profile', 'user' => $user ]], 200);

    }
    }

}
