@extends('layouts.home')

@section('title', 'Create A New Post')

@section('content')

    <style>

        h1 {
            font-size: 20px;
            color: #F56476;
            font-family: Garamond;
            text-align: center;
        }

        body {
            background-color: #344055;
            font-family: Helvetica;
            }

        h6 {
            font-size: 20px;
            color: #A5C4D4;
            font-family: Arial;
            text-align: center;
        }

        a {
            font-size: 20px;
            color: #FFBC42;
            font-family: 'Comic Sans MS', cursive;
            font-style: italic;
            text-align: center;

        }

        input {
            font-size: 20px;
            color: #A26769;
            font-family: 'Comic Sans MS';
            font-style: italic;
            text-align: center;

        }




    </style>





    <form method = "POST" action= " {{ route('posts.store') }} ">

    @csrf

    <h6> Title: <input type= "text" name = "postTitle"> </h6>
    <h6> Content: <input type= "text" name = "postContent"> </h6>
    <h6> Category: <input type= "text" name = "postCategory"> </h6>

    <input type = "submit" value = "Submit Post Here!">
    <a href = " {{ route('posts.index') }} "> Cancel Choice Here! </a>

    </form>







@endsection
