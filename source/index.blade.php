@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
    <link rel="canonical" href="https://sambeevors.com">

@endpush

@section('title', 'Sam Beevors | Frontend / Javascript Developer from Leeds, UK')

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')

    <div class="flex flex-col justify-center max-w-md lg:max-w-lg mx-auto min-h-screen w-full p-4">

        <div class="text-center md:text-left w-full md:max-w-sm rounded-lg bg-purple text-white relative md:mt-16 p-8 antialiased bg-hero-circuit-board-purple-light shadow-lg lg:self-center order-1" id="intro">
            <div class="md:pin-r md:pin-t md:-mr-14 md:-mt-14 relative md:absolute w-32 h-32 mb-4 md:mb-0 mx-auto">
                {{-- No point lazy loading this one --}}
                <img src="/img/mini-me.jpg" alt="Me!" class="object-fit absolute pin rounded-full">
            </div>
            <h2 class="text-3xl mb-4">Hi there...</h2>
            <p class="font-semibold mb-1">I'm a Leeds based Front-End / Javascript developer.</p>
            <p>I create digital experiences that are blazing fast, incredibly accessible and user-oriented.</p>
        </div>

        <div class="text-center md:text-left w-full md:max-w-xs rounded-lg bg-white text-grey-darkest relative mt-6 md:mt-16 p-8 shadow-lg self-end z-10 md:mr-2 order-2" id="stack">
            <h2 class="mb-2">My Dev Stack</h2>
            <p>If you're interested in exactly what it is I use to create my sites you can find a fairly comprehensive list <a href="https://gist.github.com/sambeevors/d4c2d644a2ffe6b13702e3a0af61d886" rel="noopener" target="_blank" class="text-purple no-underline font-semibold">in this Github gist</a>.</p>
        </div>

        <div class="text-center md:text-left w-full md:max-w-sm rounded-lg bg-orange-dark bg-hero-floating-cogs-orange text-white relative mt-6 md:-mt-12 md:mb-8 md:ml-16 p-8 shadow-lg self-start z-0 antialiased order-3" id="pumpkin">
            <h2 class="mb-2">Pumpkin.js</h2>
            <p>I created <strong>pumpkin.js</strong>, a super lightweight and performant JS microlibrary designed to make writing vanilla JS code as efficient and enjoyable as possible.</p>
            <p><a href="https://github.com/sambeevors/pumpkin.js" rel="noopener" target="_blank" class="no-underline text-white font-semibold">Check it out <span class="pl-1">➞</span></a></p>
        </div>

        <div class="text-center md:text-left w-full md:max-w-sm rounded-lg bg-blue text-white relative mt-6 md:mt-16 p-8 shadow-lg self-start lg:self-center z-0 antialiased order-5 md:order-4" id="contact">
            <div class="md:pin-r md:pin-t md:-mr-14 md:-mt-14 relative md:absolute w-32 h-32 mb-4 md:mb-0 bg-black rounded-full mx-auto overflow-hidden">
                @include('_partials.lazyload-image', [
                    'src' => '/img/cat.jpg',
                    'class' => 'object-fit-cover'
                ])
            </div>
            <h2 class="mb-2">Let's talk</h2>
            <p>Whether you have an equiry, want to get to know me better, or just want to see more pictures of my cat, you can <a class="text-blue-lightest font-semibold" href="mailto:me@sambeevors.com">send me an email</a> or <a class="text-blue-lightest font-semibold | js-subscribe" href="javascript:;">use this form</a> and I'll get back to you as soon as I can!</p>
        </div>

        <div class="text-center md:text-left w-full md:max-w-xs rounded-lg bg-white text-grey-darkest relative mt-6 md:-mt-12 p-8 shadow-lg self-end z-10 md:mr-16 order-4 md:order-5" id="stack">
            <h2 class="mb-2">How it's made</h2>
            <p>This site is entirely open source, you can <a href="https://gist.github.com/sambeevors/d4c2d644a2ffe6b13702e3a0af61d886" rel="noopener" target="_blank" class="text-purple no-underline font-semibold">view all of the source code</a> on Github.</p>
        </div>

        {{-- https://github.com/sambeevors/sambeevors.com --}}

    </div>

    @include('_partials.contact-modal')

@endsection
