<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
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
    
    public function store(Request $request , Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}