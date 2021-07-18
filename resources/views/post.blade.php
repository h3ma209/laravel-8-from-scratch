<html>
    <head>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/app.css">
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>
        
        <article style="margin-top: 100px">
            
            <h1><?= $post->title ?></h1>
            <span>By <a href="/user/{{$post->user->username}}"><?= $post->user->username ?></a></span>
            <p><?= $post->body ?></p>
        </article>
        <a href="/">Go back</a>

        <div class="container" style="margin-top: 100px">
            <div class="row">
                @foreach ($comments as $comment)
                <div class="col-6">
                    <div class="card card-white post px-4 py-4">
                        <div class="post-heading">
                            <div class="float-left image">
                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                            </div>
                            <div class="float-left meta" style="margin-top: 15px">
                                <div class="title h5">
                                    <a href="#"><b>{{$comment->user->username}}</b></a>
                                    
                                </div>
                                <h6 class="text-muted time">1 minute ago</h6>
                            </div>
                        </div> 
                        <div class="post-description"> 
                            {{$comment->body}}
        
                        </div>
                    </div>
                </div>
                
                    
                @endforeach
            </div>
        </div>
    </body>
</html>