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
        $picture = Picture::find($id);
        $picdata = $picture->data;
        $camera_data = \Auth::user()->cameras()->get();
        $cameras=array();
        
        foreach ($camera_data as $camera) {
                      $cameras[$camera->id] = $camera->name; 
                  }
  
        $data =[
            'picture' => $picture,
            'picdata' => $picdata,
            'cameras' => $cameras,
            ];
        return view('pictures.edit', $data);
    }
    
    public function update(Request $request, $id)
    {
        
    
                  Cloudder::upload($request->file('image'), null, ['folder' => "app/pictures"]);
        $url = Cloudder::getResult()['url'];
        
        $picture = Picture::find($id);
        $picture->content = $url;
        $picture->save();
        
        $picdata = $picture->data;
        $picdata->speed = $request->speed;
        $picdata->f_value = $request->f_value;
        $picdata->iso = $request->iso;
        $picdata->lens = $request->lens;        
        $picdata->save();
        
        return view('users.picture', ['picture'=> $picture]);
      
    }
}
