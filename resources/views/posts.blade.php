{{--ONE APPROACH--}}

{{--@extends('components.layout')--}}
{{--@section('content')--}}
{{--    @foreach($posts as $post)--}}
{{--        <article>--}}
{{--        <h1>--}}
{{--            <a href="/posts/{{ $post->slug }}">--}}
{{--                {{ $post->title }}--}}
{{--            </a>--}}
{{--        </h1>--}}

{{--        <div>--}}
{{--            --}}{{--passing from a controller to view (inside the above php tags)--}}
{{--            {{ $post->excerpt }}--}}
{{--        </div>--}}
{{--    </article>--}}
{{--    @endforeach--}}
{{--@endsection--}}

{{--ANOTHER APPROACH--}}

{{--<x-layout>--}}
{{--    <x-slot name="slot">--}}
{{--        @foreach($posts as $post)--}}
{{--            <article>--}}
{{--                <h1>--}}
{{--                    <a href="/posts/{{ $post->slug }}">--}}
{{--                        {{ $post->title }}--}}
{{--                    </a>--}}
{{--                </h1>--}}

{{--                <p>--}}
{{--                    By <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }}</a>--}}
{{--                    in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>--}}
{{--                </p>--}}

{{--                <div>--}}
{{--                    --}}{{--passing from a controller to view (inside the above php tags)--}}
{{--                    {{ $post->excerpt }}--}}
{{--                </div>--}}
{{--            </article>--}}
{{--        @endforeach--}}
{{--    </x-slot>--}}
{{--</x-layout>--}}

<x-layout>
    <x-slot name="slot">
        @include('_posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($posts->count())
                <x-post-grid :posts="$posts"/>
            @else
                <p class="text-center">No posts yet! Please check back later.</p>
            @endif
        </main>
    </x-slot>
</x-layout>
