@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:100px;margin-bottom:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <br>
                <div class="panel-body">
                   <a style="margin-left:50px" class="btn btn-primary"href="/room/create">Book A Room</a>
                   <br>
                   <br>
                <h3 style="margin-left:50px">Your Bookings</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
