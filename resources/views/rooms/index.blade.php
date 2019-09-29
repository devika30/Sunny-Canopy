@extends('layouts.app')
@section('content')
<h1>Your Bookings</h1>
    @if(count($bookings)>0)
    @foreach ($bookings as $booking)
    <div class="alert alert-secondary">
    <div class="well">
        <div class="row">
            <div class="col-md-4 col sm-4">
            <div class="col-md-4 col sm-8">
            <h6><a href="/rooms/{{$booking->id}}">{{$booking->check_in_date}}-{{$booking->check_out_date}}-{{$booking->type_of_room}}</a></h6>
                <small>Written on{{$booking->no_of_people}} by {{$booking->no_of_bed}}</small>
            </div>

        </div>
    </div>

    </div>  
    @endforeach
     @else
   <p>No Bookings Found</p> 
   @endif
@endsection