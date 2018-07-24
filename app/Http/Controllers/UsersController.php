<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Picture;

use JD\Cloudder\Facades\Cloudder;

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
    
    public function edit()
    {
        $user = \Auth::user();
        return view('users.edit', [ 'user' => $user, ]);
    }
    
    public function update(Request $request, $id)
    {   
        $user = \Auth::user();
        $image = $request->file('image');
        if (isset($image)){
            Cloudder::upload($request->file('image'), null, ['folder' => "app/users"]);
            $url = Cloudder::getResult()['url'];
        }else{
            $url = $user->url;
        }
        
        $user = \Auth::user();
        $user->selfintro = $request->selfintro;
        $user->url = $url;
        $user->save();
        
        return redirect('/');  
      
    }
    
}
