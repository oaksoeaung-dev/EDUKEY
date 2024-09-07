@extends("layouts.main")

@section("contents")
<section class="mt-40">
    <div class="container mx-auto">
        <h2 class="mb-[50px] text-center text-4xl text-gray-700 font-semibold">Our Recents Posts</h2>
        <!-- Blog Posts -->
        <div class="mb-[50px] flex flex-col items-center gap-y-10 xl:flex-row xl:justify-between flex-wrap">
            <!-- Post 1 -->
            <div class="blog__post shadow-custom2 group max-w-[420px] cursor-pointer overflow-hidden rounded-[10px] bg-gray-50 shadow-xl">
                <!-- Img -->
                <div class="relative overflow-hidden">
                    <img class="transition-all duration-500 group-hover:scale-110" src="{{ asset("images/about/discussion.jpg") }}" alt="" />
                    <!-- Badge -->
                    <div class="bg-sky-100 absolute bottom-0 left-0 px-[18px] py-[6px] text-base font-medium uppercase tracking-[2.24px] text-sky-600 rounded-tr-lg">Education</div>
                </div>

                <!-- Text -->
                <div class="px-5 py-6">
                    <!-- Date -->
                    <div class="mb-4 text-sm font-semibold text-gray-700">Jan 2, 2023</div>

                    <!-- Title -->
                    <h4 class="text-2xl font-semibold mb-[10px] text-gray-700">10 foods to avoid for your heart health</h4>

                    <!-- Description -->
                    <p class="font-light text-gray-800">
                        It's normal to feel anxiety, worry and grief any time you're diagnosed with a condition that's certianly true...
                        <a href="#" class="italic text-[#4C5354] underline">Read more</a>
                    </p>
                </div>
            </div>

            <div class="blog__post shadow-custom2 group max-w-[420px] cursor-pointer overflow-hidden rounded-[10px] bg-gray-50 shadow-xl">
                <!-- Img -->
                <div class="relative overflow-hidden">
                    <img class="transition-all duration-500 group-hover:scale-110" src="{{ asset("images/about/discussion.jpg") }}" alt="" />
                    <!-- Badge -->
                    <div class="bg-sky-100 absolute bottom-0 left-0 px-[18px] py-[6px] text-base font-medium uppercase tracking-[2.24px] text-sky-600 rounded-tr-lg">Education</div>
                </div>

                <!-- Text -->
                <div class="px-5 py-6">
                    <!-- Date -->
                    <div class="mb-4 text-sm font-semibold text-gray-700">Jan 2, 2023</div>

                    <!-- Title -->
                    <h4 class="text-2xl font-semibold mb-[10px] text-gray-700">10 foods to avoid for your heart health</h4>

                    <!-- Description -->
                    <p class="font-light text-gray-800">
                        It's normal to feel anxiety, worry and grief any time you're diagnosed with a condition that's certianly true...
                        <a href="#" class="italic text-[#4C5354] underline">Read more</a>
                    </p>
                </div>
            </div>

            <div class="blog__post shadow-custom2 group max-w-[420px] cursor-pointer overflow-hidden rounded-[10px] bg-gray-50 shadow-xl">
                <!-- Img -->
                <div class="relative overflow-hidden">
                    <img class="transition-all duration-500 group-hover:scale-110" src="{{ asset("images/about/discussion.jpg") }}" alt="" />
                    <!-- Badge -->
                    <div class="bg-sky-100 absolute bottom-0 left-0 px-[18px] py-[6px] text-base font-medium uppercase tracking-[2.24px] text-sky-600 rounded-tr-lg">Education</div>
                </div>

                <!-- Text -->
                <div class="px-5 py-6">
                    <!-- Date -->
                    <div class="mb-4 text-sm font-semibold text-gray-700">Jan 2, 2023</div>

                    <!-- Title -->
                    <h4 class="text-2xl font-semibold mb-[10px] text-gray-700">10 foods to avoid for your heart health</h4>

                    <!-- Description -->
                    <p class="font-light text-gray-800">
                        It's normal to feel anxiety, worry and grief any time you're diagnosed with a condition that's certianly true...
                        <a href="#" class="italic text-[#4C5354] underline">Read more</a>
                    </p>
                </div>
            </div>

            <div class="blog__post shadow-custom2 group max-w-[420px] cursor-pointer overflow-hidden rounded-[10px] bg-gray-50 shadow-xl">
                <!-- Img -->
                <div class="relative overflow-hidden">
                    <img class="transition-all duration-500 group-hover:scale-110" src="{{ asset("images/about/discussion.jpg") }}" alt="" />
                    <!-- Badge -->
                    <div class="bg-sky-100 absolute bottom-0 left-0 px-[18px] py-[6px] text-base font-medium uppercase tracking-[2.24px] text-sky-600 rounded-tr-lg">Education</div>
                </div>

                <!-- Text -->
                <div class="px-5 py-6">
                    <!-- Date -->
                    <div class="mb-4 text-sm font-semibold text-gray-700">Jan 2, 2023</div>

                    <!-- Title -->
                    <h4 class="text-2xl font-semibold mb-[10px] text-gray-700">10 foods to avoid for your heart health</h4>

                    <!-- Description -->
                    <p class="font-light text-gray-800">
                        It's normal to feel anxiety, worry and grief any time you're diagnosed with a condition that's certianly true...
                        <a href="#" class="italic text-[#4C5354] underline">Read more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
