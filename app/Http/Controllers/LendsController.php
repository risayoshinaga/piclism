<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camera;
use App\Lend;
use Calendar;
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
        return redirect()->route('lends.show',['id' => $request->id]);
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
                'url' => route('borrows.edit',['id' => $value->id])
                ]

            );
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
        return view('lends.show', ['calendar' => $calendar, 'id' => $cameraId]);
    }

    public function edit($id)
    {
        $lend = Lend::where('id',$id)->get()->toArray()['0'];
        return view('lends.edit',['lend' => $lend, 'id' => $id]);
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        
    }
}
