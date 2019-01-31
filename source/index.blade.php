@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
    <link rel="canonical" href="https://sambeevors.com">
    <meta name="description" content="I'm a Leeds based Front-End / Javascript developer. I create digital experiences that are blazing fast, incredibly accessible and user-oriented.">

@endpush 

@section('title', 'Sam Beevors | Frontend / Javascript Developer from Leeds, UK')

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')

<section>
    <div class="flex flex-col justify-center max-w-md lg:max-w-lg mx-auto w-full p-4">
        <div class="p-4">
            <h2 class="text-3xl lg:text-4xl leading-tight mb-4">Hi there...</h2>
            <p class="font-semibold mb-1 lg:mb-2 lg:text-lg">I'm an Edinburgh based Front-End / Javascript developer.</p>
            <p>I create digital experiences that are blazing fast, incredibly accessible and user-oriented at the Leeds/London digital agency <a href="https://parall.ax" target="_blank" rel="noopener" class="text-purple font-semibold">Parallax</a>.</p>
        </div>
    </div>
</section>
<section>
    <div class="flex flex-col justify-center max-w-md lg:max-w-lg mx-auto w-full p-4">

        <div class="px-4">
            <h2 class="mb-4 text-3xl lg:text-4xl leading-tight">Latest blog post</h2>
        </div>

        @php $i = 0; @endphp
        @foreach ($posts as $post)
            @if ($i === 0)
                <article class="p-4 block w-full">
                    <a href="{{ $post['_meta']->path }}" class="bg-purple antialiased overflow-hidden shadow rounded-t block no-underline bump-up border-t-8 border-purple-lighter bg-center bg-cover" style="background: linear-gradient(to right, rgba(149, 97, 226, 0.9), rgba(149, 97, 226, 0.75)), url({{ $post->featured_image }});">
                        <div class="p-8 max-w-sm">
                            <h3 class="text-2xl mb-0 leading-tight text-white">{{ $post->title }}</h3>
                            <p class="text-xs uppercase text-purple-lightest tracking-wide mb-4">{{ date('F j, Y', $post->date) }}</p>
                            <p class="text-sm text-white">{!! $post->excerpt(175) !!}</p>
                        </div>
                    </a>
                </article>
                @php $i++; @endphp
            @endif
        @endforeach

        <div class="px-4 pt-4">
            <a href="/blog/" class="text-grey-dark no-underline font-light text-xs tracking-wide uppercase">Other articles <span class="pl-1">➞</span></a>
        </div>

    </div>
</section>
<section>
    <div class="flex flex-col justify-center max-w-md lg:max-w-lg mx-auto w-full p-4">
        <div class="p-4">
            <h2 class="mb-4 text-3xl lg:text-4xl leading-tight">Other things I do</h2>
            <ul class="leading-normal lg:col-count-2 lg:col-gap-lg">
                <li class="mb-2">I created <a href="https://github.com/sambeevors/pumpkin.js" rel="noopener" target="_blank" class="text-purple font-semibold">pumpkin.js</a>, a super lightweight and performant JS microlibrary designed to make writing vanilla JS code as efficient and enjoyable as possible.</li>
                <li class="mb-2">I play the drums (but not as well as my brother). <a class="text-purple font-semibold | js-subscribe" href="javascript:;">Hit me up</a> if you wanna jam sometime</li>
                <li class="mb-2">I love to write. Often it's about web development, but my interests go far beyond the web.</li>
                <li class="mb-2">I tinker, modify and <em>"hack"</em> a lot, it's a great way to learn how stuff works.</li>
            </ul>
        </div>
    </div>
</section>

@endsection
