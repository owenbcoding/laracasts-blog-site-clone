@extends ('components.layout')
@section('content')
    @include('posts-header')
    {{-- @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'mb-6' : '' }}">
            <h1 class="font-bold text-3xl mb-10 mt-10">
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p class="font-bold">
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach --}}
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6"><a href="/"></a>
        @if ($posts->count() > 0)
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No Posts yet. Please check back later.</p>
        @endif
    </main>
@endsection
