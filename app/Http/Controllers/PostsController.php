<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $posts = Post::orderBy('created_at', 'dsc')->get();
         
            return view('layouts.index')->with([
                'posts' => $posts,
                'success' => 'Post loaded'
                ]);
       
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('posts.create');
        }

        public function store()
        {
            $this->validate(request(), [
                'title' => 'required',
                'body' => 'required'
            ]);

            Post::create(request(['title', 'body']));
            return redirect('/')->with('success', 'Post Created');
        }
        public function show(Post $post)
        {
            // dd($post);
            return view('posts.show')->with('post', $post);
        }

        public function edit(Post $post)
        {
        //    $post = Post::find($id);
           return view('posts.update')->with('post', $post);
        }

        public function update(Request $request, $id)
        {
            $post = Post::find($id);
            $post->title = request('title');
            $post->body = request('body');
            $post->save();
            return redirect('/')->with('success', 'Post Updated');
        }

        public function destroy($id)
        {
            //dd($id);
            $post = Post::find($id);
            
            $post->delete();
            return redirect('/')->with('success', 'Post Deleted');
        }
    
}
