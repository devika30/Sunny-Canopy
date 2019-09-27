@extends('layouts.app')
@section('content')
<h1>Book a Room</h1>
<form action="RoomsController@store",method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
            <label for="checkindate">Check in date:</label>
            <input type="text" class="form-control" id="email">
          </div>
          <div class="form-group">
                <label for="checkoutdate">Check out date:</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                    <label for="adult">Adult:</label>
                         <select class="form-control" id="adult">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                  </div>
                  <div class="form-group">
                        <label for="adult">Children:</label>
                             <select class="form-control" id="children">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                      </div>
                      <div class="form-group">
                            <label for="adult">type of room:</label>
                                 <select class="form-control" id="children">
                                    <option>x</option>
                                    <option>y</option>
                                    <option>z</option>
                                    <option>a</option>
                                  </select>
                          </div>
                
          <button type="submit" class="btn btn-primary">Submit</button>
</form>    
@endsection
