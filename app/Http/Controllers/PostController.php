<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }
    public function show($id){
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }
    public function delete($id){
        Post::find($id)->delete();
        return redirect('/');
    }
    public function create(){
        return view('post.create');
    }
    public function edit($id){
        $post = Post::find($id);
        return view('post.update',compact('post'));
    }
    public function update(Request $request){
        $post = Post::find($request->id);
        $post->update($request->all());
        return redirect('/post/' . $post['id']);
    }
    public function store(Request $request){
        $validated = $request->validate([
           'title' => 'required',
           'description' => 'required'
        ]);
        $arr = $request->all();
        Post::create($arr);
        return redirect('/');
    }
}
