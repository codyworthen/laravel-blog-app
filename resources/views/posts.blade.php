{{--ALTERNATIVE APPROACH--}}

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

<x-layout>
    <x-slot name="slot">
        @foreach($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>

                <p>
                    <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

                <div>
                    {{--passing from a controller to view (inside the above php tags)--}}
                    {{ $post->excerpt }}
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
