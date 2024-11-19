<x-app-layout>
    <!-- Center the entire content block -->
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full sm:max-w-xl mt-6 px-8 py-10 bg-white dark:bg-gray-800 shadow-2xl rounded-lg overflow-hidden sm:rounded-lg relative z-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white mb-6">Create New Blog</h2>

                <!-- Blog Creation Form -->
                <form method="POST" action="{{ route('store-blog') }}">
                    @csrf
                    <!-- Title Field -->
                    <div class="mb-6">
                        <label for="title" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Title</label>
                        <input type="text" name="title" id="title" class="shadow-lg appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-100 dark:focus:ring-indigo-300 dark:focus:border-indigo-300" placeholder="Enter blog title" required>
                    </div>

                    <!-- Content Field -->
                    <div class="mb-6">
                        <label for="content" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Content</label>
                        <textarea name="content" id="content" class="shadow-lg appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-100 dark:focus:ring-indigo-300 dark:focus:border-indigo-300" placeholder="Write your blog content here..." rows="6" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center">
                        <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300 ease-in-out">
                            Create Blog
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
