@extends('layouts.master')


@section('content')
<div class="col-md-8 blog-main">
  @if(count($posts)>0)
  @foreach($posts as $post)
        <div class="blog-post">
          <h2 class="blog-post-title">
            <a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
          <p class="blog-post-meta">
            {{$post->created_at->toFormattedDateString()}}
          </p>
        <p>{{$post->body}}</p>
        
        </div><!-- /.blog-post -->
  @endforeach

  @else
  <p>No post found</p>
  @endif
</div>
@endsection
