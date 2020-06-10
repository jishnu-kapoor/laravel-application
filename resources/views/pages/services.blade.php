@extends('layouts.laravelAppLayout')

@section('content')

    <h1>{{$title}}</h1>
<p>This is the services page</p>

    <p>These are the available services</p>

    @if(count($services_set) > 0)

        <ul class ="list-group">

            @foreach($services_set as $service)

                <li class="list-group-item">{{$service}}</li>

            @endforeach
        </ul>

        @endif



@endsection
