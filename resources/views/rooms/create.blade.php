@extends('layouts.app')
@section('content')
<h1>Book a Room</h1>
<form action="{{route('room.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
          <div class="form-group">
            <label>Check in date:</label>
            <input type="date" class="form-control" name="check_in_date">
          </div>
          <div class="form-group">
                <label >Check out date:</label>
                <input type="date" class="form-control" name="check_out_date">
          </div>
          <div class="form-group">
               <label>No of people</label>
               <input type="number" class="form-control" name="no_of_people">
         </div>

          <div class="form-group">
             <label>Number of Beds</label>
             <select class="form-control form-control-alternative" name='no_of_bed'>
                  @foreach (\App\Room::all() as $room)
             <option value='{{$room->no_of_beds}}'>{{$room->no_of_beds}}</option>                            
                  @endforeach
                </select>
          </div>
         <div class="form-group">
               <label>Type of Rooms:</label>
               <select class="form-control form-control-alternative" name='type_of_room'>
                     @foreach (\App\Room::all() as $room)
                <option value='{{$room->type_of_room}}'>{{$room->type_of_room}}</option>                            
                     @endforeach
                   </select>
                  </div>
                
          <button type="submit" class="btn btn-primary">Submit</button>
</form>    
@endsection
