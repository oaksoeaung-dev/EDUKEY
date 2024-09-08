<nav class="fixed inset-x-0 top-0 z-40 flex h-20 items-center bg-primary px-5 lg:bg-white">
    <div class="container mx-auto flex items-center">
        <a class="flex w-full gap-5 text-white lg:text-primary">
            <i class="fi fi-sr-student-alt text-4xl"></i>
            <span class="text-2xl">EDUKEY</span>
        </a>
        <input type="checkbox" id="sidebar-active" class="peer hidden" />
        <label for="sidebar-active" class="open-sidebar-button ml-auto block p-5 text-zinc-50 lg:hidden">
            <i class="fi fi-sr-apps text-xl"></i>
        </label>

        <label id="overlay" for="sidebar-active" class="peer-checked:fixed peer-checked:left-0 peer-checked:top-0 peer-checked:z-20 peer-checked:h-full peer-checked:w-full"></label>
        <div class="fixed -right-full top-0 z-30 flex h-full w-72 flex-col items-start bg-primary shadow-2xl transition-all duration-1000 ease-out peer-checked:right-0 lg:static lg:w-full lg:flex-row lg:items-center lg:justify-end lg:bg-white lg:shadow-none">
            <label for="sidebar-active" class="close-sidebar-button block p-5 text-zinc-50 lg:hidden">
                <i class="fi fi-sr-circle-xmark text-xl"></i>
            </label>

            <ul class="flex flex-col gap-10 p-5 lg:flex-row">
                <li class="">
                    <x-nav-link :active="request()->routeIs('home')" :href="route('home')">Home</x-nav-link>
                </li>
                <li>
                    <x-nav-link :active="request()->routeIs('about')" :href="route('about')">About</x-nav-link>
                </li>
                <li>
                    <x-nav-link :active="request()->routeIs('courses')" :href="route('courses')">Courses</x-nav-link>
                </li>
                <li>
                    <x-nav-link :active="request()->routeIs('news')" :href="route('news')">News</x-nav-link>
                </li>
                <li>
                    <x-nav-link :active="request()->routeIs('contact')" :href="route('contact')">Contact</x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
