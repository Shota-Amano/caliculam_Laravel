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
          <div class = "post">
                <h3>{{ $post->title }}</a>
                <p class="title">{{ $post->body }}</p>
                <p class="updated_at">{{ $post->updated_at }}</p>
                
            </div>
    </body>
</html>
