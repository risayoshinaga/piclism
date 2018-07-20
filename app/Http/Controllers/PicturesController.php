<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;

use JD\Cloudder\Facades\Cloudder;

class PicturesController extends Controller
{
    public function index() {
        
        $pictures = Picture::all();
        
        return view('pictures.index', [
            'pictures' => $pictures,
        ]);
    }
    
    public function show($id)
    {
        $picture = Picture::find($id);

        return view('users.picture', ['picture'=> $picture]);
    }    
    
    public function store(Request $request)
    {
	    Cloudder::upload($request->file('image'), null, ['folder' => "app/pictures"]);
        $url = Cloudder::getResult()['url'];
        $this->validate($request, [

	    ]);
	\Auth::user()->pictures()->create([
		'content' => $url,
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
        $cameras=array();
	        foreach ($camera_data as $camera) {
	        $cameras[$camera->id] = $camera->name; 
	        }
        if(empty($cameras)){

            return view('users.register',['camera_data'=>$camera_data]);
        }
        else{
            return view('pictures.register',['picture'=>$picture, 'cameras'=>$cameras]);
	    }   
    
    }
    
    public function destroy($id)
    {
        $picture = Picture::find($id);
        $picture->delete();

        return redirect('/');    
    }
}
