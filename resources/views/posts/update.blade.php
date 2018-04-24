@extends('layouts.master')

@section('content')
@parent
<div class="col-md-8 blog-main">
    <form method="POST" action="/posts/update/{{$post->id}}">
       {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="textarea" class="form-control" id="body" name="body" value="{{$post->body}}">
            </div>
            
            {{-- <div class="form-group">
                <input type="hidden" method="PUT">
            </div> --}}
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

               
    </form>

    
</div>
@endsection