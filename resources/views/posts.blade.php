@extends('layout.main')
<link rel="stylesheet" href="../css/style.css">
@section('container')
    <h1 class="mb-5">{{ $judul }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h1><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <h4>{{ $post['author'] }}</h4>
            <h6> Category : <a class="text-decoration-none"
                    href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
            <p> Author : <a class="text-decoration-none"
                    href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more...</a>
        </article>
    @endforeach
@endsection
