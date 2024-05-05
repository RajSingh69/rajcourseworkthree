@extends('layouts.home')

@section('title', 'Viewing All Posts!')

@section('content')

    <p> All beautiful posts are here! </p>

    <a href = " {{ route('posts.create') }} "> Create A New Post </a>

    @foreach ($posts as $post)
        <h1> <a href="/posts/ {{$post->id}}"> {{ $post->postTitle }} </a> </h1>
            <p> Post Content: {{ $post -> postContent}} </p>
            <hr>
    @endforeach

    

    

@endsection

