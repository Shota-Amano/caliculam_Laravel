<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    
    <body>
        <div class="post">
            <form action="/posts" method ="POST">
                @csrf
                <div>
                    <h2>タイトル</h2>
                    <input type="text" name="post[title]" placeholder="タイトル"/>
                </div>
                <div>
                    <h2>本文</h2>
                    <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。" ></textarea>
                </div>
                <input type="submit" value="保存"/>
            </form>
            
            <p class="back">[<a href="/">戻る</a>]</p>
            
        </div>
        
    </body>
</html>
