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
        <p>[<a href='/post/create'>create</a>]</p>
        <div class="posts">
            @foreach ($posts as $post)
                <div class = "post">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    <div class ="body">
                        <p>{{ $post->body }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
        
    </body>
</html>
