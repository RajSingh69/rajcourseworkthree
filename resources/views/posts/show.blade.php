@extends('layouts.home')

@section('title', 'Viewing All Posts!')

@section('content')

    <p> I am showing a post detail! </p>

    <ul>
        <li> Post Title: {{ $post ->  postTitle}} </li>
        <li> Post Content: {{$post -> postContent}} </li>
        <li> Post Category: {{$post -> postCategory}}</li>
    </ul>

@endsection

