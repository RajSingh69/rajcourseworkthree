@extends('layouts.home')
 
@section('title', 'Showing a single comment!')

 
@section('content')
<ul>
    <li>Comment: {{$comment->commentContent}}</li>
    
</ul>



@endsection