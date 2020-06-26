@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Room index</h1>
    <div class="row">
    @foreach ($rooms as $room)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/card-exemple.jpg') }}" class="card-img-top" alt=" main room image">
                <div class="card-body">
                  <h5 class="card-title">{{ $room->title }}</h5>
                  <p class="card-text">{{ $room->description }}</p>
                  <ul>
                    <li>price : <strong>{{ $room->price }} RUB</strong></li>
                    <li>space : <strong>{{ $room->space }}</strong></li>
                    <li>person : <strong>{{ $room->person }}</strong></li>
                  </ul>
                  @if ($room->empty)
                <a href="reservation/{{$room->id}}" class="btn btn-info">Book this room</a> 
                  @else
                    <a href="#" class="btn btn-danger" disable>Already booked</a> 
                  @endif
                </div>

              </div>    
        </div>
    @endforeach
    </div>
</div>
@endsection