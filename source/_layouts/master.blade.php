<!DOCTYPE html>
<html lang="en">
    <head>
        <head>
            <title>
                {{-- http://stackoverflow.com/questions/21804973/laravel-4-how-to-apply-title-and-meta-information-to-each-page-with-blade-master --}}
                @yield('title')
            </title>
            <meta charset="utf-8">
            {{-- https://css-tricks.com/snippets/html/responsive-meta-tag/ --}}
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="x-ua-compatible" content="ie=edge">

            <link rel="stylesheet" href="/css/main.css">

            @stack('head')

            @include('_partials.favicon')

            <noscript>
                <style>
                    .lqip {
                        display: none !important;
                    }
                </style>
            </noscript>
            <style>
                .lazyload {
                    visibility: hidden;
                }
            </style>

        </head>
    </head>
    <body class="font-sans leading-normal bg-grey-lighter">

        @include('_partials.header')

        @yield('body')

        @include('_partials.footer')

        @include('_partials.contact-modal')

        @stack('scripts')

        <script type="text/javascript" src="/js/main.js"></script>

        <script>
        // Check that service workers are registered
        if ('serviceWorker' in navigator) {
            // Use the window load event to keep the page load performant
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js');
            });
        }
        </script>

    </body>
</html>
