@extends('layouts.home')
 
@section('title', 'Comment a headline')
 

 
@section('content')
<form method = "POST" action = "{{route('comments.store') }}">
    @csrf

    <p>Add your comment: <input type ="text" name = "commentContent"
        value = "{{ old('commentContent')}}"></p>
    


    <input type = "submit" value= "Submit">
    <a href="{{ route('comments.index') }}"> Cancel</a>

</form>


@endsection