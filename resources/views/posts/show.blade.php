@extends('layouts.laravelAppLayout')

@section('content')

    <h1>Posts</h1>
    <a href ="posts" class = "btn btn-default">Go back</a>

            <div class="jumbotron" >
                <h6>ID:{{$post->id}}</h6>
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
{{--                redirect to the post id--}}
<div class="row-cols-md-1">
                <small>Created at {{$post->created_at}}</small>
    <br>
                <small>Updated at {{$post->updated_at}}</small>
</div>
            </div>


@endsection
