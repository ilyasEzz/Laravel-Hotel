<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function index()
    {
       $rooms = Room::getAll();
       return view('room.index', [
           'rooms' => $rooms
       ]);

    }
}
