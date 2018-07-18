<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $cameras = $user->cameras()->orderBy('created_at', 'desc')->paginate(10);
        $pictures = $user->pictures()->orderBy('created_at', 'desc')->paginate(10);
        
        $data =[
            'user' => $user,
            'cameras' => $cameras,
            'pictures' => $pictures,
            ];
        return view('users.users', $data);
    }    
}
