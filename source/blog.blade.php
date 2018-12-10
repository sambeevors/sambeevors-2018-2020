---
pagination:
  collection: posts
  perPage: 5
title: My Writings
tagline: Here is a collection of articles I've written over time.
---

@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
    <link rel="canonical" href="https://sambeevors.com">
    <meta name="description" content="I'm a Leeds based Front-End / Javascript developer. I create digital experiences that are blazing fast, incredibly accessible and user-oriented.">

@endpush

@section('title', 'Blog | Sam Beevors')

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')

    <div class="flex flex-col justify-center max-w-md lg:max-w-lg mx-auto w-full p-4">

        @foreach ($pagination->items as $post)
            <div class="pt-8 mt-8 border-t border-grey-light">
                <a href="{{ $post['_meta']->path }}" class="text-purple font-semibold no-underline">
                    <h3 class="text-xl mb-0">{{ $post->title }}</h3>
                </a>
                <p class="text-xs mb-2 uppercase text-grey-dark tracking-wide">{{ date('F j, Y', $post->date) }}</p>
                <p class="text-grey-darker text-sm">{!! $post->excerpt(175) !!}</p>
            </div>
        @endforeach

        <div class="text-center mt-12 flex mx-auto items-center">
            @if ($previous = $pagination->previous)
                <a class="text-grey-dark font-semibold no-underline" href="{{ $page->baseUrl }}{{ $pagination->first }}">&lt;&lt;</a>
                <a class="text-grey-dark font-semibold no-underline" href="{{ $page->baseUrl }}{{ $previous }}">&lt;</a>
            @else
                <span class="text-grey-light">&lt;&lt;&nbsp;&lt;</span>
            @endif
        
            @foreach ($pagination->pages as $pageNumber => $path)
                <a href="{{ $page->baseUrl }}{{ $path }}" class="font-semibold no-underline px-2 {{ $pagination->currentPage == $pageNumber ? 'text-grey-darker' : 'text-purple' }}">
                    {{ $pageNumber }}
                </a>
            @endforeach
        
            @if ($next = $pagination->next)
                <a class="text-grey-dark font-semibold no-underline" href="{{ $page->baseUrl }}{{ $next }}">&gt;</a>
                <a class="text-grey-dark font-semibold no-underline" href="{{ $page->baseUrl }}{{ $pagination->last }}">&gt;&gt;</a>
            @else
                <span class="text-grey-light">&gt;&nbsp;&gt;&gt;</span>
            @endif
        </div>

    </div>

@endsection
