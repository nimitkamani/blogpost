@extends('layouts.master')

@section('content')
@parent
<div class="col-md-8 blog-main">
    <form method="POST" action="/posts">
       {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="textarea" class="form-control" id="body" name="body" placeholder="body text">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

               
    </form>

    
</div>
@endsection