@extends("layouts.main")

@section("contents")
    <header class="container mx-auto px-3 pt-32">
        <div class="grid overflow-hidden px-0 lg:px-20">
            <div class="hero_left" style="grid-area: 1/1/2/2">
                <img src="{{ asset("images/home/header.jpg") }}" alt="header" class="ml-auto flex w-full max-w-[900px] rounded-3xl object-contain" />
            </div>

            <div style="grid-area: 1/1/2/2" class="hero_right flex items-center">
                <div class="z-10 max-w-[700px] rounded-none bg-white/50 px-4 py-16 backdrop-blur-sm lg:rounded-xl lg:backdrop-blur-md">
                    {{-- heading --}}
                    <h1 class="mb-4 text-center text-5xl font-semibold leading-snug text-primary lg:text-left lg:text-[4rem]">Welcome to EDUKEY College</h1>

                    {{-- introduction --}}
                    <p class="text-center text-lg text-gray-700 lg:text-left">We harness the power of cutting-edge technology to create a dynamic and interactive educational experience. Through our robust online learning platform, students can connect with peers and educators from around the world, engaging in collaborative projects and real-time lessons.</p>
                </div>
            </div>
        </div>
    </header>

    {{-- About Us --}}
    <section class="container mx-auto px-5 py-20">
        <div class="grid gap-12">
            <div class="flex flex-col items-center gap-10 lg:flex-row">
                <div class="w-full lg:w-[70%]">
                    <h1 class="aboutus_heading mb-3 text-center text-4xl font-semibold text-primary lg:text-left">About Us</h1>
                    <p class="aboutus_content text-center text-xl text-gray-700 lg:text-left">We are more than just a school—we are a global community dedicated to fostering academic excellence, cultural understanding, and personal growth.</p>
                </div>
                <div class="aboutus_btn flex w-full items-center justify-center lg:w-[30%]">
                    <a class="rounded-lg bg-primary px-6 py-3 text-white" href="#">Learn More</a>
                </div>
            </div>

            <div class="grid gap-5 lg:grid-cols-2">
                <div class="grid grid-cols-2 gap-5 place-self-start px-5 lg:px-0">
                    <div class="aboutus_features flex flex-col gap-5 rounded-lg border border-gray-100 bg-gray-100 p-5 text-primary shadow-sm">
                        <i class="fi fi-rr-world self-start text-4xl"></i>
                        <p class="text-2xl font-semibold">Global Curriculum</p>
                    </div>

                    <div class="aboutus_features flex flex-col gap-5 rounded-lg border border-gray-100 bg-gray-100 p-5 text-primary shadow-sm">
                        <i class="fi fi-rr-computer-speaker self-start text-4xl"></i>
                        <p class="text-2xl font-semibold">Technology-Enhanced Learning</p>
                    </div>

                    <div class="aboutus_features flex flex-col gap-5 rounded-lg border border-gray-100 bg-gray-100 p-5 text-primary shadow-sm">
                        <i class="fi fi-rr-method self-start text-4xl"></i>
                        <p class="text-2xl font-semibold">Innovative Teaching Methods</p>
                    </div>

                    <div class="aboutus_features flex flex-col gap-5 rounded-lg border border-gray-100 bg-gray-100 p-5 text-primary shadow-sm">
                        <i class="fi fi-rr-chalkboard-user self-start text-4xl"></i>
                        <p class="text-2xl font-semibold">Expertise and Passion</p>
                    </div>
                </div>

                <div class="flex gap-5">
                    {{-- column --}}
                    <div class="flex w-1/2 flex-col gap-5">
                        {{-- photo --}}
                        <div class="aboutus_photos">
                            <img class="h-auto w-full rounded-lg object-cover" src="{{ asset("images/home/girl.jpg") }}" alt="" />
                        </div>
                        <div class="aboutus_photos">
                            <img class="h-auto w-full rounded-lg object-cover" src="{{ asset("images/home/classroom.jpg") }}" alt="" />
                        </div>
                    </div>
                    <div class="flex w-1/2 flex-col gap-5">
                        {{-- photo --}}
                        <div class="aboutus_photos">
                            <img class="h-auto w-full rounded-lg object-cover" src="{{ asset("images/home/library.jpg") }}" alt="" />
                        </div>
                        <div class="aboutus_photos">
                            <img class="h-auto w-full rounded-lg object-cover" src="{{ asset("images/home/students-book.jpg") }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Popular Classes --}}
    <section class="container mx-auto px-5 py-20">
        <h1 class="courses_heading mb-3 text-center text-4xl font-semibold text-primary lg:text-left">Popular Courses</h1>
        <p class="courses_content text-center text-xl text-gray-700 lg:text-left">Our classes are designed to provide a dynamic, engaging, and globally focused education that meets the needs of every student. From early years to graduation, we offer a comprehensive curriculum that challenges and inspires students at every stage of their academic journey.</p>

        <div class="my-20 grid items-center gap-3 lg:grid-cols-4">
            @php
                $classes = ["GED", "Pre-GED", "IGCSE", "Pre-IGCSE"];
            @endphp

            @foreach ($classes as $class)
                <div class="courses rounded-2xl bg-gray-50 p-3 text-[#697e91]">
                    <div class="relative items-center rounded-xl bg-teal-50 p-5 pt-10">
                        <span class="absolute right-0 top-0 flex items-center rounded-bl-[99em] rounded-tl-[99em] bg-teal-200 px-3 py-2 text-lg font-semibold text-teal-800">
                            <span>
                                {{ $loop->iteration * 10000 + 100000 }} KS
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
    <section class="container mx-auto px-5 py-20">
        <h1 class="aboutus_heading mb-3 text-center text-4xl font-semibold text-primary">What Our Happy Students Say</h1>
        <p class="aboutus_content text-center text-xl text-gray-700">We empower our students to take an active role in shaping their education.</p>

        <div class="my-10">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @php
                        $students = [
                            "Thuta Zaw" => [
                                "image" => "student3.jpg",
                                "course" => "GED",
                                "feedback" => "Studying at EDUKEY has been an amazing journey. The international curriculum not only prepared me for university but also exposed me to diverse cultures and perspectives. The online learning platform allowed me to continue my education seamlessly, even during travel, and I felt supported every step of the way.",
                            ],
                            "Yamin Thuzar" => [
                                "image" => "student1.jpg",
                                "course" => "GED",
                                "feedback" => "The teachers at EDUKEY go above and beyond to help us succeed. Whether in the physical classroom or during online sessions, they always ensure we understand the material and are available whenever we need extra help. The personalized attention really makes a difference.",
                            ],
                            "Theint Thinzar" => [
                                "image" => "student2.jpg",
                                "course" => "IGCSE",
                                "feedback" => "I love how EDUKEY integrates technology into our learning. The interactive tools in both our online and physical classrooms make learning fun and engaging. I feel like I’m preparing for the future with skills that will really matter in the real world.",
                            ],
                            "Bhone Thit Htoo" => [
                                "image" => "student5.jpg",
                                "course" => "Primary 3",
                                "feedback" => "At EDUKEY, I’ve had the chance to grow not just academically but also personally. The school offers so many extracurricular activities that help build leadership skills and confidence. Plus, the sense of community here is incredible—it truly feels like a family.",
                            ],
                            "Zaw Aung Min" => [
                                "image" => "student4.jpg",
                                "course" => "Secondary 1",
                                "feedback" => "The flexibility of choosing between online and on-campus classes has made it easier for me to balance my studies with my personal life. The online platform is easy to use, and the live classes are just as interactive as being in the physical classroom. It’s the perfect mix of convenience and quality.",
                            ],
                        ];
                    @endphp

                    @foreach ($students as $name => $information)
                        <div class="swiper-slide">
                            <div class="w-full max-w-[500px] cursor-pointer space-y-5 rounded-lg bg-gray-50 p-5 transition-all duration-300 hover:bg-teal-100">
                                <div class="rounded-lg bg-white p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis obcaecati magnam, quisquam, sit possimus alias consequatur doloremque dicta ex illo id distinctio architecto, quo eligendi dolorem quia ullam blanditiis nihil.</div>
                                <div class="flex items-center gap-5">
                                    <img src="{{ asset("images/home/students/" . $information["image"]) }}" class="size-16 rounded-full object-cover" />
                                    <div class="space-y-1">
                                        <p class="font-semibold text-gray-700">{{ $name }}</p>
                                        <p class="font-semibold text-gray-500">{{ $information["course"] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
    <script src="{{ asset("js/home.js") }}"></script>
@endpush
