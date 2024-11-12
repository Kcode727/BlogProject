<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <nav class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="#" class="text-2xl font-bold">Blogy</a>

            <ul class="flex space-x-4">
                <li><a href="/" class="hover:text-gray-400">Home</a></li>
                
                <li class="relative group">
                    <a href="#" class="hover:text-gray-400">Explore blogs</a>
                    <ul class="absolute left-0 hidden bg-gray-800 text-white group-hover:block">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Political</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Cultural</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Food blogs</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Social</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Educational</a></li>
                    </ul>
                </li>
                <li><a href="#" class="hover:text-gray-400">Create blogs</a></li>
                <li><a href="/about" class="hover:text-gray-400">About us</a></li>
                <li><a href="#" class="hover:text-gray-400">Contact us</a></li>
            </ul>

            <div>
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-white transition hover:text-gray-400 dark:text-black dark:hover:text-gray-800">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white transition hover:text-gray-400 dark:text-black dark:hover:text-gray-800">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white transition hover:text-gray-400 dark:text-black dark:hover:text-gray-800">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </nav>
</div>
