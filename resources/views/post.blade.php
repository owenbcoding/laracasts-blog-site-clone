@extends('components.layout')

@section('content')
    <article>
        <h1 class="font-bold text-3xl mb-10 mt-10">{{ $post->title }}</h1>
        <p class="font-bold">
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <div class="mt-5">
        <a class="font-bold" href="/">Go Back</a>
    </div>
@endsection
