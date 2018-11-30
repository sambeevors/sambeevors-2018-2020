@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
    <link rel="canonical" href="https://sambeevors.com">

    <noscript>
        <style>
            .lqip {
                display: none !important;
            }
        </style>
    </noscript>

@endpush

@section('title', 'Sam Beevors | Frontend / Javascript Developer from Leeds, UK')

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')

    <div class="flex flex-col justify-center max-w-md mx-auto min-h-screen w-full p-4">

        <div class="text-center md:text-left w-full md:max-w-sm rounded-lg bg-purple text-white relative mt-6 md:mt-16 p-8 antialiased bg-hero-circuit-board-purple-light shadow-lg self-start" id="intro">
            <div class="md:pin-r md:pin-t md:-mr-14 md:-mt-14 relative md:absolute w-32 h-32 mb-4 md:mb-0 mx-auto">
                {{-- No point lazy loading this one --}}
                <img src="img/mini-me.jpg" alt="Me!" class="object-fit absolute pin rounded-full">
            </div>
            <h2 class="text-3xl mb-4">Hi there...</h2>
            <p class="font-semibold mb-1">I'm a Leeds based Front-End / Javascript developer.</p>
            <p>I create digital experiences that are blazing fast, incredibly accessible and user-oriented.</p>
        </div>

        <div class="text-center md:text-left w-full md:max-w-xs rounded-lg bg-white text-grey-darkest relative mt-6 md:mt-16 p-8 shadow-lg self-end z-10 md:mr-2" id="stack">
            <h2 class="mb-2">My Dev Stack</h2>
            <p>If you're interested in some of the hardware / software I use you can check it out <a href="https://gist.github.com/sambeevors/d4c2d644a2ffe6b13702e3a0af61d886" rel="noopener" target="_blank" class="text-purple no-underline font-semibold">here</a>.</p>
        </div>

        <div class="text-center md:text-left w-full md:max-w-sm rounded-lg bg-orange-dark bg-hero-floating-cogs-orange text-white relative mt-6 md:-mt-12 md:mb-8 md:ml-16 p-8 shadow-lg self-start z-0 antialiased" id="pumpkin">
            <h2 class="mb-2">Pumpkin.js</h2>
            <p>I created <strong>pumpkin.js</strong>, a super lightweight and performant JS microlibrary designed to make writing vanilla JS code as efficient and enjoyable as possible.</p>
            <p><a href="https://github.com/sambeevors/pumpkin.js" rel="noopener" target="_blank" class="no-underline text-white font-semibold">Check it out <span class="pl-1">➞</span></a></p>
        </div>

        <div class="text-center md:text-left w-full md:max-w-sm rounded-lg bg-blue text-white relative mt-6 md:mt-16 p-8 shadow-lg self-start z-0 antialiased" id="contact">
            <div class="md:pin-r md:pin-t md:-mr-14 md:-mt-14 relative md:absolute w-32 h-32 mb-4 md:mb-0 bg-black rounded-full mx-auto overflow-hidden">
                @include('_partials.lazyload-image', [
                    'src' => 'img/cat.jpg',
                    'class' => 'object-fit-cover'
                ])
            </div>
            <h2 class="mb-2">Let's talk</h2>
            <p>Whether you have an equiry, want to get to know me better, or just want to see more pictures of my cat, you can <a class="text-blue-lightest font-semibold" href="mailto:me@sambeevors.com">send me an email</a> or <a class="text-blue-lightest font-semibold | js-subscribe" href="javascript:;">use this form</a> and I'll get back to you as soon as I can!</p>
        </div>

    </div>

    <div class="flex justify-center fixed pin bg-black-70 z-50 items-center opacity-0 pointer-events-none js-modal-container" style="transition: opacity .3s ease-in-out">
        <div class="w-full max-w-md bg-white rounded-lg p-8 js-modal relative">
            <a href="#" title="Close" class="js-close text-grey-darker hover:text-black block absolute pin-r pin-t pr-4 pt-4 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" /></svg>
            </a>
            <h2 class="my-2 text-4xl font-light">Let's keep in touch</h2>
            <p class="text-grey-dark">Send me a message, or just leave your email and I'll reach out to you.</p>
            <form netlify class="mt-8" name="Message" method="POST">
                <div class="flex items-center mb-4">
                    <label class="text-grey-darker pr-4 w-1/4" for="input-name">Your Name</label>
                    <input type="text" id="input-name" class="w-3/4 rounded-lg bg-grey-lighter px-6 py-4 text-grey-darkest" placeholder="John Doe" required name="name">
                </div>
                <div class="flex items-center mb-4">
                    <label class="text-grey-darker pr-4 w-1/4" for="input-email">Your Email</label>
                    <input type="email" id="input-email" class="w-3/4 rounded-lg bg-grey-lighter px-6 py-4 text-grey-darkest" placeholder="john.doe@example.com" required name="email">
                </div>
                <div class="flex items-center border-b border-grey-lighter pb-6 mb-6">
                    <label class="text-grey-darker pr-4 w-1/4" for="input-email">Your Message</label>
                    <textarea id="input-message" name="message" class="w-3/4 rounded-lg bg-grey-lighter px-6 py-4 text-grey-darkest" placeholder="I want to see more pictures of your cat!" autocomplete="on" rows="4"></textarea>
                </div>
                <div class="block">
                    <button type="submit" class="no-underline bg-purple hover:bg-purple-dark text-white font-semibold text-center px-6 py-4 mx-auto block">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
