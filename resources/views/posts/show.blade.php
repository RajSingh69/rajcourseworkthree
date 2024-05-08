@extends('layouts.home')

@section('title', 'Viewing All Posts!')

@section('content')

    <style>
        body {
            background-color: #344055;
            font-family: Helvetica;
        }

        p {
            font-size: 20px;
            color: #8AC926;
            font-family: Garamond;
            text-align: center;
        }

        h1 {
            font-size: 20px;
            color: #F56476;
            font-family: Garamond;
            text-align: center;
        }



        h2 {
            font-size: 20px;
            color: #F56476;
            font-family: Arial;
        }
        h3 {
            font-size: 18px;
            color: #A5C4D4;
            font-family: Arial;
        }
        h4 {
            font-size: 16px;
            color: #8499B1;
            font-family: Arial;
        }

        

    </style>


        

    <p> I am showing a post detail! </p>

    <ul>
        <h2> <li> Post Title: {{ $post ->  postTitle}} </li> </h2>
        <h3> <li> Post Content: {{$post -> postContent}} </li> </h3>
        <h4> <li> Post Category: {{$post -> postCategory}}</li> </h4>
    </ul>




    <ul>
    <h2> Here are the comments for this post </h2>
        @foreach($post->comments as $comment)     
        <li>{{ $comment->commentContent }}</li>       
        @endforeach
    </ul>







    <form method = "POST" action = "{{route('comments.store', ['post' => $post->id]) }}">
    @csrf

    <p>Add your comment: <input type ="text" name = "commentContent" value = "{{ old('commentContent')}}"></p>

    <input type = "submit" value= "Submit">
    <a href="{{ route('comments.index') }}"> Cancel</a>



    
    </form>
    @if (auth()->user()->id == $post->user_id)
    <form method = "POST"
    action="{{route('posts.destroy', ['id'=> $post->id])}}">

    @csrf
    @method('DELETE THIS CURRENT POST')
    <button class="bg-rose-600 hover:bg-rose-600" type="submit">Delete</button>

    </form>
    @endif








@endsection

