<x-layout>
    <x-slot:title>{{ __('About') }}</x-slot>
    <!-- LinkedIn button styling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <section class="bg-hero-pattern bg-cover bg-center bg-no-repeat text-white py-20">
        <h2 class="text-5xl font-bold text-center">About Us</h2>
    </section>

    <div class="container mx-auto px-4 flex">
        <div class="w-1/2">
            <img src="{{ asset('img1.jfif') }}" alt="Creative Resources" class="w-auto h-auto object-cover">
        </div>
        <div class="w-1/2 px-8 py-32">
            <h2 class="text-3xl font-bold mb-4">Resources for Makers and Creatives</h2>
            <br>
            <p class="shortened-paragraph">Unleash your inner creator... </p>
            <p class="full-paragraph" style="display: none;">Unleash your inner creator with our comprehensive resource hub. Whether you're a budding artist, a tech-savvy innovator, or a culinary enthusiast, you'll find the tools, tutorials, and inspiration to bring your ideas to life. From in-depth coding tutorials to mouth-watering recipes, and from cultural insights to travel tips, our platform offers a diverse range of resources to fuel your passions. Connect with a global community of like-minded individuals, share your work, and collaborate on exciting projects. Let your imagination soar and transform your passions into reality.</p>
            <br>
            <button class="read-more-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" aria-expanded="false" aria-controls="full-paragraph">Read More</button>
        </div>
    </div>

    <div class="container mx-auto px-4 flex">
        <div class="w-1/2 px-8 py-10">
            <h2 class="text-3xl font-bold mb-4">Start Your Blogging Journey Today!</h2>
            <br>
            <p class="shortened-paragraph">Discover the power of blogging...</p>
            <p class="full-paragraph" style="display: none;">Discover the power of blogging and share your unique voice with the world. Whether you're a seasoned writer or a budding storyteller, our platform provides the tools and resources to help you create a successful blog. From choosing a niche and crafting compelling content to building a loyal audience and monetizing your blog, we've got you covered. Start your blogging journey today and unlock a world of opportunities.</p>
            <br>
            <button class="read-more-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" aria-expanded="false" aria-controls="full-paragraph">Read More</button>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('img2.jfif') }}" alt="Blogging Journey" class="w-full h-full object-cover">
        </div>
    </div>

    <div class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex">
            <div class="w-1/3 px-4">
                <h1 class="font-bold">Building Your Blog</h1>
                <p>Start your blogging journey and share your unique voice with the world.</p>
            </div>
            <div class="w-1/3 px-4">
                <h1 class="font-bold">Resources and Insights</h1>
                <p>Find inspiration, tutorials, and connect with a community of like-minded individuals.</p>
            </div>
            <div class="w-1/3 px-4">
                <h1 class="font-bold">Blog Just for You</h1>
                <p>Create a personal space online and share your passions with the world.</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-16 bgwhite">
    <h2 class="text-3xl font-bold text-center mb-10">Meet Our Team</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="p-6">
            <img src="{{ asset('img1.jfif') }}" alt="Photo of Member 1" class="rounded-full mx-auto mb-4">
            <h3 class="text-xl font-bold text-center">Member 1</h3>
            <p class="text-center text-gray-500">Description</p>
            <div class="flex justify-center"><a href="#" class="linkedin-button bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-full inline-flex items-center justify-center mx-auto mt-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md">
                <i class="fab fa-linkedin mr-2"></i> Connect on LinkedIn
            </a></div>  
        </div>
        <div class="p-6">
            <img src="{{ asset('img1.jfif') }}" alt="Photo of Member 2" class="rounded-full mx-auto mb-4">
            <h3 class="text-xl font-bold text-center">Member 2</h3>
            <p class="text-center text-gray-500">Description</p>
            <div class="flex justify-center"><a href="#" class="linkedin-button bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-full inline-flex items-center justify-center mx-auto mt-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md">
                <i class="fab fa-linkedin mr-2"></i> Connect on LinkedIn
            </a></div>          
        </div>
        <div class="p-6">
            <img src="{{ asset('img1.jfif') }}" alt="Photo of Member 3" class="rounded-full mx-auto mb-4">
            <h3 class="text-xl font-bold text-center">Member 3</h3>
            <p class="text-center text-gray-500">Description</p>
            <div class="flex justify-center"><a href="#" class="linkedin-button bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-full inline-flex items-center justify-center mx-auto mt-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md">
                <i class="fab fa-linkedin mr-2"></i> Connect on LinkedIn
            </a></div>         
        </div>
        <div class="p-6">
            <img src="{{ asset('img1.jfif') }}" alt="Photo of Member 4" class="rounded-full mx-auto mb-4">
            <h3 class="text-xl font-bold text-center">Member 4</h3>
            <p class="text-center text-gray-500">Description</p>
            <div class="flex justify-center"><a href="#" class="linkedin-button bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-full inline-flex items-center justify-center mx-auto mt-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md">
                <i class="fab fa-linkedin mr-2"></i> Connect on LinkedIn
            </a></div>     
        </div>
        <div class="p-6">
            <img src="{{ asset('img1.jfif') }}" alt="Photo of Member 5" class="rounded-full mx-auto mb-4">
            <h3 class="text-xl font-bold text-center">Member 5</h3>
            <p class="text-center text-gray-500">Description</p>
            <div class="flex justify-center"><a href="#" class="linkedin-button bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-full inline-flex items-center justify-center mx-auto mt-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md">
                <i class="fab fa-linkedin mr-2"></i> Connect on LinkedIn
            </a></div>       
        </div>
    </div>
</div>

</x-layout>

<script>
    const fullParagraphs = document.querySelectorAll('.full-paragraph');
    const shortenedParagraphs = document.querySelectorAll('.shortened-paragraph');
    const readMoreButtons = document.querySelectorAll('.read-more-btn');

    readMoreButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            const isExpanded = fullParagraphs[index].style.display === 'block';
            fullParagraphs[index].style.display = isExpanded ? 'none' : 'block';
            shortenedParagraphs[index].style.display = isExpanded ? 'block' : 'none';
            button.textContent = isExpanded ? 'Read More' : 'Read Less';
            button.setAttribute('aria-expanded', !isExpanded);
        });
    });
</script>
