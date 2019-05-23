<header class="flex mx-auto p-4 items-center justify-between md:justify-center bg-white shadow relative">
    <a href="/" class="relative w-16 md:w-24 h-16 md:h-24 md:mr-6 flex items-center justify-center">
        <img src="/img/mini-me.jpg" alt="Me!" class="object-fit rounded-full block">
    </a>
    <a href="/" class="block leading-none text-center md:text-left max-w-1/2 no-underline">
        @unless (isset($title) && $title ===  false)
            <h1 class="text-2xl md:text-3xl font-bold mb-1 text-grey-darkest">{{ $title ?? $page->title ?? 'Sam Beevors' }}</h1>
        @else
            <p class="text-2xl md:text-3xl font-bold mb-1 text-grey-darkest">Sam Beevors</p>
        @endunless
        <p class="text-grey-dark text-xs md:text-sm">{{ $tagline ?? $page->tagline ?? 'Performance-minded Front End Developer' }}</p>
    </a>
    <a href="#" class="menu burger w-16 | js-burger" aria-controls="navigation" role="button" title="Menu"><span><!-- --></span></a>
</header>

@include('_partials.nav')
