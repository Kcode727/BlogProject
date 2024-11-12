<x-layout>
    <x-slot:title>{{ __('Home') }}</x-slot>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 my-4">
    <div class="bg-gray-200 rounded-lg shadow-md p-4">
        <img src="{{ asset('images/image1.jpg') }}" alt="Image 1" class="w-full h-48 object-cover rounded-t-lg">
        <p class="text-sm text-gray-500">Apr 14th, 2022</p>
        <h2 class="text-lg font-bold">AI can now kill those annoying cookie pop-ups</h2>
    </div>

    <div class="bg-gray-200 rounded-lg shadow-md p-4">
        <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="w-full h-48 object-cover rounded-t-lg">
        <p class="text-sm text-gray-500">Apr 14th, 2022</p>
        <h2 class="text-lg font-bold">Startup vs corporate: What job suits you best?</h2>
    </div>

    <div class="bg-gray-200 rounded-lg shadow-md p-4">
        <img src="{{ asset('images/image3.jpg') }}" alt="Image 3" class="w-full h-48 object-cover rounded-t-lg">
        <p class="text-sm text-gray-500">Apr 14th, 2022</p>
        <h2 class="text-lg font-bold">Don't assume your user data in the</h2>
    </div>
</div>
</x-layout>
