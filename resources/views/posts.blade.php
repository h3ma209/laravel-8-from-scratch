@extends('layouts.app')

@section('content')
    
@if (isset(auth()->user()->username))
<span class="text-xss font-bold uppercase">
    Welcome, {{auth()->user()->username}}
</span>
    
@endif
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


{{$posts->links("pagination::bootstrap-4")}}
@foreach ($posts as $post)
    <article>
        <a href="
        /posts/{{$post->id}}
        ">
            <h1><?= $post->title ?></h1>
        </a>
        <span>By <a href="/users/{{$post->user->id}}"><?= $post->user->username ?></a></span>
        <a href="/categories/{{ $post ->category->name}}"><?= $post->category->name ?></a>
        <p><?= $post->body ?></p>
    
    </article>
    <div class="splitter">
        
    </div>
@endforeach

@endsection