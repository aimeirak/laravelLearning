<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\User;

class userController extends Controller
{
	public function index()
    {
        //Get all users
        
        // Return a collection of $users with pagination
        return user::collection(User::all());
    }
    public function show($id)
    { Return $user;
    	Return new user($user);
    }
}
