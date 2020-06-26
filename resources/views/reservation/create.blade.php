@extends('layouts.app');

@section('content')
<div class="container">
  <h6>{{ $user->name }}</h6>  
  <div class="row">
    <div class="col-md-8">
    <form action="/reservation/{{ $room->id }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="from">From</label>
          <input type="date" class="form-control" name="from">
        </div>
        <div class="form-group">
          <label for="to">To</label>
          <input type="date" class="form-control" name="to">
        </div>
        <div class="form-group">
          <label for="message">message</label>
          <textarea name="message"  cols="30" rows="10"></textarea>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-md-4">
      <div class="card" >
        <img src="{{ asset('img/card-exemple.jpg') }}" class="card-img-top" alt=" main room image">
      <div class="card-body">
        <h5 class="card-title">{{ $room->title }}</h5>
        <p class="card-text">{{ $room->description }}</p>
        <ul>
          <li>price : <strong>{{ $room->price }} RUB</strong></li>
          <li>space : <strong>{{ $room->space }}</strong></li>
          <li>person : <strong>{{ $room->person }}</strong></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
  
  
</div>
@endsection