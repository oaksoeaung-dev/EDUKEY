@extends("layouts.main")

@section("contents")
    {{-- Popular Classes --}}
    <section class="container mx-auto px-5 pt-40">
        <h1 class="aboutus_heading mb-3 text-center text-4xl font-semibold text-primary">Our Courses</h1>

        <div class="my-20 grid place-items-center gap-10 lg:grid-cols-4">
            @php
                $classes = ["GED", "Pre-GED", "IGCSE", "Pre-IGCSE", "Secondary 3", "Secondary 2", "Secondary 1", "Primary 6"];
            @endphp

            @foreach ($classes as $class)
                <div class="aboutus_features w-full max-w-80 rounded-2xl bg-gray-50 p-3 text-[#697e91]">
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
