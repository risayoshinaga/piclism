<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camera;
use App\Lend;
use Calendar;
use App\Borrow;
class BorrowsController extends Controller
{
    public function show($cameraId)
    {
        $lend_data = Lend::where('camera_id',$cameraId)->get();
        if($lend_data->count()){

        foreach ($lend_data as $value) {
            
            $events[] = Calendar::event(

                "貸出可能",

                true,

                new \DateTime($value->start),

                new \DateTime($value->end.' +1 day'),
                
                null,
                
                ['color' => '#4169e1']

            );
          }
       } else {
           $events[] = Calendar::event(

                "My Birthday",

                true,

                new \DateTime('1993-10-03'),

                new \DateTime('1993-10-04')
            );
       }
       
       $borrow_data = Borrow::where('camera_id',$cameraId)->get();
        if($borrow_data->count()){

        foreach ($borrow_data as $value) {
            
            $events[] = Calendar::event(

                "予約済み",

                true,

                new \DateTime($value->start),

                new \DateTime($value->end.' +1 day'),
                
                null,
                
                ['color' => '#f05050',
                'url' => route('borrows.edit',['borrow' => $value->id])
                ]
            );
          }
       }
        $calendar = Calendar::addEvents($events);
        return view('borrows.show', ['calendar' => $calendar, 'id' => $cameraId]);
    }
    
    public function create($cameraId)
    {
        return view('borrows.create',['cameraId' => $cameraId]);
    }
    
    public function store(Request $request)
    {
        $user = \Auth::user();
        $user->borrows()->create([
                'camera_id' => $request->cameraId,
                'start' => $request->start,
                'end' => $request->end
            ]);
        return redirect()->route('borrows.show',['cameraId' => $request->cameraId]);
    }
    public function edit($id)
    {
        $borrow = Borrow::where('id',$id)->get()->toArray()[0];
        return view('borrows.edit',['borrow' => $borrow, 'id' => $id]);
    }
    
    public function update(Request $request, $id)
    {
        $borrow = Borrow::where('id',$id);
        
        $borrow->update([
            'start' => $request->start,
            'end' => $request->end,
        ]);
        return redirect()->route('borrows.show',['cameraId' => $request->cameraId]);
    }
    
    public function destroy($id)
    {
        $borrow = Borrow::find($id);
        $borrow->delete();
        return redirect('/');
    }
    
}