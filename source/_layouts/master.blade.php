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
            <title>
                {{-- http://stackoverflow.com/questions/21804973/laravel-4-how-to-apply-title-and-meta-information-to-each-page-with-blade-master --}}
                @yield('title')
            </title>
            <meta charset="utf-8">
            {{-- https://css-tricks.com/snippets/html/responsive-meta-tag/ --}}
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <meta http-equiv="x-ua-compatible" content="ie=edge">

            @foreach ($hashed_files[0] as $key => $file)

                <link rel="stylesheet" href="/{{ $file }}">

            @endforeach

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

        @foreach ($hashed_files[1] as $key => $file)

            <script type="text/javascript" src="/{{ $file }}"></script>

        @endforeach

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
