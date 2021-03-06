<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;
 master

class PostController extends Controller
{
    public function index(Post $post)

    {
        return $post->get();
    }

    {   //ペジネーションの設定（1ページ5件）
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
    
    public function show(Post $post)
    {   //postテーブルから情報を取得する
        return view('show')->with(['post'=>$post]);  
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(PostRequest $request , Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
 dev_basis05
    
    public function edit(Post $post)
    {
        return view('edit')->with(['post'=>$post]); 
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

    
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }


        return redirect('/posts/' . $post->id);
    }
    
master
}

 master
}

