@extends('layout.main')
<link rel="stylesheet" href="../css/style.css">
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2> {{ $post->title }}</h2>
                <h5> {{ $post['author'] }}</h5>
                <h6> Category : <a class="text-decoration-none"
                        href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                <p> Author : <a class="text-decoration-none"
                        href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a>
                </p>
                <img style="object-fit: cover; height: 400;"
                    src="https://images.unsplash.com/photo-1706871706925-7e1a45bcf501?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="card-img-top" alt="...">
                <article class="my-5 fs-5">
                    {!! $post->body !!}
                </article>
                <div class="mb-5"><button type="button" class="btn btn-primary" id="backButton">Back</button></div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("backButton").onclick = function() {
            window.location.href = "/posts";
        };
    </script>
@endsection
