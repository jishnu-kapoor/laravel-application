@extends('layouts.laravelAppLayout')

@section('content')

    <h1>Posts</h1>

    @if (count ($posts) > 0)

            @foreach($posts as $post)
            <div class="jumbotron" >

                <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
{{--                redirect to the post id--}}

                <small>Written on {{$post->created_at}}</small>




            </div>
            @endforeach
{{$posts->links()}}
                @else
                    <p>No Posts Found</p>
    @endif

@endsection
