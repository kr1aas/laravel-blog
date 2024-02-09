@extends('layout.main')
<link rel="stylesheet" href="../css/style.css">
@section('container')
    <h1 class="mb-5">{{ $judul }}</h1>
    <div class="card mb-3 text-center">
        <img style="object-fit: cover; height: 400;"
            src="https://images.unsplash.com/photo-1706871706925-7e1a45bcf501?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a class="text-decoration-none text-dark"
                    href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
            <p> Author : <a class="text-decoration-none"
                    href="/author/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <p class="card-text"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>
        </div>
    </div>
    @foreach ($posts as $post)
        <article class="mb-5 ">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-3">
                        <div class=" card-kris position-absolute px-3 py-2" ><a class="text-white text-decoration-none" href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                        <img src="https://images.unsplash.com/photo-1705743035220-5748216a04a0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fHw%3D"
                            class="img-fluids rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-decoration-none"
                                    href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                            {{-- <h6> Category : <a class="text-decoration-none"
                                    href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6> --}}
                            <p> Author : <a class="text-decoration-none"
                                    href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a></p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <p class="card-text"><small
                                    class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small></p>
                            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    @endforeach
@endsection
