@extends('layouts.app')

@section('content')
<h2 class="text-center" style="margin-top:70px;">Create posts</h2>
<hr style="width:30%; border-top:1px solid black">
<div class="container">
<form class="form-group" action="{{route('posts.store')}}" method="POST">
    @csrf
    <label class="h4"for="title">Title</label>
    <input class="form-control mb-3" type="text" name="title" value="" placeholder="Enter your title" >
    <label class="h4"for="body">Body</label>
    <textarea id="article-ckeditor" class="form-control" id="message"rows="3" name="body" placeholder="Enter Content"></textarea>
    <button class="btn btn-dark btn-fill mt-3" type="submit">Create Post</button>

</form>
</div>
@endsection