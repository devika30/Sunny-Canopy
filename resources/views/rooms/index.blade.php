@extends('layouts.app')
@section('content')
<h1 class="mt-5"> Rooms for customers</h1>
@if(count($rooms)>0)
 @foreach ($rooms as $room)
 <div class="well">
 <h3><a href="/rooms/{{$room->id}}">{{$room->name}}</a></h3>
 <small>booked at{{$room->created_at}}</small>
 </div>
     @endforeach
  @else
     <p> no bookings found</p>
   @endif
   @endsection