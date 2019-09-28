@extends('layouts.app')
@section('content')
@if (count($posts)>0)
<div class="row" style="margin-top:50px;">
        @foreach ($posts as $post)
        <div class="container">
                <div class="row" style="background-color:mediumslateblue">
                    <div class="col"><h4 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                        <p class="card-text text-truncate">{{$post->body}}</p>
                        <a class="btn btn-outline-success" href="/posts/{{$post->id}}">Read More</a></div>
                    <div class="col"></div>
                </div> Written on {{$post->created_at}}
        </div>
    @endforeach 
</div>
@else
<h1 class="display-3 text-center" style="margin-top:100px;margin-bottom:119px;">No posts found</h1>
@endif    
@endsection