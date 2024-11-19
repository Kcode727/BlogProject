<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Your Blogs</h2>
                </div>
                <div class="relative flex items-center justify-center w-full overflow-hidden">
                    <!-- Left Arrow -->
                    <button class="absolute left-4 p-2 bg-gray-200 rounded-full text-xl text-gray-700 hover:bg-gray-300 focus:outline-none" onclick="scrollLeft()">
                        &#8592;
                    </button>

                    <!-- Scrollable Container -->
                    <div class="scroll-container flex gap-4 overflow-x-scroll px-4 py-2 scrollbar-hidden">
                        <!-- Item 1 -->
                        <div class="item w-48 h-48 bg-gray-200 text-gray-800 flex items-center justify-center rounded-xl text-xl shadow-md">
                            Item 1
                        </div>
                        <!-- Item 2 -->
                        <div class="item w-48 h-48 bg-gray-200 text-gray-800 flex items-center justify-center rounded-xl text-xl shadow-md">
                            Item 2
                        </div>
                        <!-- Item 3 -->
                        <div class="item w-48 h-48 bg-gray-200 text-gray-800 flex items-center justify-center rounded-xl text-xl shadow-md">
                            Item 3
                        </div>
                        <!-- Item 4 -->
                        <div class="item w-48 h-48 bg-gray-200 text-gray-800 flex items-center justify-center rounded-xl text-xl shadow-md">
                            Item 4
                        </div>
                        <!-- Item 5 -->
                        <div class="item w-48 h-48 bg-gray-200 text-gray-800 flex items-center justify-center rounded-xl text-xl shadow-md">
                            Item 5
                        </div>
                    </div>

                    <!-- Right Arrow -->
                    <button class="absolute right-4 p-2 bg-gray-200 rounded-full text-xl text-gray-700 hover:bg-gray-300 focus:outline-none" onclick="scrollRight()">
                        &#8594;
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
