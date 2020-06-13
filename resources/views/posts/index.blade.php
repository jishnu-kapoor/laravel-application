@extends('layouts.laravelAppLayout')

@section('content')
<div class="border-right">
    <h1 align="center">A list of all available posts:</h1><br>
{{--    <p><a class="btn btn-primary btn-lg" href="posts/create" role="button">Create a post</a>--}}
{{--    </p>--}}
</div>
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
