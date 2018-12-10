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
        <label class="text-grey-darker pr-4 w-1/4" for="input-message">Your Message</label>
        <textarea id="input-message" name="message" class="w-3/4 rounded-lg bg-grey-lighter px-6 py-4 text-grey-darkest" placeholder="I want to see more pictures of your cat!" autocomplete="on" rows="4"></textarea>
    </div>
    <div class="block">
        <button type="submit" class="no-underline bg-purple hover:bg-purple-dark text-white font-semibold text-center px-6 py-4 mx-auto block">Submit</button>
    </div>
</form>
