@php
    error_reporting(E_ALL & ~E_NOTICE);
    date_default_timezone_set('Europe/London');

    /*
        Essentially, this finds all your compiled assets, and adds a content
        generated hash to them, spitting them back out in the template.

        If you want to stop a script / stylesheet from being loaded on every
        page, add it's name to the blacklist.
    */

    $dirs = ['css', 'js'];
    $hashed_files = [];
    $count = 0;

    if (!function_exists('strposa')) {
        // Fuction to run strpos on an array
        function strposa($haystack, $needle, $offset = 0) {
            if (!is_array($needle)) $needle = array($needle);
            foreach($needle as $query) {
                if (strpos($haystack, $query, $offset) !== false) return true;
            }
            return false;
        }
    }

    foreach ($dirs as $key => $dir) {
        $dir_files = scandir(getcwd() . "/source/$dir");
        $files_found = [];

        foreach ($dir_files as $key => $dir_file) {
            $search = ['.css', '.js'];
            $blacklist = ['.map'];

            if (strposa($dir_file, $search) !== false) {
                if (strposa($dir_file, $blacklist) === false) {
                    $hash = md5_file(getcwd() . "/source/$dir/$dir_file");
                    $files_found[] = "$dir/$dir_file?$hash";
                }
            }
        }

        $hashed_files[$count] = $files_found;
        $count++;
    }

@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <head>
            <title>{{ $page->title }}</title>
            <meta charset="utf-8">
            {{-- https://css-tricks.com/snippets/html/responsive-meta-tag/ --}}
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <meta http-equiv="x-ua-compatible" content="ie=edge">

            @foreach ($hashed_files[0] as $key => $file)

                <link rel="stylesheet" href="/{{ $file }}">

            @endforeach

            @stack('head')

            {{-- http://realfavicongenerator.net/ --}}
            <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
            <link rel="manifest" href="/favicon/site.webmanifest">
            <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
            <link rel="shortcut icon" href="/favicon/favicon.ico">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-config" content="/favicon/browserconfig.xml">
            <meta name="theme-color" content="#ffffff">

            {{-- https://developers.facebook.com/docs/opengraph/getting-started --}}
            <meta property="og:url" content="{{ $page->getUrl() }}" />
            <meta property="og:title" content="{{ $page->title }}" />
            <meta property="og:description" content="{!! $page->excerpt(200) !!}" />
            <meta property="og:image" content="{{ $page->featured_image }}" />
            <meta property="og:locale" content="en_UK" />

            <link rel="canonical" href="{{ $page->getUrl() }}">
            <meta name="description" content="{!! $page->excerpt(200) !!}">
            <meta name="keywords" content="@foreach ($page->tags as $tag){{ $tag }},@endforeach">

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

        @include('_partials.nav', [
            'color_dodge' => true
        ])

        <div class="js-nav-bar lg:hidden"><!-- --></div>

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

            <footer class="leading-normal mt-6 mt-10 pt-10 text-center text-grey-darker border-t border-grey-light">
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

        @foreach ($hashed_files[1] as $key => $file)

            <script type="text/javascript" src="/{{ $file }}"></script>

        @endforeach

    </body>
</html>
