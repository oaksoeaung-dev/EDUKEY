@extends("layouts.main")

@section("contents")
    <header class="container mx-auto pt-32">
        <div class="grid overflow-hidden px-0 lg:px-20">
            {{-- Header Image --}}
            <div style="grid-area: 1/1/2/2">
                <img src="{{ asset("images/home/header.jpg") }}" alt="header" class="ml-auto flex w-full max-w-[900px] rounded-3xl object-contain" />
            </div>

            <div style="grid-area: 1/1/2/2" class="flex items-center">
                <div class="z-10 max-w-[700px] rounded-none bg-white/50 px-4 py-16 backdrop-blur-sm lg:rounded-xl lg:backdrop-blur-md">
                    {{-- heading --}}
                    <h1 class="mb-4 text-center text-5xl font-semibold leading-snug text-primary lg:text-left lg:text-[4rem]">
                        {{ $informations->where("section",1)->where("position","heading")->first()->data }}
                    </h1>

                    {{-- introduction --}}
                    <p class="text-center text-lg text-gray-700 lg:text-left">
                        {{ $informations->where("section",1)->where("position","introduction")->first()->data }}
                    </p>
                </div>
            </div>
        </div>
    </header>

    {{-- Logo --}}
    <section class="container mx-auto py-20 px-5">
        <h1 class="my-10 text-center text-4xl font-semibold text-primary">Powered By Microsoft</h1>
        <div class="scroller overflow-hidden">
            <!-- tag-list,scroller__inner -->
            <ul class="scroller__inner flex w-max animate-slide flex-nowrap gap-16 py-4 lg:gap-32">
                @php
                    $logos = ["excel", "office", "onedrive", "onenote", "powerpoint", "sharepoint", "team", "word"];
                @endphp

                @foreach ($logos as $logo)
                    <li class=""><img src="{{ asset("images/home/" . $logo . ".png") }}" class="h-20" /></li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- About Us --}}
    <section class="container mx-auto py-20 px-5">
        <div class="grid gap-10">
            <div class="flex flex-col items-center gap-10 lg:flex-row">
                <div class="w-full lg:w-[70%]">
                    <h1 class="mb-3 text-center text-4xl font-semibold text-primary lg:text-left">About Us</h1>
                    <p class="text-center text-xl text-gray-700 lg:text-left">We are more than just a school—we are a global community dedicated to fostering academic excellence, cultural understanding, and personal growth.</p>
                </div>
                <div class="flex w-full items-center justify-center lg:w-[30%]">
                    <a class="rounded-lg bg-primary px-6 py-3 text-white" href="#">Learn More</a>
                </div>
            </div>

            <div class="grid gap-5 lg:grid-cols-2">
                <div class="grid grid-cols-2 gap-5 place-self-start px-5 lg:gap-12 lg:px-0">
                    <div class="flex flex-col gap-5 rounded-lg bg-gray-100 p-5 text-primary shadow-sm">
                        <i class="fi fi-rr-world self-start text-4xl"></i>
                        <p class="text-2xl font-semibold">Global Curriculum</p>
                    </div>

                    <div class="flex flex-col gap-5 rounded-lg bg-gray-100 p-5 text-primary shadow-sm">
                        <i class="fi fi-rr-computer-speaker self-start text-4xl"></i>
                        <p class="text-2xl font-semibold">Technology-Enhanced Learning</p>
                    </div>

                    <div class="flex flex-col gap-5 rounded-lg bg-gray-100 p-5 text-primary shadow-sm">
                        <i class="fi fi-rr-method self-start text-4xl"></i>
                        <p class="text-2xl font-semibold">Innovative Teaching Methods</p>
                    </div>

                    <div class="flex flex-col gap-5 rounded-lg bg-gray-100 p-5 text-primary shadow-sm">
                        <i class="fi fi-rr-chalkboard-user self-start text-4xl"></i>
                        <p class="text-2xl font-semibold">Expertise and Passion</p>
                    </div>
                </div>
                <div class="grid max-w-full grid-cols-2 gap-5 px-5 lg:px-0">
                    <div class="grid gap-5">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset("images/home/girl.jpg") }}" alt="" />
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset("images/home/classroom.jpg") }}" alt="" />
                        </div>
                    </div>
                    <div class="grid gap-5">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset("images/home/library.jpg") }}" alt="" />
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset("images/home/students-book.jpg") }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Popular Classes --}}
    <section class="container mx-auto py-20 px-5">
        <h1 class="mb-3 text-center text-4xl font-semibold text-primary lg:text-left">Popular Classes</h1>
        <p class="text-center text-xl text-gray-700 lg:text-left">Our classes are designed to provide a dynamic, engaging, and globally focused education that meets the needs of every student. From early years to graduation, we offer a comprehensive curriculum that challenges and inspires students at every stage of their academic journey.</p>

        <div class="my-20 grid place-items-center gap-3 lg:grid-cols-4">
            @php
                $classes = ["GED", "Pre-GED", "IGCSE", "Pre-IGCSE"];
            @endphp

            @foreach ($classes as $class)
                <div class="w-full max-w-80 rounded-2xl bg-gray-50 p-3 text-[#697e91]">
                    <div class="relative items-center rounded-xl bg-teal-50 p-5 pt-10">
                        <span class="absolute right-0 top-0 flex items-center rounded-bl-[99em] rounded-tl-[99em] bg-teal-200 px-3 py-2 text-lg font-semibold text-teal-800">
                            <span>
                                100000 KS
                                <small class="text-teal-600">/ m</small>
                            </span>
                        </span>
                        <p class="title my-3 text-xl font-semibold text-gray-600">{{ $class }}</p>
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3">
                                <span class="icon rounded-full bg-sky-100 p-3 text-sky-800">
                                    <i class="fi fi-sr-users-alt text-sm"></i>
                                </span>
                                <span>
                                    <strong>20</strong>
                                    Students
                                </span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="icon rounded-full bg-sky-100 p-3 text-sky-800">
                                    <i class="fi fi-sr-clock text-sm"></i>
                                </span>
                                <span>
                                    <strong>8:30 AM</strong>
                                    -
                                    <strong>4:00 PM</strong>
                                </span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="icon rounded-full bg-sky-100 p-3 text-sky-800">
                                    <i class="fi fi-sr-calendar text-sm"></i>
                                </span>
                                <span>
                                    <strong>Mon</strong>
                                    -
                                    <strong>Fri</strong>
                                </span>
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="icon rounded-full bg-sky-100 p-3 text-sky-800">
                                    <i class="fi fi-ss-calendar-clock text-sm"></i>
                                </span>
                                <span>
                                    <strong>4</strong>
                                    Months
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex items-center justify-center">
            <a class="rounded-lg bg-primary px-6 py-3 text-white" href="#">View More</a>
        </div>
    </section>

    {{-- Student Feed Back --}}
    <section class="container mx-auto py-20 px-5">
        <h1 class="mb-3 text-center text-4xl font-semibold text-primary">What Our Happy Students Say</h1>
        <p class="text-center text-xl text-gray-700">We empower our students to take an active role in shaping their education.</p>

        <div class="my-10">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @for ($i = 0; $i < 5; $i++)
                        <div class="swiper-slide">
                            <div class="w-full max-w-[500px] cursor-pointer space-y-5 rounded-lg bg-gray-50 p-5 transition-all duration-300 hover:bg-teal-100">
                                <div class="rounded-lg bg-white p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis obcaecati magnam, quisquam, sit possimus alias consequatur doloremque dicta ex illo id distinctio architecto, quo eligendi dolorem quia ullam blanditiis nihil.</div>
                                <div class="flex items-center gap-5">
                                    <img src="{{ asset("images/home/girl2.jpg") }}" class="size-16 rounded-full object-cover" />
                                    <div class="space-y-1">
                                        <p class="font-semibold text-gray-700">Emily Thompson</p>
                                        <p class="font-semibold text-gray-500">GED Foundation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection

@push("styles")
    <link rel="stylesheet" href="{{ asset("css/swiper-bundle.min.css") }}" />
@endpush

@push("scripts")
    <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>
    <script>
        const scrollers = document.querySelectorAll('.scroller');

        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            addAnimation();
        }

        function addAnimation() {
            scrollers.forEach((scroller) => {
                scroller.setAttribute('data-animated', true);

                const scrollerInner = document.querySelector('.scroller__inner');
                const scrollerContent = Array.from(scrollerInner.children);

                scrollerContent.forEach((item) => {
                    const duplicatedItem = item.cloneNode(true);
                    duplicatedItem.setAttribute('aria-hidden', false);
                    scrollerInner.appendChild(duplicatedItem);
                });
            });
        }

        const swiper = new Swiper('.swiper', {
            // Optional parameters
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            breakpoints: {
                600: {
                    slidesPerView: 3,
                },
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>
@endpush
