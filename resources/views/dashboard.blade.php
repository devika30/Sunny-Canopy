@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mt-5">Dashboard</div>
                <br>
                <div class="panel-body">
                   <a class="btn btn-primary"href="/room/create">Book A Room</a>
                   <br>
                   <br>
                <h3> Your Bookings</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
