@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
    <noscript>
        <style>
            .lqip {
                display: none !important;
            }
        </style>
    </noscript>

@endpush

@section('title', 'Example Page')

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')

    <div class="flex justify-center fixed pin bg-black-70 z-50 items-center opacity-0 pointer-events-none js-modal-container" style="transition: opacity .3s ease-in-out;">
        <div class="w-full max-w-md bg-white rounded-lg p-8 js-modal relative">
            <a href="#" class="js-close text-grey-darker hover:text-black block absolute pin-r pin-t pr-4 pt-4 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
            </a>
            <h2 class="my-2 text-4xl">Stay connected for updates</h2>
            <p class="text-grey-dark">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <form netlify class="mt-8" name="Subscribe" method="POST">
                <div class="flex items-center mb-4">
                    <label class="text-grey-darker pr-4 w-1/4" for="input-name">Your Name</label>
                    <input type="text" id="input-name" class="w-3/4 rounded-full bg-grey-lighter px-6 py-4 text-grey-darkest" placeholder="John Doe" required name="name">
                </div>
                <div class="flex items-center border-b border-grey-lighter pb-6 mb-6">
                    <label class="text-grey-darker pr-4 w-1/4" for="input-email">Your Email</label>
                    <input type="email" id="input-email" class="w-3/4 rounded-full bg-grey-lighter px-6 py-4 text-grey-darkest" placeholder="john.doe@example.com" required name="email">
                </div>
                <div class="block">
                    <button type="submit" class="no-underline bg-green hover:bg-green-dark text-white font-serif uppercase tracking-wide font-semibold text-center px-6 py-4 text-sm mx-auto block">Submit</button>
                </div>
            </form>
        </div>
    </div>

    @include('_partials.lazyload-image', [
        'src' => 'img/large-image-1.jpg',
        'class' => 'object-fit-cover'
    ])
    
    <div class="container mx-auto leading-normal">
        <div class="flex p-4 justify-center">
            <div class="flex-1 max-w-lg">
                <h2 class="text-3xl lg:text-4xl mb-6">Urbanout: Why people are moving away from busy cities</h2>

                <p class="text-lg lg:text-xl mb-4 text-grey-dark">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis id rerum, iste laboriosam fugiat beatae doloremque veniam! Totam tempora officiis, eius error accusantium doloribus quos deserunt dolorem, illum facilis atque.
                </p>

                @include('_partials.placeholder-text', ['paragraphs' => 8])

                @include('_partials.lazyload-image', [
                    'src' => 'img/large-image-2.jpg',
                    'class' => 'object-fit-cover'
                ])

                @include('_partials.placeholder-text', ['paragraphs' => 5])

                @include('_partials.lazyload-image', [
                    'src' => 'img/large-image-3.jpg',
                    'class' => 'object-fit-cover'
                ])

                @include('_partials.placeholder-text', ['paragraphs' => 6])

                <hr class="border-t border-grey-light my-8">

                <div class="my-6">
                    <p class="text-center italic text-sm text-grey mb-4">If you enjoyed this article and want to be notified in the future...</p>
                    <p class="text-center"><a href="#" class="no-underline inline-block bg-green hover:bg-green-dark text-white font-serif uppercase tracking-wide font-semibold text-center px-6 py-4 text-sm | js-subscribe">Subscribe</a></p>
                </div>

            </div>
        </div>
    </div>

@endsection
