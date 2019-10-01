@extends('layouts.app')
@section('content')
<h1 class="display-4 text-center" style="margin-top:70px">Posts</h1>
<hr>
@if(count($posts)>0)
<div class="row" style="margin-top:100px;margin-bottom:60px;">
    <div class="col-2 text-center offset-1 p-3" style="border:2px solid black">
        <h5 style="color:crimson;">Latest Posts</h5>
    </div>
</div>
@foreach ($posts as $post)
    <div class="container">
        <div class="row">
        <div class="col-3">
            <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-6 offset-1">
            <a href="/posts/{{$post->id}}" class="btn btn-outline-info" style="margin-bottom:30px;">Read More</a>
                <h3><a href="/posts/{{$post->id}}" style="color:black;">{{$post->title}}</a></h3>
                <small class="text-muted">Written on {{$post->created_at}}</small>
        </div>
        </div>
    </div>
    <hr>
@endforeach
@else
<h4 class="display-4 text-center" style="margin-top:100px;margin-bottom:100px;color:red;">No posts Found !</h4> 
@endif
@endsection