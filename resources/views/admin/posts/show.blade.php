@extends('layouts.admin')

@section('content')

<div class="container test-center my-5">
    <h1 class="my-4">Post {{$post->title}}</h1>

    <div class="content d-flex">
        <img class="shadow" width="300" src="{{$post->cover_image}}" alt="{{$post->title}}">

        <p class="ms-4">{{$post->content}}</p>
    </div>
</div>


@endsection