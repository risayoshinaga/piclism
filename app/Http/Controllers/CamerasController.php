<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 
use App\Camera;

class CamerasController extends Controller
{
    public function index()
    {
        $cameras = Camera::paginate(10);
        
        return view('search.list', [
            'cameras' => $cameras,
        ]);
    }
    
    public function show($id)
    {
        $camera = Camera::find($id);
        $user = $camera->owner();

print_r($user->id);
exit;
/*ここで$userを持ってこれてない*/
        $data = [
            'user' => $user,
            'camera' => $camera,
        ];

        return view('users.camera', $data);
      
    }
}
