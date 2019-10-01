@extends('layouts.app')

@section('content')
<h2 class="text-center display-4" style="margin-top:100px;">Create posts</h2>
<hr style="width:30%; border-top:1px solid black">
<div class="container">
<form class="form-group" action="{{route('posts.store')}}" method="POST">
    @csrf
    <label class="h4"for="title">Title</label>
    <input class="form-control mb-3" type="text" name="title" value="" placeholder="Enter your title" >
    <label class="h4"for="body">Body</label>
    <textarea id="article-ckeditor" class="form-control mb-3" id="message"rows="3" name="body" placeholder="Enter Content"></textarea>
    <label class="h4"for="title">Image</label>
    <div class="form-group pb-0">
        <div class="input-group input-group-alternative">
          <div class="custom-file" style="border:none;">
              <input name="cover_image" type="file" id="myfile" class="custom-file-input" >
              <label class="custom-file-label" for="myfile">Choose Image</label>
          </div>
        </div>
      </div>
      <small class="float-right text-muted">Max size:2 MB</small>
    <button class="btn btn-dark btn-fill mt-3" type="submit">Create Post</button>

</form>
</div>
@endsection