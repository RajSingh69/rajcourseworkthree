@extends('layouts.home')

@section('title', 'Viewing Post Details!')

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

        h1 {
            color: #F3A712;
            text-align: center;
            font-size: 26px;
            font-family: Garamond;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 22px;
            color: #FCFCFC;
            margin-top: 30px;
            margin-bottom: 20px;
            font-family: Helvetica;
            text-align: center;
        }
        h3 {
            text-align: center;
            font-size: 20px;
            color: #FCFCFC;
            font-family: Helvetica;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        /* Post title..... */
        h4 {
            text-align: center;
            font-size: 18px;
            color: #FCFCFC;
            font-family: Helvetica;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        /* Here are the commetns for this post */
        h5 {
            font-size: 18px;
            color: #A7CECB;
            font-style: italic;
            font-family: Arial;
        }

        h6 {
            font-size: 20px;
            color: #A5C4D4;
            font-family: Arial;
            text-align: center;
            margin-top: 10px;
        }

        p {
            font-size: 18px;
            color: #F3A712;
            font-family: Arial;
            text-align: center;
            font-weight: bold;
            margin-top: 40px;
        }


        ul {
            list-style: none;
            padding: 0;
            color: #A7CECB;
        }

        li {
            padding: 5px 0;
            color: #A7CECB;
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
        <h1>I am the details from a single post!</h1>

        <ul>
            <li><h2><b>Post Title:</b> <br> {{ $post->postTitle }}</h2></li>
            <li><h3><b>Post Content:</b> <br> {{ $post->postContent }}</h3></li>
            <li><h4><i>Post Category:</i> <br> {{ $post->postCategory }}</h4></li>
        </ul>

        <h5>Here are the comments for this post:</h5>
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

        @endif
    </div>

@endsection