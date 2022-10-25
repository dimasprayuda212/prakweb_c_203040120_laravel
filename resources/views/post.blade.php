@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        <p>By. Dimas Prayuda in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}

    </article>

    <a href="/blog">Back to Posts</a>
@endsection