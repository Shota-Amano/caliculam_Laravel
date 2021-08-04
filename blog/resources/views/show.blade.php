<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    
    <body>
        <h1>Blog Name</h1>
        
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
        
            <div class = "post">
                <h3>{{ $post->title }}</a>
                <p class="title">{{ $post->body }}</p>
                <p class="updated_at">更新日時 : {{ $post->updated_at }}</p>
            </div>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
        <p class="back"><a href="/">戻る</a></p>    
        <script src="{{ asset('/assets/delete.js') }}"></script>
    </body>
</html>
