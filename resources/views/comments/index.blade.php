@extends('layouts.home')
 
@section('title', 'Create a headline')
 
@section('sidebar')
    @parent
 
    
@endsection
 
@section('content')
<p>Dont follow the trend be your own headline </p>
<p><a href = "{{route('comments.create')}}"> Comment on a headline</a></p>
<ul> 
    @foreach($comments as $comment)
    <li><a href = "{{route('comments.show', ['id' => $comment->id])}}">{{ $comment->commentContent }}</a></li>
    @endforeach
</ul>

@endsection