@extends('layouts.home')

@section('title', "Viewing All Posts Here!!!")

@section('content')
    <style>
        body {
            background-color: #1F2633;
            font-family: Helvetica;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #FCFCFC;
            text-align: center;
            font-size: 26px;
            font-family: Garamond;
            margin-bottom: 10px;
        }

        a {
            font-size: 20px;
            color: #D2F898;
            font-family: 'Comic Sans MS', cursive;
            font-style: italic;
            font-weight: bold;

        }

        h2 {
            font-size: 18px;
            color: #F3A712;
            margin-top: 30px;
            margin-bottom: 20px;
            font-family: Helvetica;
            text-align: center;


        }

        /* If not youre more than welcome to.... */
        h3 {
            text-align: center;
            font-size: 16px;
            color: #FCFCFC;
            font-family: Arial;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        /* Post title..... */
        h4 {
            text-align: center;
            font-size: 20px;
            color: #FCFCFC;
            font-weight: bold;
            font-family: Helvetica;
        }

        /* Here are the commetns for this post */
        h5 {
            font-size: 18px;
            color: #A7CECB;
            font-style: italic;
            font-family: Arial;
        }

        /* Post content.... */
        p {
            font-size: 18px;
            color: #FCFCFC;

            font-family: Arial;
        }

        li {
            font-size: 18px;
            color: #A7CECB;
            font-family: Arial;
        }



        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .create-post {
            text-align: center;
        }

        .post {
            background-color: #2E3747;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .post-title {
            font-size: 24px;
            color: #FCFCFC;
            text-align: center;
            margin-bottom: 10px;
        }

        .post-content {
            font-size: 18px;
            color: #FCFCFC;
            margin-bottom: 10px;
        }

        .comments {
            margin-top: 10px;
        }

        .comment {
            font-size: 16px;
            color: #A7CECB;
            margin-bottom: 5px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>

                

    <div class="container">
        <h1>All beautiful posts are here! Please click on them to see the amazing story they tell!</h1>
        <h2>Would you like to add your story to the world databank? Here's your chance!</h2>
        <div class="create-post">
            <a href="{{ route('posts.create') }}">***Create A New Post***</a>
        </div>
        <h3>If not, you're more than welcome to look at others.<br>Please view until your heart is content!<br>Don't forget to look at your creation at the bottom!</h3>

        @foreach ($posts as $post)

                @if ($post->image_path)
                    <img src="{{ asset('storage' . $post->image_path) }}" alt="Posted Image goes here">
                @endif

            <div class="post">

                <div class="post-title">
                    <b>Post Title:</b><br>
                    <a href="/posts/{{$post->id}}">{{$post->postTitle}}</a>
                </div>



                <!-- @if ($post->image_path)
                    <img src="{{asset('storage/' . $post->image_path)}}" alt="Post Image">
                @endif -->

                


                <div class="post-content">
                    <b>Post Content:</b><br>
                    {{$post->postContent}}
                    <p>Posted: {{$post->created_at->diffForHumans()}}</p>
                </div>

                <div class="comments">
                    <h5>Here are the comments for this post:</h5>
                    @foreach($post->comments as $comment)
                        <div class="comment">{{$comment->commentContent}}</div>
                    @endforeach

                </div>
            </div>
        @endforeach

        <div class="footer">
            {{$posts->onEachSide(5)->links()}}
        </div>
    </div>
@endsection