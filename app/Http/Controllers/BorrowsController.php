<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camera;
use App\Lend;
use Calendar;
use App\Borrow;
class BorrowsController extends Controller
{
    public function show($id)
    {
        $lend_data = Lend::where('camera_id',$id)->get();
        $name = Camera::find($id)->name;
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
       }
       $data = Borrow::where('camera_id',$id)->get();
        $name = null;
        if($data->count()){

        foreach ($data as $value) {
            
            $events[] = Calendar::event(

                "予約済み",

                true,

                new \DateTime($value->start),

                new \DateTime($value->end.' +1 day'),
                
                null,
                ['color' => '#f05050']
            );
          }
       }
        $calendar = Calendar::addEvents($events);
        return view('rentals.show', ['calendar' => $calendar, 'id' => $id]);
    }
}
