<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicturesController extends Controller
{
      public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:500',
            'speed' => 'required|max:500',
            'f_value' => 'required|max:10',
            'iso' => 'required|max:50',
            'lens' => 'required|max:50',
	    ]);
	\Auth::user()->pictures()->create([
		'name' => $request->name,
		'' => $request->price,
		'explanation' => $request->explanation,
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
        $picture_data = \Auth::user()->picturedatas();
        return view('pictures.register',['picture_data'=>$picture_data]);
    }
}
