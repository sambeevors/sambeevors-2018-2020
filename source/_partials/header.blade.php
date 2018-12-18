<header class="text-center mx-auto p-4 mt-12 lg:mt-0">
    <a href="/" class="text-grey-darkest no-underline">
        <h1 class="text-5xl font-light">{{ $page->title ?? 'Sam Beevors' }}</h1>
    </a>
    <p class="text-grey-dark">{{ $page->tagline ?? 'Creator of things' }}</p>
</header>

@include('_partials.nav')
