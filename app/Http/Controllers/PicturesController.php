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

        $this->validate($request, [
                'image' => 'required',
         ]);
        Cloudder::upload($request->file('image'), null, ['folder' => "app/pictures"]);
        $url = Cloudder::getResult()['url'];
              \Auth::user()->pictures()->create([
                                'camera_id' => $request->camera_id,
                                'url' => $url,
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

            return view('cameras.register',['camera_data'=>$camera_data]);
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
        if (\Auth::user()->id == $picture->user_id) {
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
        }else{
            return redirect('/'); 
        }

    }
    
    public function update(Request $request, $id)
    {
        $picture = Picture::find($id);
        $image = $request->file('image');
        if (isset($image)){
            Cloudder::upload($request->file('image'), null, ['folder' => "app/pictures"]);
            $url = Cloudder::getResult()['url'];
        }else{
            $url = $picture->url;
        } 
        
        $picture = Picture::find($id);
        $picture->url = $url;
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
