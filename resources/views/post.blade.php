@extends('layout.main')
<link rel="stylesheet" href="../css/style.css">
@section('container')
    <article>
        <h2> {{ $post->title }}</h2>
        <h5> {{ $post['author'] }}</h5>
        <h6> Category : <a class="text-decoration-none" href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
        <p> Author : <a class="text-decoration-none" href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a></p>
        {!! $post->body !!}
    </article>
    <button type="button" class="btn btn-primary" id="backButton">Back</button>
    <script>
        document.getElementById("backButton").onclick = function() {
            window.location.href = "/posts";
        };
    </script>
@endsection

