@extends('layouts.home')

@section('title', 'Create a New Post')

@section('content')

    <style>
        body {
            background-color: #344055;
            font-family: Helvetica;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #2E3747;
            border-radius: 8px;
        }

        h1 {
            color: #F3A712;
            text-align: center;
            font-size: 26px;
            font-family: Garamond;
            margin-bottom: 10px;
        }

        h6 {
            font-size: 20px;
            color: #A5C4D4;
            font-family: Arial;
            text-align: center;
            margin-top: 10px;
        }

        a {
            display: block;
            font-size: 20px;
            color: #FFBC42;
            font-family: 'Comic Sans MS', cursive;
            font-style: italic;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px auto;
            display: block;
            border: 1px solid #A26769;
            border-radius: 4px;
            font-size: 18px;
            color: #A26769;
            font-family: 'Comic Sans MS';
            font-style: italic;
            text-align: center;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px auto;
            display: block;
            background-color: #FFBC42;
            border: none;
            border-radius: 4px;
            font-size: 20px;
            color: #2E3747;
            font-family: 'Comic Sans MS';
            font-style: italic;
            text-align: center;
            cursor: pointer;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #F56476;
        }
    </style>

    <div class="container">
        <h1>--- Create A New Post --- </h1>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <h6>Title: <input type="text" name="postTitle"></h6>
            <h6>Content: <input type="text" name="postContent"></h6>
            <h6>Category: <input type="text" name="postCategory"></h6>

            <input type="submit" value="Submit Post Here!">
            <a href="{{ route('posts.index') }}">Cancel Choice Here!</a>
        </form>
    </div>

@endsection