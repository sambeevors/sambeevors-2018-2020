<!DOCTYPE html>
<html lang="en">
    <head>
        <head>
            <title>{{ $page->title }}</title>
            <meta charset="utf-8">
            {{-- https://css-tricks.com/snippets/html/responsive-meta-tag/ --}}
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <meta http-equiv="x-ua-compatible" content="ie=edge">

            <link rel="stylesheet" href="/css/main.css">

            @stack('head')

            @include('_partials.favicon')

            {{-- https://developers.facebook.com/docs/opengraph/getting-started --}}
            <meta property="og:url" content="{{ $page->getUrl() }}" />
            <meta property="og:title" content="{{ $page->title }}" />
            <meta property="og:description" content="{!! $page->excerpt(200) !!}" />
            <meta property="og:image" content="{{ $page->featured_image }}" />
            <meta property="og:locale" content="en_UK" />

            <link rel="canonical" href="{{ $page->getUrl() }}">
            <meta name="description" content="{!! $page->excerpt(200) !!}">
            <meta name="keywords" content="@foreach ($page->tags as $tag){{ $tag }},@endforeach">

            <script>
                var disqus_config = function () {
                    this.page.url = '{{ $page->getUrl() }}'; 
                    this.page.identifier = '{{ $page->getFilename() }}';
                }
            </script>

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
    <body class="font-sans leading-normal bg-white">

        @include('_partials.header', [
            'title' => false,
            'tagline' => 'Here\'s an article I wrote on ' . date('F j, Y', $page->date)
        ])

        @if ($page->featured_image)
            @include('_partials.lazyload-image', [
                'src' => $page->featured_image,
                'class' => 'object-fit-cover text-transparent | js-featured-image',
                'alt' => $page->title
            ])
        @endif

        <article class="max-w-lg mx-auto px-4">

            <header class="pt-2 pb-4 lg:py-14">
                <h1 class="text-3xl lg:text-5xl leading-tight mb-4">{{ $page->title }}</h1>
                <p class="text-xs lg:text-base uppercase text-grey-dark tracking-wide">{{ date('F j, Y', $page->date) }}</p>
            </header>

            <main class="markdown-body">
                @yield('content')
            </main>

            <div class="flex justify-between items-center mt-6">
                <a href="/blog" class="text-3xl no-underline inline-flex items-center text-purple">
                    &#8592; <span class="pl-4 uppercase text-base font-normal text-grey-dark tracking-wide">back <span class="sr-only">to index</span></span>
                </a>
                <p class="uppercase text-xs text-grey tracking-wide text-right hidden md:block tags">Keywords:
                    @foreach ($page->tags as $tag)
                        <span class="mx-1 text-xs text-purple uppercase tracking-wide">{{ $tag }}</span>
                    @endforeach
                </p>
            </div>

            <div class="mt-12 shadow overflow-hidden border-t-8 border-purple rounded-b p-8">
                <div class="js-disqus"></div>
            </div>

            <footer class="leading-normal mt-6 pt-10 mt-10 text-center text-grey-darker">
                <figure class="block w-16 h-16 rounded-full mx-auto overflow-hidden mb-3">
                    @include('_partials.lazyload-image', [
                        'src' => '/img/mini-me.jpg',
                        'class' => 'object-fit-cover text-transparent',
                        'alt' => 'Sam Beevors'
                    ])
                </figure>
                <div class="max-w-xs lg:max-w-sm mx-auto px-10">
                    <p class="mb-2 text-grey-darkest">Article by <a class="text-grey-dark font-semibold" href="/">Sam Beevors</a></p>
                    <p class="text-xs">If you want to reach out to me you can <a class="text-grey-dark font-semibold | js-subscribe" href="javascript:;">use this form</a> to do so.</p>
                </div>
            </footer>
                
        </article>

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
