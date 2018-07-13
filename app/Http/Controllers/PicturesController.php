<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;

class PicturesController extends Controller
{
    public function index() {
        
        $pictures = Picture::all();
        
        return view('pictures.index', [
            'pictures' => $pictures,
        ]);
    }
    public function store(Request $request)
    {
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/pictures', $name);
        $this->validate($request, [
            'speed' => 'required|max:500',
            'f_value' => 'required|max:10',
            'iso' => 'required|max:50',
            'lens' => 'required|max:50',
	    ]);
	\Auth::user()->pictures()->create([
		'content' => $name,
		'camera_id' => $request->camera_id,
		]);
	$picture_id=\DB::table('pictures')->max('id');
        \Auth::user()->picturedatas()->create([
            	'speed' => $request->speed,
            	'f_value' => $request->f_value,
            	'iso' => $request->iso,
            	'lens' => $request->lens,
		        'picture_id' => $picture_id,
		]);

        return redirect('/');
    }
    
    public function create()
    {
        $picture = \Auth::user()->picturedatas();
        $camera_data = \Auth::user()->cameras()->get();
        \Debugbar::info($camera_data);
        $cameras=array();
	    foreach ($camera_data as $camera) {
	        $cameras[$camera->id] = $camera->name;
	    }
	    \Debugbar::info($cameras);
        return view('pictures.register',['picture'=>$picture, 'cameras'=>$cameras]);
    }
}
