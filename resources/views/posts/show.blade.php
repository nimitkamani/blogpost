@extends('layouts.master')

@section('content')
<div class="col-md-8 blog-main">
   <h1>
       {{$post->title}}
    </h1>
    <p>
        {{$post->body}}
    </p>
    <div class="row">
            <div class="col-md-6">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            </div>
            <div class="col-md-6">

                
                
                <form action="/posts/{{$post->id}}" method="post">
                    {{csrf_field()}}
                    {{-- <input type="hidden" method="DELETE"> --}}
                    <input type="submit" value="Delete" class="btn btn-primary">
                </form>
            </div>
         
    </div>
</div>
@endsection