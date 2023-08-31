<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('post.index', ['posts' => Post::all()]);
        
        
    }

    public function create(){

        return view('posts.create');
    }

    public function store(Request $request){
        Post::create($request->all());
        return redirect{route('posts.index')}

    public function show($id){
       return view('post.show',['post'=>Post::findOrFail($id)]);
    }
    public function edit($id){
        return view('post.edit',['post'=>Post::findOrFail($id)]);
    }
    public function update(Request $request, $id){
        Post::findOrFail($id)->update($request->all());
        return redirect(route('post.show', $id));
    }
}

