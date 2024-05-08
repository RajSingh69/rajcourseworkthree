@extends('layouts.home')

@section('title', "Viewing All Posts Here!!!")

@section('content')
    <style>
        body {
            background-color: #344055;
            font-family: Helvetica;
        }


        h1 {
            color: #FFBC42;
            text-align: center;
            font-size: 26px;
            font-family: Garamond;
        }
        a {
            font-size: 20px;
            color: #FFBC42;
            font-family: 'Comic Sans MS', cursive;
            font-style: italic;
            font-weight: bold;

        }

        h2 {
            text-align: center;
            font-size: 18px;
            color: #FFBC42;
            font-family: Helvetica;

        }

        h3 {
            text-align: center;
            font-size: 18px;
            color: #DDC3D0;
            font-family: Helvetica;
        }

        p {
            font-size: 16px;
            color: #8AC926;
            font-family: Arial;
        }


        
    </style>

    <h1> All beautiful posts are here! Please click on them to see the amazing story they tell! <br> <br> </h1>

    <h2> Would you like to add your story to the world databank? Here's your chance! <br> <br> </h2>
    <centre> <a href="{{ route('posts.create') }}"> ***Create A New Post***  </a> </centre>

    <h3> If not, you're more than welcome to look at others. <br> Please view until your heart is content! <br> Don't forget to look at your creation at the bottom! <br> <br> </h3>

    @foreach ($posts as $post)
        <h2> <a href="/posts/{{$post->id}}"> {{ $post->postTitle }} </a> </h2>
        <p> Post Content: {{ $post->postContent }} </p>
        

        <h2> Here are the comments for this post </h2>

        @foreach($post->comments as $comment)     
        <li>{{ $comment->commentContent }}</li>       
        @endforeach

        

        <hr>

    @endforeach









    <div class = "footer">
    {{ $posts -> onEachSide(5)->links()}}
    </div>


@endsection
