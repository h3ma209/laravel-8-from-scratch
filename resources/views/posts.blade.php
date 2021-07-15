<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="/app.css" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>

        <form class="input-group" method="GET" action="#">
            <div class="form-outline">
                <label class="form-label" for="form1">Search</label>
              <input type="search" id="form1" name="search" class="form-control" 
              value="{{request('search')}}"/>
              
            </div>
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-search">search</i>
            </button>
        </form>
        
        

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
            <div class="splitter">
                
            </div>
        @endforeach
    </body>
</html>