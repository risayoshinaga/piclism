<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camera;
use App\Lend;
use App\Borrow;
use Calendar;
use App\User;
class LendsController extends Controller
{
   
    public function index()
    {
        
    }

    public function create($id)
    {
        return view('lends.create',['id' => $id]);
    }

   
    public function store(Request $request)
    {
        $camera = Camera::find($request->id);
        $camera->lends()->create([
                'start' => $request->start,
                'end' => $request->end
            ]);
        $lends = $camera->lends()->get();
        return redirect()->route('lends.show',['id' => $request->id,'lends'=> $lends]);
    }

    public function show($cameraId)
    {
        $data = Lend::where('camera_id',$cameraId)->get();
        if($data->count()){

        foreach ($data as $value) {
            
            $events[] = Calendar::event(

                "貸出可能",

                true,

                new \DateTime($value->start),

                new \DateTime($value->end.' +1 day'),
                
                null,
                
                ['color' => '#4169e1',
                'textColor'=>'#ffffff',
                'url' => route('lends.edit',['id' => $value->id])
                ]

            );
          }


       $borrow_data = Borrow::where('camera_id',$cameraId)->get();
        if($borrow_data->count()){

        foreach ($borrow_data as $value) {
            $id = $value->user_id;
            $user=User::find($id);
            $events[] = Calendar::event(

                "$user->name"."が予約済み",

                true,

                new \DateTime($value->start),

                new \DateTime($value->end.' +1 day'),
                
                null,
                
                ['color' => '#f05050',
                ]
            );
          }
       }


       }else {
           $events[] = Calendar::event(

                "My Birthday",

                true,

                new \DateTime('1993-10-03'),

                new \DateTime('1993-10-04')
            );
       }
        $calendar = Calendar::addEvents($events);
        $lends = Camera::find($cameraId)->lends()->get();
        return view('lends.show', ['calendar' => $calendar, 'id' => $cameraId , 'lends'=> $lends]);
    }

    public function edit($id)
    {
        $lend = Lend::where('id',$id)->get()->toArray()[0];
        return view('lends.edit',['lend' => $lend, 'id' => $id]);
    }

    
    public function update(Request $request, $id)
    {
        $lend = Lend::where('id',$id);
        
        $lend->update([
            'start' => $request->start,
            'end' => $request->end,
        ]);
        $lends = Camera::find($request->cameraId)->lends()->get();
    
        return redirect()->route('lends.show',['cameraId' => $request->cameraId, 'lends'=> $lends]);
    }

    public function destroy($id)
    {
        $lend = Lend::find($id);
        $lend->delete();
        return redirect('/');
    }
}
