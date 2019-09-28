@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-xl-12 mb-5">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <h3 class="mb-0 display-2 text-center font-weight-normal">{{$posts->title}}
                        </h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div>
                                <div class="card-body p-0 m-0">
                                <img style="width:100%;" src="/storage/cover_images/">
                                </div>
                            </div>
                                <hr class="my-4">
                                <h3 class="mb-4">{!!$posts->body!!}</h3>       
                                <span class="heading-small text-muted mb-4"><small>Created by: {{$posts->created_by}}</small></span>
                        </form>
                    </div>
                </div>
                <div>
                    <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary btn-lg mt-3">Edit Event</a>
                    <form class="d-inline" action="{{ action('PostsController@destroy', ['id' => $posts->id]) }}" method="post">
                        <input class="btn btn-danger btn-lg mt-3" type="submit" value="Delete Event" />
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection