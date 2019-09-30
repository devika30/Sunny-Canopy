@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:70px">
    <div class="pd-5">
<a href="/posts" class="btn btn-secondary" style="margin-top:50px;">Go Back</a>
<h3>{{$post->title}}</h3>
<div>
    {!! $post->body !!}
</div>
<hr>
<small>Written on{{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="margin-bottom:10px;">Edit</a>
<form action="{{route('posts.destroy',$post->id)}}" method="POST" class="pull-right">
<input type="hidden" name="_method" value="PUT">
@csrf
<button class="btn btn-danger" type="submit">Delete</button>
</form>

</div>
</div>
@endsection