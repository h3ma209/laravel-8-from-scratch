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
                <span>By <a href="/user/{{$post->user->username}}"><?= $post->user->username ?></a></span>
                <a href="/categories/{{ $post ->category->name}}"><?= $post->category->name ?></a>
                <p><?= $post->body ?></p>
            
            </article>
        @endforeach
    </body>
</html>