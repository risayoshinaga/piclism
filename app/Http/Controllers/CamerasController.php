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
        $cameras = Camera::paginate(10);
        
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
            'date' => 'required|max:500',
            'price' => 'required|max:50',
            'content' => 'required|max:1000',
            'speed' => 'required|max:50', 
            'f_value' => 'required|max:100',
            'iso' => 'required|max:100',

            
        ]);

        $camera = new Camera;
        $camera->name = $request->name;
        $camera->save();
        
        $picture = new Picture;
        $picture->content = $request->content;
        $picture->save();
        
        $camedata = new Camedata;
        $camedata->lens = $request->lens;
        $camedata->year = $request->year;
        $camedata->scene = $request->scene;
        $camedata->price = $request->price;        
        $camedata->save();
        
        $picdata = new Picdata;
        $picdata->speed = $request->speed;        
        $picdata->f_value = $request->f_value;          
        $picdata->iso = $request->iso;
        $picdata->save();
        
        $rental =new Rental;
        $rental-> date = $request->date;
        $rental->save();
        

        return redirect('/');
    }
    
    public function create()
    {
        return view('users.register');
    }
}
