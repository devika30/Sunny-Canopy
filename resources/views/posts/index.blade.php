@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@if(count($posts)>0)
@foreach ($posts as $post)
    <div class="alert alert-secondary">
    <div class="well">
        <div class="col-md-4 col sm-8">
        <h3 class="mt-5"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on{{$post->created_at}}</small>
            </div>
    </div>
    </div>
@endforeach
@else
<p>No posts Found</p> 
@endif
@endsection