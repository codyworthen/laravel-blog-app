{{--ALTERNATIVE APPROACH--}}

{{--@extends('components.layout')--}}

{{--@section('content')--}}
{{--    <article>--}}
{{--        <h1>{!! $post->title !!}</h1>--}}

{{--        <div>--}}
{{--            --}}{{--accessing php within Blade--}}
{{--            {!! $post->body !!}--}}
{{--        </div>--}}
{{--    </article>--}}

{{--    <a href="/">Go Back</a>--}}
{{--@endsection--}}

<x-layout>
    <x-slot name="slot">
        <article>
            <h1>{!! $post->title !!}</h1>

            <p>
                Category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
{{--                accessing php within Blade--}}
                {!! $post->body !!}
            </div>
        </article>

        <a href="/">Go Back</a>
    </x-slot>
</x-layout>
