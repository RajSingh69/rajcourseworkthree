@extends('layouts.home')

@section('title', "Posts and Comments by {$user->name}")

@section('content')
    <h1>{{ $user->name }}'s Posts and Comments</h1>

    @foreach($posts as $post)
        <h2>{{ $post->post_data }}</h2>
        <p>Posted by: {{ $user->name }}</p>

        <ul>
            @foreach($post->comments as $comment)
                <li>{{ $comment->commentContent }}</li>
            @endforeach
        </ul>
    @endforeach

    {{ $posts->links() }}
@endsection