@extends('layouts.admin')

@section('content')

<h2>Edit {{$post->title}}</h2>

@include('partials.errors')

<form action="{{route('admin.posts.update', $post->slug)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Learn php article" aria-describedby="titleHelper" value="{{old('title', $post->title)}}">
        <small id="titleHelper" class="text-muted">Type the post title, max: 150 carachters</small>
    </div>
    <!-- TODO: Change to input type file -->
    <div class="form-group">
        <label for="cover_image">cover_image</label>
        <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="Learn php article" aria-describedby="cover_imageHelper" value="{{old('cover_image', $post->cover_image)}}">
        <small id="cover_imageHelper" class="text-muted">Type the post cover_image</small>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content" rows="4">{{old('content', $post->content)}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary text-white mt-4">Edit Post</button>

</form>

@endsection