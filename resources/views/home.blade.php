@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <table class="table table-striped mt-4">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Room</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($reservations as $reservation)
                  <tr>
                    <th scope="row">{{ $reservation->id }}</th>
                    <td>{{ $reservation->room_id }}</td>
                    <td>{{ $reservation->from }}</td>
                    <td>{{ $reservation->to }}</td>
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
        </div>
    </div>
</div>
@endsection
