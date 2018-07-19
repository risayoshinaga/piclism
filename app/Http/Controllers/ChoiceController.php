<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Camera;
use App\Camedata;

class ChoiceController extends Controller
{
    public function index(Request $request)
    {
    $choice = $request->input('choice');
        
    if($choice == 0){
        $cameras = Camera::select()
            ->join('camedatas','camedatas.camera_id','=','cameras.id')
            ->where('scene','scenery')
            ->get();
    }
    else if($choice == 1){
        $cameras = Camera::select()
            ->join('camedatas','camedatas.camera_id','=','cameras.id')
            ->where('scene','')
            ->get();
    }
    else if($choice == 2){
        $cameras = Camera::select()
            ->join('camedatas','camedatas.camera_id','=','cameras.id')
            ->where('scene','selfy')
            ->get();
    }
    else if($choice == 3){
        $cameras = Camera::select()
            ->join('camedatas','camedatas.camera_id','=','cameras.id')
            ->where('scene','beginner')
            ->get();
    }
    if($choice == 4){
        $cameras = Camera::select()
            ->where('price','<',2000)
            ->get();
    }
    else if($choice == 5){
        $cameras = Camera::select()
            ->where('price','>=',2000)
            ->where('price','<',5000)
            ->get();
    }
    else if($choice == 6){
        $cameras = Camera::select()
            ->where('price','>=','5000')
            ->get();
    }
   
    return view('search.list', [
            'cameras' => $cameras,
        ]);
    }
}