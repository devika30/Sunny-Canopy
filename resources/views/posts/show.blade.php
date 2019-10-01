@extends('layouts.app')

@section('content')
<div class="container-full" style="margin-top:70px">
    <div class="pd-5">
<a href="/posts" class="btn btn-info" style="margin-top:50px;margin-left:150px;">Go Back</a>
<h3 class="display-4 text-center">{{$post->title}}</h3>
<div class="container">
    <div class="p-0 m-0">
    <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
    </div>
    <hr>
    <div>
    {!! $post->body !!}
</div>
<hr>
<small>Written on{{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="margin-bottom:10px;">Edit</a>
<form action="{{route('posts.destroy',$post->id)}}" method="POST" class="pull-right">
<input type="hidden" name="_method" value="DELETE">
@csrf
<button class="btn btn-danger" type="submit">Delete</button>
</form>

</div>
</div>
@endsection