<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 
use App\Camera;
use App\Picture;
use App\Camedata;
use App\Picdata;
use App\Rental;

class CamerasController extends Controller
{
    public function index()
    {
        $cameras = Camera::all();
        
        return view('search.list', [
            'cameras' => $cameras,
        ]);
    }
    
    public function show($id)
    {
        $camera = Camera::find($id);

        return view('users.camera', [
            'camera' => $camera,
        ]);
    }
    
      public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:500',
            'lens' => 'required|max:500',
            'year' => 'required|max:10',
            'scene' => 'required|max:50',
            'price' => 'required|max:50',
	    ]);
	    $filename = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/cameras', $filename);
	    \Auth::user()->cameras()->create([
		    'name' => $request->name,
		    'price' => $request->price,
		    'explanation' => $filename,
		    ]);
	    $camera_id=\DB::table('cameras')->max('id');
        \Auth::user()->cameradatas()->create([
            	'lens' => $request->lens,
            	'year' => $request->year,
            	'scene' => $request->scene,
		'camera_id' => $camera_id,
		]);

        return redirect('/');
    }
    
    public function create()
    {
        $camera_data = \Auth::user()->cameradatas();
	\Debugbar::info($camera_data);
        return view('users.register',['camera_data'=>$camera_data]);
    }
}
