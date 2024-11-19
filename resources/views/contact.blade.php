<x-layout>
    <x-slot:title>{{ __('About') }}</x-slot>
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Contact Info Section (Smaller) -->
            <div class="md:col-span-1 max-w-sm mx-auto md:mx-0">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h2>
                <div class="space-y-4">
                    <div>
                        <p class="text-lg text-gray-700">
                            <span class="font-semibold text-gray-500">Location:</span><br>
                            Ramdeobaba University,<br> Gittikhadan Rd, BUPESHNAGAR,Nagpur, Maharashtra 440013
                        </p><br>
                        <p class="text-lg text-gray-700">
                            <span class="font-semibold text-gray-500">To know more:</span><br>
                            <a href="https://www.rbunagpur.in" class="text-indigo-600 hover:underline">rbunagpur.in</a>
                        </p><br>
                        <p class="text-lg text-gray-700">
                            <span class="font-semibold text-gray-500">Email:</span><br>
                            <a href="mailto:info@Untree.co" class="text-indigo-600 hover:underline">info@Untree.co</a>
                        </p><br>
                        <p class="text-lg text-gray-700">
                            <span class="font-semibold text-gray-500">Call:</span><br>
                            <a href="tel:+112345548855" class="text-indigo-600 hover:underline">+1 1234 55488 55</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section (Larger) -->
            <div class="md:col-span-2">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Contact Us</h1>
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- Name and Email Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-3 px-4 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-3 px-4 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                    </div>

                    <!-- Subject Field -->
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <input type="text" name="subject" id="subject" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-3 px-4 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <!-- Message Field -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-3 px-4 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full md:w-auto mt-6 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
