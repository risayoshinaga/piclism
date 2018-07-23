<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 
use App\Camera;
use App\Picture;
use App\Camedata;
use App\Picdata;
use App\Rental;
use JD\Cloudder\Facades\Cloudder;

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
        $pictures = $camera->pictures()->orderBy('created_at', 'desc')->paginate(10);
        
        $data = [
            'camera' => $camera,
            'pictures' => $pictures,
        ];
        return view('users.camera', $data);
    }
    
      public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:500',

            'price' => 'required|max:50',
                  ]);

                 Cloudder::upload($request->file('image'), null, ['folder' => "app/cameras"]);
        $url = Cloudder::getResult()['url'];
                  \Auth::user()->cameras()->create([
                                'name' => $request->name,
                                'price' => $request->price,
                                'explanation' => $url,
                                ]);
                  $camera_id=\DB::table('cameras')->max('id');
        \Auth::user()->cameradatas()->create([
                  'lens' => $request->lens,
                  'year' => $request->year,
                  'scene' => $request->scene,
                            'camera_id' => $camera_id,
                            ]);

        $user = \Auth::user();
        $cameras = $user->cameras()->get();
        $pictures = $user->pictures()->get();
        $data =[
            'user' => $user,
            'pictures' => $pictures,
            'cameras' => $cameras,
            ];
            
        return view('users.users', $data);  
    }
    
    public function create()
    {
        $camera_data = \Auth::user()->cameradatas();
        return view('users.register',['camera_data'=>$camera_data]);
    }
    public function destroy($id)
    {
        $camera = Camera::find($id);
        $camera->delete();

        $user = \Auth::user();
        $cameras = $user->cameras()->get();
        $pictures = $user->pictures()->get();
        $data =[
            'user' => $user,
            'pictures' => $pictures,
            'cameras' => $cameras,
            ];
            
        return view('users.users', $data);      
    }
    public function edit($id)
    {
        $camera = Camera::find($id);
        $camedata = $camera->datas;
        
        $camera_data =[
            'camera' => $camera,
            'camedata' => $camedata,
            ];
        return view('cameras.edit', $camera_data);
    }
    
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'name' => 'required|max:500',
            'price' => 'required|max:50',
                  ]);
                  
                  Cloudder::upload($request->file('image'), null, ['folder' => "app/cameras"]);
        $url = Cloudder::getResult()['url'];
        
        $camera = Camera::find($id);
        $camera->name = $request->name;
        $camera->price = $request->price;
        $camera->explanation = $url;
        $camera->save();
        
        $camedata = $camera->datas;
        $camedata->lens = $request->lens;
        $camedata->year = $request->year;
        $camedata->scene = $request->scene;
        $camedata->save();
        
        $pictures = $camera->pictures()->orderBy('created_at', 'desc')->paginate(10);
        
        $data = [
            'camera' => $camera,
            'pictures' => $pictures,
        ];
        return view('users.camera', $data);
      
    }
}
