@extends("layouts.main")

@section("contents")
    <section class="container mx-auto my-20 space-y-10 px-5 py-20">
        <div class="grid grid-cols-2 gap-5">
            <h1 class="text-5xl font-semibold text-gray-700">Welcome to our EDU Key International School, where global education meets cutting-edge technology.</h1>
            <p class="place-self-end text-xl text-gray-700">We embrace the latest technology to bring education to life. From interactive lessons on smartboards to virtual classrooms that connect students across continents, we’re redefining what it means to learn in the 21st century.</p>
        </div>

        <div class="h-[700px] w-full overflow-hidden rounded-2xl shadow-2xl">
            <img src="{{ asset("images/about/school.jpg") }}" class="h-full w-full object-cover" />
        </div>
    </section>

    <section class="container mx-auto my-20 px-5">
        <div class="grid gap-5 lg:grid-cols-2">
            <div class="space-y-5">
                <h1 class="text-center text-4xl font-semibold text-primary lg:text-left">Our Classroom</h1>
                <p class="text-center text-lg font-medium text-gray-700 lg:text-left">We offer both online and physical classrooms, providing our students with flexible, engaging, and high-quality learning experiences no matter where they are. Whether in a dynamic physical classroom or an interactive online setting, our goal is to create an environment that fosters curiosity, collaboration, and academic success.</p>

                <div class="grid gap-5 lg:grid-cols-2">
                    <div class="group relative isolate cursor-pointer overflow-hidden pt-16">
                        <div class="journey__card__bg flex flex-col gap-5 rounded-2xl bg-gray-100 p-8 text-primary">
                            <span class="self-start"><i class="fi fi-sr-devices text-3xl"></i></span>
                            <h4 class="text-lg font-semibold xl:text-xl">Interactive Learning</h4>
                        </div>
                        <div class="absolute left-0 top-full flex h-full w-full flex-col gap-2 rounded-2xl bg-primary px-8 py-5 text-white transition-all duration-300 group-hover:top-0">
                            <span class="self-start"><i class="fi fi-sr-devices rounded-full border border-white p-3"></i></span>
                            <h4 class="text-lg font-semibold xl:text-xl">Interactive Learning</h4>
                            <p class="text-xs xl:text-sm">Students participate in live, real-time classes where they can ask questions, join discussions, and collaborate with peers from across the globe.</p>
                        </div>
                    </div>

                    <div class="group relative isolate cursor-pointer overflow-hidden pt-16">
                        <div class="journey__card__bg flex flex-col gap-5 rounded-2xl bg-gray-100 p-8 text-primary">
                            <span class="self-start"><i class="fi fi-sr-link-horizontal text-3xl"></i></span>
                            <h4 class="text-lg font-semibold xl:text-xl">Engaging Atmosphere</h4>
                        </div>
                        <div class="absolute left-0 top-full flex h-full w-full flex-col gap-2 rounded-2xl bg-primary px-8 py-5 text-white transition-all duration-300 group-hover:top-0">
                            <span class="self-start"><i class="fi fi-sr-link-horizontal rounded-full border border-white p-3"></i></span>
                            <h4 class="text-lg font-semibold xl:text-xl">Engaging Atmosphere</h4>
                            <p class="text-xs xl:text-sm">Group discussions, collaborative projects, and hands-on activities create an immersive learning experience.</p>
                        </div>
                    </div>

                    <div class="group relative isolate cursor-pointer overflow-hidden pt-16">
                        <div class="journey__card__bg flex flex-col gap-5 rounded-2xl bg-gray-100 p-8 text-primary">
                            <span class="self-start"><i class="fi fi-sr-hr-person text-3xl"></i></span>
                            <h4 class="text-lg font-semibold xl:text-xl">Individualized Support</h4>
                        </div>
                        <div class="absolute left-0 top-full flex h-full w-full flex-col gap-2 rounded-2xl bg-primary px-8 py-5 text-white transition-all duration-300 group-hover:top-0">
                            <span class="self-start"><i class="fi fi-sr-hr-person rounded-full border border-white p-3"></i></span>
                            <h4 class="text-lg font-semibold xl:text-xl">Individualized Support</h4>
                            <p class="text-xs xl:text-sm">Teachers offer one-on-one virtual office hours, and students can receive extra help when needed, ensuring that no one is left behind.</p>
                        </div>
                    </div>

                    <div class="group relative isolate cursor-pointer overflow-hidden pt-16">
                        <div class="journey__card__bg flex flex-col gap-5 rounded-2xl bg-gray-100 p-8 text-primary">
                            <span class="self-start"><i class="fi fi-sr-together-people text-3xl"></i></span>
                            <h4 class="text-lg font-semibold xl:text-xl">Extracurricular Interaction</h4>
                        </div>
                        <div class="absolute left-0 top-full flex h-full w-full flex-col gap-2 rounded-2xl bg-primary px-8 py-5 text-white transition-all duration-300 group-hover:top-0">
                            <span class="self-start"><i class="fi fi-sr-together-people rounded-full border border-white p-3"></i></span>
                            <h4 class="text-lg font-semibold xl:text-xl">Extracurricular Interaction</h4>
                            <p class="text-xs xl:text-sm">Beyond the classroom, students have access to a wide range of extracurricular activities, from sports to arts, providing a well-rounded educational experience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative grid place-items-center gap-6 xl:block">
                <img src="{{ asset("images/about/online.jpg") }}" class="static left-20 top-0 h-[200px] w-[400px] rounded-2xl object-cover shadow-lg lg:shadow-xl lg:drop-shadow-xl xl:absolute" />
                <img src="{{ asset("images/about/children.jpg") }}" class="right-0 top-[34%] h-[200px] w-[400px] rounded-2xl object-cover shadow-lg lg:shadow-xl lg:drop-shadow-xl xl:absolute" />
                <img src="{{ asset("images/about/discussion.jpg") }}" class="bottom-0 left-10 h-[200px] w-[400px] rounded-2xl object-cover shadow-lg lg:shadow-xl lg:drop-shadow-xl xl:absolute" />
            </div>
        </div>
    </section>

    <section class="container mx-auto my-20 px-5">
        <h1 class="mb-3 text-center text-4xl font-semibold text-primary">Meet Our Team</h1>

        @push("styles")
            <style>
                .profile-card {
                    position: relative;
                    width: 300px;
                    height: 300px;
                    background-color: #f9fafb;
                    padding: 30px;
                    border-radius: 50%;
                    box-shadow: -5px 8px 45px rgba(51, 51, 51, 0.126);
                    transition: all 0.4s;
                    margin: 0 20px;
                }
                .profile-card:hover {
                    border-radius: 10px;
                    height: 340px;
                }
                .profile-card .img {
                    position: relative;
                    width: 100%;
                    height: 100%;
                }
                .profile-card:hover img {
                    border-radius: 10px;
                    transform: translateY(-70px);
                }
                .img img {
                    object-fit: fill;
                    width: 100%;
                    border-radius: 50%;
                    transition: all 0.4s;
                    z-index: 99;
                }
                .caption {
                    text-align: center;
                    transform: translateY(-90px);
                    opacity: 0;
                    pointer-events: none;
                    transition: all 0.5s;
                }
                .profile-card:hover .caption {
                    opacity: 1;
                    pointer-events: all;
                }
                .caption h3 {
                    font-size: 21px;
                    color: #254d4d;
                    font-weight: 600;
                }
                .caption p {
                    font-size: 15px;
                    font-weight: 500;
                    margin: 2px 0 12px 0;
                }
                .caption .social-links i {
                    font-size: 21px;
                    cursor: pointer;
                    transition: all 0.4s;
                }
                .caption .social-links i:hover {
                    color: #254d4d;
                }
            </style>
        @endpush

        <div class="home-container grid gap-20 xl:grid-cols-4 lg:grid-cols-3 my-20 place-items-center px-5">
            <div class="profile-card">
                <div class="img">
                    <img src="{{ asset("images/about/girl.jpg") }}" />
                </div>
                <div class="caption">
                    <h3 >Tom Cruise</h3>
                    <p class="text-gray-700">Full Stack Developer</p>
                    <div class="social-links flex justify-center items-center gap-5 text-gray-700">
                        <i class="fi fi-brands-facebook"></i>
                        <i class="fi fi-brands-twitter-alt"></i>
                        <i class="fi fi-brands-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="profile-card">
                <div class="img">
                    <img src="{{ asset("images/about/girl1.jpg") }}" />
                </div>
                <div class="caption">
                    <h3 >Tom Cruise</h3>
                    <p class="text-gray-700">Full Stack Developer</p>
                    <div class="social-links flex justify-center items-center gap-5 text-gray-700">
                        <i class="fi fi-brands-facebook"></i>
                        <i class="fi fi-brands-twitter-alt"></i>
                        <i class="fi fi-brands-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="profile-card">
                <div class="img">
                    <img src="{{ asset("images/about/man.jpg") }}" />
                </div>
                <div class="caption">
                    <h3 >Tom Cruise</h3>
                    <p class="text-gray-700">Full Stack Developer</p>
                    <div class="social-links flex justify-center items-center gap-5 text-gray-700">
                        <i class="fi fi-brands-facebook"></i>
                        <i class="fi fi-brands-twitter-alt"></i>
                        <i class="fi fi-brands-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="profile-card">
                <div class="img">
                    <img src="{{ asset("images/about/man1.jpg") }}" />
                </div>
                <div class="caption">
                    <h3 >Tom Cruise</h3>
                    <p class="text-gray-700">Full Stack Developer</p>
                    <div class="social-links flex justify-center items-center gap-5 text-gray-700">
                        <i class="fi fi-brands-facebook"></i>
                        <i class="fi fi-brands-twitter-alt"></i>
                        <i class="fi fi-brands-instagram"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
