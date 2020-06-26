<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;
use App\Reservation;
use App\Http\Requests\ReservationRequest;


class ReservationController extends Controller
{
    public function create($request)
    {
        $room = Room::find($request);
        $user = request()->user();

        return view('reservation.create', [
            'room' => $room[0],
            'user' => $user
        ]);
    }

    public function store(ReservationRequest $request)
    {
        $reservation = new Reservation();
        $reservation->from = request('from');
        $reservation->to = request('to');
        $reservation->message = request('message');
        $reservation->user_id = request()->user()->id;
        $reservation->room_id = self::getArg($request);

        $reservation->save();
        return redirect('/');

    }

    public function getArg($request)
    {
        $uri = explode('/', $request->url());
        $index = count($uri) - 1;
        return $uri[$index];
    }   

}
