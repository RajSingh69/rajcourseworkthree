@extends('layouts.home')
 
@section('title', 'Showing all comments')
 
@section('content')
<p><a href = "{{route('comments.create')}}"> Comment on a post</a></p>
<ul> 
    @foreach($comments as $comment)
    <li><a href = "{{route('comments.show', ['id' => $comment->id])}}">{{ $comment->commentContent }}</a></li>
    @endforeach
</ul>

@endsection