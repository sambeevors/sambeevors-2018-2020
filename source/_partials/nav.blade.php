<a href="#" class="menu burger bg-white shadow lg:bg-transparent lg:shadow-none{{ $color_dodge ? ' lg:color-dodge' : '' }} | js-burger js-nav-bar" aria-controls="navigation" role="button"><span><!-- --></span></a>
<nav id="navigation" class="nav flex justify-center items-center | js-nav">
	<ul class="m-0 p-0 text-center flex flex-col justify-center items-center">
		<li>
			<a href="/" class="my-8 py-2 mx-2 block text-white font-semibold tracking-megawide uppercase fancy-underline md:text-lg lg:text-xl">Home</a>
        </li>
        <li>
			<a href="/blog/" class="my-8 py-2 mx-2 block text-white font-semibold tracking-megawide uppercase fancy-underline md:text-lg lg:text-xl">Writings</a>
        </li>
        <li>
            <a href="https://github.com/sambeevors" rel="noopener" target="_blank" class="my-8 py-2 mx-2 flex text-white font-semibold tracking-megawide uppercase fancy-underline md:text-lg lg:text-xl" title="Work - via Github">
                Work
                <span class="text-purple-lighter -mt-1 ml-1">
                    @include('_partials.external', [
                        'width' => 18,
                        'height' => 18
                    ])
                </span>
            </a>
        </li>
        <li>
			<a href="#" class="my-8 py-2 mx-2 block text-white font-semibold tracking-megawide uppercase fancy-underline md:text-lg lg:text-xl | js-subscribe">Contact</a>
        </li>
	</ul>
</nav>
