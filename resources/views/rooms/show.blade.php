@extends('layouts.app')
@section('content')
<a href="/rooms" class="btn btn-secondary mt-5">Go Back</a>
<h1 class="mt-5">{{$rooms->name}}</h1>
<div>
    {!! $rooms->types !!}
</div>
<hr>
<small>Written on{{$rooms->created_at}}</small>
<hr>
<a href="/rooms/{{$rooms->id}}/edit" class="btn btn-secondary mt-3"> Edit</a>
@endsection