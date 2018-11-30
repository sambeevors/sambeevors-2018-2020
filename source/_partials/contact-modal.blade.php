<div class="flex justify-center fixed pin bg-black-70 z-50 items-center opacity-0 pointer-events-none js-modal-container p-4" style="transition: opacity .3s ease-in-out">
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
