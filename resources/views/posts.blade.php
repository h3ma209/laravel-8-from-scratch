<html>
    <head>
        <script src="app.js"></script>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        
        @foreach ($posts as $post)
            <article>
                <?= $post; ?>
            </article>
        @endforeach
    </body>
</html>