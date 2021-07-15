<html>
    <head>
        <script src="app.js"></script>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        
        <article>
            
            <h1><?= $post->title ?></h1>
            <span>By <a href="/user/{{$post->user->username}}"><?= $post->user->username ?></a></span>
            <p><?= $post->body ?></p>
        </article>
        <a href="/">Go back</a>
    </body>
</html>