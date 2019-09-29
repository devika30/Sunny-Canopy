@extends('layouts.app')
@section('content')
<h1>Your Bookings</h1>
    @if(count($bookings)>0)
    <div class="row justify-content-center" style="background-color:#FF948B">
    @foreach ($bookings as $booking)
            <div class="col-lg-3 d-flex align-items-stretch" style="background-image:url('https://images.unsplash.com/photo-1527239441953-caffd968d952?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80');height:500px;">
               <div style="font-size: 14px;margin-left:57px;margin-top:90px;">
                <h5 style="font-size:15px;">Booking Date</h5>
                <p>{{$booking->check_in_date}} to {{$booking->check_out_date}}</p>
                <h5 style="font-size:15px;">Type of Room</h5>
                <p>{{$booking->type_of_room}}</p>
                <h5 style="font-size:15px;">No. of People</h5>
                <p>{{$booking->no_of_people}}</p>
                <h5 style="font-size:15px;">No. of Beds</h5>
                <p>{{$booking->no_of_bed}}</p>
               </div>
            </div>
    @endforeach
</div> 
     @else
   <h4 class="display-3">No Bookings Found!</h4> 
   @endif
@endsection