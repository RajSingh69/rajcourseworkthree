@extends('layouts.home')
 
@section('title', 'Create a headline')

 
@section('content')
<p>Dont follow the trend be your own headline </p>
<p>Your headline</p>
<ul>
    <li>Comment: {{$comment->commentContent}}</li>
    
</ul>



@endsection