<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camera;
class CalendarController extends Controller
{
  public function show($id)
    {
        $camera = Camera::find($id);

        return view('rental.calendar', [
            'camera' => $camera,
        ]);
    }
}
