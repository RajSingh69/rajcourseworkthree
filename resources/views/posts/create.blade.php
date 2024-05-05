@extends('layouts.home')

@section('title', 'Create A New Post')

@section('content')
    <form method = "POST" action= " {{ route('posts.store') }} ">

    @csrf

    <p> Title: <input type= "text" name = "postTitle"> </p>
    <p> Content: <input type= "text" name = "postContent"> </p>
    <p> Category: <input type= "text" name = "postCategory"> </p>

    <input type = "submit" value = "Submit Post Here!">
    <a href = " {{ route('posts.index') }} "> Cancel Choice Here! </a>

    </form>

@endsection
