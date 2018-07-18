<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Picture;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function show() {
        
        $pictures = Picture::all();
        return view('index', [
            'pictures' => $pictures,
            
        ]);
    }
}
