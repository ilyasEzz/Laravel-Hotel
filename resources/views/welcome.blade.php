@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Home</h1>
    <div class="row">
    @for ($i = 0; $i < 3; $i++)            
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/card-exemple.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              
        </div>
    @endfor
    </div>
</div>
@endsection