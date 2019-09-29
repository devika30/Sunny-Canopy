@extends('layouts.app')
@section('content')
<div style="background-color:white;margin-top: 0px;padding-top:0px;" class="jumbotron jumbotron-fluid">
      <div class="row">
                  <div class="col-3">
                        <img style="height200px;" src="https://images.unsplash.com/photo-1494336934272-f0efcedfc8d7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80" >
                  </div>
                  <div class="col-3">
                        <img style="margin-left: 10px;height200px;" src="https://images.unsplash.com/photo-1507038772120-7fff76f79d79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80" >
                  </div>
                  <div class="col-3">
                              <img style="margin-left:-10px;height200px;width:300px;" src="https://images.unsplash.com/photo-1434569842867-4d6d1d4d1ef0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" >
                  </div>
                  <div class="col-3" style="background-image:url('https://images.unsplash.com/photo-1551525212-a1dc18871d4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=749&q=80');height:500px;">
                        <h1 class="display-2" style="margin-top:200px;margin-left:-575px;color:#fff"><span style="background-color:black;">RESERVATION</span></h1>
                  </div>
                  

      </div>
</div>
<div class="text-center" style="margin-bottom:60px;">
      <h4 style="color:crimson;font-size:30px;font-family: 'Dancing Script', cursive;">RESERVATION</h4>
      <h1>EDIT YOUR BOOKINGS</h1>
</div>


<div class="container" style="margin-bottom:100px">
      <form action="{{route('room.update/{{$book->id}}')}}" method="POST" enctype="multipart/form-data">
        <input name="_method" type="hidden" value="PUT">
            @csrf
            <div class="row justify-content-center">
                  <div class="col-3">
                        <div class="form-group">
                              <label>Check in date:</label>
                              <input type="date" class="form-control" name="check_in_date">
                        </div>
                                        
                  </div>
                  <div class="col-3">
                        <div class="form-group">
                              <label >Check out date:</label>
                              <input type="date" class="form-control" name="check_out_date">
                        </div>
                  </div>
            </div>
            <div class="row justify-content-center">
                  <div class="col-3">
                        <div class="form-group">
                              <label>No of people</label>
                               <input type="number" class="form-control" name="no_of_people">
                        </div>
                  </div>
                  <div class="col-3">
                        <div class="form-group">
                              <label>Number of Beds</label>
                              <select class="form-control form-control-alternative" name='no_of_bed'>
                                                         @foreach (\App\Room::all() as $room)
                              <option value='{{$room->no_of_beds}}'>{{$room->no_of_beds}}</option>                            
                              @endforeach
                              </select>
                        </div>
                  </div>
                  <div class="col-3">
                        <div class="form-group">
                              <label>Type of Rooms:</label>
                              <select class="form-control form-control-alternative" name='type_of_room'>
                              @foreach (\App\Room::all() as $room)
                              <option value='{{$room->type_of_room}}'>{{$room->type_of_room}}</option>                            
                              @endforeach
                              </select>
                        </div>
                  </div>
            </div>
            <div class="row justify-content-center">
                  <div class="col-1">
                        <button type="submit" class="btn btn-info text-center">Submit</button>
                  </div>
            </div>
          </form> 
</div>

<div class="row justify-content-center text-muted" style="margin-bottom:100px;">
      <div class="col-4">
            <h4>RESERVE BY PHONE</h4>
            <p>Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus. Nulla vulputate , lectus vel volutpat efficitur, orci lacus sodales sem, sit amet quam: (001) 345 6889</p>
      </div>
      <div class="col-4 offset-2">
                  <h4>FOR EVENT BOOKING</h4>
                  <p>Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus. Nulla vulputate , lectus vel volutpat efficitur, orci lacus sodales sem, sit amet quam: (001) 345 6889</p>
            </div>
</div>
@endsection
