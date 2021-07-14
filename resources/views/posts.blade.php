<html>
    <head>
        <script src="app.js"></script>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        
        @foreach ($posts as $post)
            <article>
                <a href="
                /posts/{{$post->id}}
                ">
                    <h1><?= $post->title ?></h1>
                </a>
                <h4><?= $post->category->name ?></h4>
                <p><?= $post->body ?></p>
            
            </article>
        @endforeach
    </body>
</html>