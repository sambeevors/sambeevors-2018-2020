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
    <link rel="canonical" href="https://sambeevors.com/blog/">
    <meta name="description" content="This is a collection of some of the web-related articles I have related articles I have written over the years, covering things such as Javascript, HTML, CSS, Web Performance and more.">

@endpush

@section('title', 'Blog | Sam Beevors')

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')

    <div class="flex flex-col justify-center max-w-md lg:max-w-lg mx-auto w-full p-4">

        <div class="flex flex-wrap lg:mt-12">
            @php $i = 0; @endphp
            @foreach ($pagination->items as $post)
                @if ($i === 0 && !$pagination->previous)
                <article class="p-4 block w-full">
                    <a href="{{ $post['_meta']->path }}" class="bg-purple antialiased overflow-hidden shadow rounded-t block no-underline bump-up border-t-8 border-purple-lighter bg-center bg-cover" style="background: linear-gradient(to right, rgba(149, 97, 226, 0.9), rgba(149, 97, 226, 0.75)), url({{ $post->featured_image }});">
                        <div class="p-8 max-w-sm">
                            <p class="text-white uppercase tracking-wide font-light text-xs text-purple-lightest mb-1">Latest blog post:</p>
                            <h3 class="text-2xl mb-0 leading-tight text-white mb-4">{{ $post->title }}</h3>
                            {{-- <p class="text-xs mb-2 uppercase text-purple-lightest tracking-wide">{{ date('F j, Y', $post->date) }}</p> --}}
                            <p class="text-sm text-white">{!! $post->excerpt(175) !!}</p>
                        </div>
                    </a>
                </article>
                @php $i++; @endphp
                @else
                <section class="lg:w-1/2 p-4 block">
                    <a href="{{ $post['_meta']->path }}" class="bg-white overflow-hidden shadow rounded-t block no-underline bump-up | js-post">
                        @if ($post->featured_image)
                            @include('_partials.lazyload-image', [
                                'src' => $post->featured_image,
                                'class' => 'object-fit-cover block',
                                'alt' => $post->title
                            ])
                        @endif
                        <div class="py-4 px-8">
                            <h3 class="text-xl mb-0 leading-tight text-grey-darkest mb-2 | js-post-title">{{ $post->title }}</h3>
                            <p class="text-xs mb-2 uppercase text-grey-dark tracking-wide">{{ date('F j, Y', $post->date) }}</p>
                        </div>
                        <div class="px-8 py-4 bg-purple-lightest | js-post-body">
                            <p class="text-sm text-purple-darker-50">{!! $post->excerpt(175) !!}</p>
                        </div>
                    </a>
                </section>
                @endif
            @endforeach
        </div>

        <nav class="text-center mt-12 flex mx-auto items-center">
            @if ($previous = $pagination->previous)
                <a class="text-grey-dark font-semibold no-underline" href="{{ $page->baseUrl }}{{ $pagination->first }}">❮❮</a>
                <a class="text-grey-dark font-semibold no-underline" href="{{ $page->baseUrl }}{{ $previous }}">&nbsp;❮</a>
            @else
                <span class="text-grey-light">❮❮&nbsp;❮</span>
            @endif
        
            @foreach ($pagination->pages as $pageNumber => $path)
                <a href="{{ $page->baseUrl }}{{ $path }}" class="font-semibold no-underline px-2 {{ $pagination->currentPage == $pageNumber ? 'text-grey-darker' : 'text-purple' }}">
                    {{ $pageNumber }}
                </a>
            @endforeach
        
            @if ($next = $pagination->next)
                <a class="text-grey-dark font-semibold no-underline" href="{{ $page->baseUrl }}{{ $next }}">❯&nbsp;</a>
                <a class="text-grey-dark font-semibold no-underline" href="{{ $page->baseUrl }}{{ $pagination->last }}">❯❯</a>
            @else
                <span class="text-grey-light">❯&nbsp;❯❯</span>
            @endif
        </nav>

    </div>

@endsection
