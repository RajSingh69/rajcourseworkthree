@extends('layouts.home')

@section('title', 'Viewing All Posts!')

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
            margin: 20px auto;
            padding: 20px;
            background-color: #2E3747;
            border-radius: 8px;
        }

        p, h1, h2, h3, h4 {
            color: #FCFCFC;
            font-family: Garamond, Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 10px 0;
        }

        h1 {
            font-size: 24px;
            color: #F56476;
        }

        h2 {
            font-size: 20px;
            color: #F56476;
        }

        h3 {
            font-size: 18px;
            color: #A5C4D4;
        }

        h4 {
            font-size: 16px;
            color: #8499B1;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 5px 0;
        }

        input[type="text"], input[type="submit"] {
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
            background-color: #FFBC42;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #F56476;
        }

        .delete-button {
            width: 100%;
            padding: 10px;
            margin: 10px auto;
            display: block;
            background-color: #FF3366; /* Choose your desired color */
            border: none;
            border-radius: 4px;
            font-size: 18px;
            color: #FFFFFF;
            font-family: 'Comic Sans MS', cursive;
            font-style: italic;
            text-align: center;
            cursor: pointer;
            box-sizing: border-box;
        }


        a {
            display: block;
            text-decoration: none;
            color: #FFBC42;
            font-size: 18px;
            margin-top: 10px;
            text-align: center;
        }
    </style>

    <div class="container">
        <h1>I am showing a post detail!</h1>

        <ul>
            <li><h2>Post Title: {{ $post->postTitle }}</h2></li>
            <li><h3>Post Content: {{ $post->postContent }}</h3></li>
            <li><h4>Post Category: {{ $post->postCategory }}</h4></li>
        </ul>

        <h2>Here are the comments for this post:</h2>
        <ul>
            @foreach($post->comments as $comment)
                <li>{{ $comment->commentContent }}</li>
            @endforeach
        </ul>

        <form method="POST" action="{{ route('comments.store', ['post' => $post->id]) }}">
            @csrf
            <p>Add your comment: <input type="text" name="commentContent" value="{{ old('commentContent') }}"></p>
            <input type="submit" value="Submit">
            <a href="{{ route('posts.index') }}">Cancel(Go Back)</a>
        </form>

        @if (auth()->user()->id == $post->user_id)

            <form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">
            @csrf
            @method('DELETE')
            <button class="delete-button" type="submit">Delete This Post</button>
            </form>


            <!-- <form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">
                @csrf
                @method('DELETE')
                <button class="bg-rose-600 hover:bg-rose-600" type="submit">Delete</button>
            </form> -->

        @endif
    </div>

@endsection