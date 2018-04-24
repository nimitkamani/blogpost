@extends('layouts.master')

@section('content')
<div class="container">

        @foreach ($task as $tas)
        <ul>
            <li><a href="http://127.0.0.1:8000/tasks/{{$tas->id}}">{{$tas->body}}</a></li>
        </ul>
        @endforeach
    </div>
@endsection