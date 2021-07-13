<html>
    <head>
        <script src="app.js"></script>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        
        @foreach ($posts as $post)
            <article>
                <?= $post->title; ?>
                <?= $post->date; ?>
            </article>
        @endforeach
    </body>
</html>