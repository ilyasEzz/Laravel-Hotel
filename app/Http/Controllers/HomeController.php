<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = request()->user()->id; 
        $reservations = User::rooms($user_id);
        $rooms = Room::all();

        return view('home', [
            'reservations' => $reservations,
            'rooms' => $rooms

        ]);

    }
}
