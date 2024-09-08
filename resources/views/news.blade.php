@extends("layouts.main")

@section("contents")
    <section class="mt-40">
        <div class="container mx-auto">
            <h2 class="mb-[50px] text-center text-4xl font-semibold text-gray-700 aboutus_heading">Our Recents Posts</h2>
            <!-- Blog Posts -->
            <div class="mb-[50px] flex flex-col flex-wrap items-center gap-y-10 xl:flex-row xl:justify-between">
                <!-- Post 1 -->
                <div class="blog__post shadow-custom2 group max-w-[420px] cursor-pointer overflow-hidden rounded-[10px] bg-gray-50 shadow-xl aboutus_features">
                    <!-- Img -->
                    <div class="relative overflow-hidden">
                        <img class="transition-all duration-500 group-hover:scale-110" src="{{ asset("images/news/medical1.jpg") }}" alt="" />
                        <!-- Badge -->
                        <div class="absolute bottom-0 left-0 rounded-tr-lg bg-sky-100 px-[18px] py-[6px] text-base font-medium uppercase tracking-[2.24px] text-sky-600">Medical</div>
                    </div>

                    <!-- Text -->
                    <div class="px-5 py-6">
                        <!-- Date -->
                        <div class="mb-4 text-sm font-semibold text-gray-700">Jan 2, 2024</div>

                        <!-- Title -->
                        <h4 class="mb-[10px] text-2xl font-semibold text-gray-700">10 foods to avoid for your heart health</h4>

                        <!-- Description -->
                        <p class="font-light text-gray-800">
                            It's normal to feel anxiety, worry and grief any time you're diagnosed with a condition that's certianly true...
                            <a href="#" class="italic text-[#4C5354] underline">Read more</a>
                        </p>
                    </div>
                </div>

                <div class="blog__post shadow-custom2 group max-w-[420px] cursor-pointer overflow-hidden rounded-[10px] bg-gray-50 shadow-xl aboutus_features">
                    <!-- Img -->
                    <div class="relative overflow-hidden">
                        <img class="transition-all duration-500 group-hover:scale-110" src="{{ asset("images/news/discussion.jpg") }}" alt="" />
                        <!-- Badge -->
                        <div class="absolute bottom-0 left-0 rounded-tr-lg bg-sky-100 px-[18px] py-[6px] text-base font-medium uppercase tracking-[2.24px] text-sky-600">Education</div>
                    </div>

                    <!-- Text -->
                    <div class="px-5 py-6">
                        <!-- Date -->
                        <div class="mb-4 text-sm font-semibold text-gray-700">Feb 10, 2024</div>

                        <!-- Title -->
                        <h4 class="mb-[10px] text-2xl font-semibold text-gray-700">Belongings of care children put in bin bags and lost</h4>

                        <!-- Description -->
                        <p class="font-light text-gray-800">
                            When Elliott was taken into care at 12 years old, he was told to pack all his belongings into black bin bags...
                            <a href="#" class="italic text-[#4C5354] underline">Read more</a>
                        </p>
                    </div>
                </div>

                <div class="blog__post shadow-custom2 group max-w-[420px] cursor-pointer overflow-hidden rounded-[10px] bg-gray-50 shadow-xl aboutus_features">
                    <!-- Img -->
                    <div class="relative overflow-hidden">
                        <img class="transition-all duration-500 group-hover:scale-110" src="{{ asset("images/news/teacher.jpg") }}" alt="" />
                        <!-- Badge -->
                        <div class="absolute bottom-0 left-0 rounded-tr-lg bg-sky-100 px-[18px] py-[6px] text-base font-medium uppercase tracking-[2.24px] text-sky-600">Education</div>
                    </div>

                    <!-- Text -->
                    <div class="px-5 py-6">
                        <!-- Date -->
                        <div class="mb-4 text-sm font-semibold text-gray-700">Apr 2, 2023</div>

                        <!-- Title -->
                        <h4 class="mb-[10px] text-2xl font-semibold text-gray-700">No quick fix to special-needs pupil failures, parents told</h4>

                        <!-- Description -->
                        <p class="font-light text-gray-800">
                            There are no quick fixes to problems faced by families with children with special educational needs and disabilities...
                            <a href="#" class="italic text-[#4C5354] underline">Read more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push("scripts")
    <script>
        const sr = ScrollReveal({
            origin: 'bottom',
            distance: '60px',
            duration: 3000,
            delay: 600,
            reset: true,
        });

        sr.reveal('.aboutus_heading', { origin: 'bottom', delay: 1000 });
        sr.reveal('.aboutus_features', { distance: '150px', interval: 200 });
    </script>
@endpush