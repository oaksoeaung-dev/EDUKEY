<footer class="pt-20 text-sm bg-gray-50 px-5">
    <div class="container mx-auto grid lg:grid-cols-4 lg:gap-20 text-primary grid-cols-1 gap-8 text-center lg:text-left">
        <div class="">
            <a class="text-primary flex w-full gap-5 justify-center lg:justify-start">
                <i class="fi fi-sr-student-alt text-4xl"></i>
                <span class="text-2xl font-semibold">EDUKEY</span>
            </a>
            <p class="mx-auto lg:mb-8 my-4 font-semibold">Comes Together to Learn, Grow, and Thrive</p>
        </div>

        <div class="">
            <h4 class="mb-5 text-2xl font-semibold">Permalinks</h4>
            <ul class="">
                <li class="mb-3"><a href="{{ route("home") }}" class="hover:underline">Home</a></li>
                <li class="mb-3"><a href=""{{ route("about") }}" class="hover:underline">About</a></li>
                <li class="mb-3"><a href=""{{ route("courses") }}" class="hover:underline">Courses</a></li>
                <li class="mb-3"><a href=""{{ route("contact") }}" class="hover:underline">Contact</a></li>
            </ul>
        </div>

        <div class="">
            <h4 class="mb-5 text-2xl font-semibold">Contact Us</h4>
            <div class="space-y-5">
                <p class="flex items-center gap-2 justify-center lg:justify-start">
                    <i class="fi fi-sr-mobile-button"></i>
                    <span>+959 755 432 123</span>
                </p>
                <p class="flex items-center gap-3 justify-center lg:justify-start">
                    <i class="fi fi-sr-envelope"></i>
                    <span>info@edukey.edu.mm</span>
                </p>
            </div>

            <ul class="mt-8 flex gap-4 text-xl text-color1 justify-center lg:justify-start">
                <li>
                    <a href="#" target="_blank" class="flex h-12 w-12 items-center justify-center rounded-full border border-transparent bg-teal-100 text-sm transition-all duration-300 hover:border-white hover:bg-transparent hover:text-primary"><i class="fi fi-brands-facebook"></i></a>
                </li>
                <li>
                    <a href="#" target="_blank" class="flex h-12 w-12 items-center justify-center rounded-full border border-transparent bg-teal-100 text-sm transition-all duration-300 hover:border-white hover:bg-transparent hover:text-primary"><i class="fi fi-brands-tik-tok"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="mt-16 border-t border-t-teal-100 py-5 text-center text-primary">
        <small>Copyright © EDUKEY</small>
    </div>
</footer>