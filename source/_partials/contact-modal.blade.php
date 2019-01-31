<div class="flex justify-center fixed pin bg-purple-95 z-100 items-center opacity-0 pointer-events-none js-modal-container p-4" style="transition: opacity .3s ease-in-out">
        <div class="w-full max-w-md bg-white rounded-t border-t-8 border-purple-lighter p-8 js-modal relative">
            <a href="#" title="Close" class="js-close text-grey-darker hover:text-black block absolute pin-r pin-t pr-4 pt-4 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" /></svg>
            </a>
            <h2 class="my-2 text-3xl lg:text-4xl">Let's keep in touch</h2>
            <p>Send me a message, or just leave your email and I'll reach out to you.</p>
            @include('_partials.contact-form')
        </div>
    </div>
