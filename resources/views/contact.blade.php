<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ config("app.name", "Laravel") }}</title>
        @vite("resources/css/app.css")

        <style>
            body {
                --main-hue: 208;
                --text-color: #374151;
                --main-color-hover: #295555;
                --main-color: #254d4d;
                --nav-color: hsl(var(--main-hue), 17%, 79%);
                --bg-color: #fff;
                --light-text-color: #9ca7b6;
                --input-bg: hsla(var(--main-hue), 50%, 50%, 6.5%);
                --input-bg-hover: hsla(var(--main-hue), 50%, 50%, 14%);
                --input-text: #8c9aaf;
                --light-main-color: #295555;
                --input-shadow: hsla(var(--main-hue), 92%, 54%, 0.169);
            }

            .contact {
                width: 100%;
                overflow: hidden;
                background-color: var(--bg-color);
            }

            .contact .containers {
                height: 100vh;
                min-height: 700px;
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 1fr;
            }

            .contact .containers > div {
                grid-column: 1/2;
                grid-row: 1/2;
            }

            .left {
                width: 100%;
                max-width: 80rem;
                margin: 0 auto;
                padding: 65px 1.5rem 0;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                align-items: center;
                position: relative;
                z-index: 3;
            }

            .contact-heading h1 {
                font-weight: 600;
                color: var(--text-color);
                font-size: 3.5rem;
                line-height: 0.9;
                white-space: nowrap;
                margin-bottom: 1.2rem;
            }

            .contact-heading h1 span {
                color: var(--main-color);
            }

            .text {
                color: var(--light-text-color);
                line-height: 1.1;
                font-size: 1rem;
            }

            .text a {
                color: var(--main-color);
                transition: 0.3s;
            }

            .text a:hover {
                color: var(--main-color-hover);
                transition: 0.3s;
            }

            .forms-wrapper {
                max-width: 32rem;
            }

            .contact-form {
                display: grid;
                margin-top: 2.55rem;
                grid-template-columns: repeat(2, 1fr);
                column-gap: 2rem;
                row-gap: 1rem;
            }

            .input-wrap.w-100 {
                grid-column: span 2;
            }

            .contact-input {
                width: 100%;
                background-color: var(--input-bg);
                padding: 1.5rem 1.35rem calc(0.75rem - 2px) 1.35rem;
                border: none;
                outline: none;
                font-family: inherit;
                border-radius: 20px;
                color: var(--text-color);
                font-weight: 600;
                font-size: 0.95rem;
                border: 2px solid transparent;
                box-shadow: 0 0 0 0 var(--input-shadow);
                transition: 0.3s;
            }

            .contact-input:hover {
                background-color: var(--input-bg-hover);
            }

            .input-wrap {
                position: relative;
            }

            .input-wrap label {
                position: absolute;
                top: 50%;
                left: calc(1.35rem + 2px);
                transform: translateY(-50%);
                color: var(--light-text-color);
                pointer-events: none;
                transition: 0.25s;
            }

            .input-wrap .icon {
                position: absolute;
                right: calc(1.35rem + 2px);
                top: 50%;
                transform: translateY(-50%);
                pointer-events: none;
                color: var(--input-text);
                font-size: 1.25rem;
                transition: 0.3s;
            }

            textarea.contact-input {
                resize: none;
                width: 100%;
                min-height: 150px;
            }

            textarea.contact-input ~ label {
                top: 1.2rem;
                transform: none;
            }

            textarea.contact-input ~ .icon {
                top: 1.3rem;
                transform: none;
            }

            .input-wrap.focus .contact-input {
                background-color: var(--bg-color);
                border: 2px solid var(--light-main-color);
                box-shadow: 0 0 0 5px hsla(var(--main-hue), 91%, 55%, 0.11);
            }

            .input-wrap.focus label {
                color: var(--light-main-color);
            }

            .input-wrap.focus .icon {
                color: var(--light-main-color);
            }

            .input-wrap.not-empty label {
                font-size: 0.66rem;
                top: 0.75rem;
                transform: translateY(0);
            }

            .contact-buttons {
                display: grid;
                grid-template-columns: 1fr;
                column-gap: 1rem;
                margin-top: 1rem;
                width: 100%;
                grid-column: span 2;
            }

            .btn {
                display: inline-block;
                padding: 1.1rem 2rem;
                background-color: var(--main-color);
                color: #fff;
                border-radius: 40px;
                border: none;
                font-family: inherit;
                font-weight: 500;
                font-size: 1rem;
                cursor: pointer;
                transition: 0.3s;
            }

            .btn:hover {
                background-color: var(--main-color-hover);
            }

            .btn.upload {
                position: relative;
                background-color: var(--input-bg);
            }

            .btn.upload span {
                color: var(--light-text-color);
            }

            .btn.upload:hover {
                background-color: var(--input-bg-hover);
            }

            .btn.upload input {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                cursor: pointer;
                opacity: 0;
            }

            .right {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                overflow: hidden;
                pointer-events: none;
            }

            .image-wrapper {
                position: relative;
                grid-column: 2;
            }

            .image-wrapper .img {
                position: absolute;
                height: 130%;
                left: 60%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .wave-wrap {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                right: 100%;
                background-color: var(--bg-color);
                filter: blur(0px);
            }

            .wave-wrap svg {
                position: absolute;
                height: calc(100% + 10px);
                top: 50%;
                transform: translateY(-50%) scaleX(1);
                left: calc(100% - 2px);
                transform-origin: left;
            }

            #wave {
                fill: var(--bg-color);
                height: 100%;
            }

            .dashed-wave {
                position: absolute;
                z-index: 3;
                height: 130%;
                bottom: 60%;
                left: -28px;
                transform: translateY(50%);
            }

            #dashed-wave {
                fill: none;
                stroke: var(--nav-color);
                stroke-width: 1px;
                stroke-dasharray: 6.5;
                opacity: 0.8;
            }

            @media (max-width: 1000px) {
                .logo {
                    margin-right: 1rem;
                }

                .logo img {
                    height: 30px;
                    margin-right: 0.7rem;
                }

                .logo h2 {
                    font-size: 1.3rem;
                }

                .nav-link {
                    margin-left: 3.5rem;
                    padding: 0 0.8rem;
                    font-size: 0.9rem;
                }

                .nav-link.theme-toggle {
                    font-size: 1rem;
                }

                .contact-heading h1 {
                    font-size: 2.5rem;
                    margin-bottom: 1rem;
                    white-space: normal;
                }

                .text {
                    font-size: 0.9rem;
                }

                .contact-form {
                    display: grid;
                    margin-top: 1.9rem;
                    column-gap: 0.8rem;
                    row-gap: 0.65rem;
                }

                .contact-input {
                    border-radius: 17px;
                    font-size: 0.87rem;
                    padding: 1.5rem 1.2rem calc(0.75rem - 2px) 1.2rem;
                }

                .input-wrap label {
                    font-size: 0.91rem;
                    left: calc(1.2rem + 2px);
                }

                .input-wrap .icon {
                    font-size: 1.1rem;
                    right: calc(1.2rem + 2px);
                }

                textarea.contact-input ~ label {
                    top: 1.2rem;
                }

                textarea.contact-input ~ .icon {
                    top: 1.33rem;
                }

                .input-wrap.focus .contact-input {
                    box-shadow: 0 0 0 3.5px var(--input-shadow);
                }

                input-wrap.not-empty label {
                    font-size: 0.61rem;
                }

                .contact-buttons {
                    column-gap: 0.8rem;
                    margin-top: 0.45rem;
                }

                .btn {
                    padding: 1rem 1.5rem;
                    font-size: 0.87rem;
                }

                .dashed-wave {
                    bottom: 55%;
                    left: -10px;
                }

                #dashed-wave {
                    stroke-width: 0.7px;
                    stroke-dasharray: 6;
                }

                .wave-wrap {
                    transform: translateX(-10%);
                }

                .wave-wrap svg {
                    height: calc(110% + 10px);
                    transform: translate(-5%, -50%);
                }
            }

            @media (max-width: 650px) {
                header .containers {
                    height: 50px;
                }

                .left {
                    padding: 50px 1.5rem 0;
                    grid-template-columns: 1fr;
                    justify-items: center;
                }

                .forms-wrapper {
                    width: 100%;
                    padding: 1rem 0;
                }

                header ul {
                    justify-content: space-between;
                    width: 100%;
                }

                .logo {
                    margin-right: 0;
                }

                .nav-link {
                    margin-left: 0;
                }

                .right {
                    display: none;
                }
            }

            @media (max-width: 440px) {
                .input-wrap {
                    grid-column: span 2;
                }

                .contact-buttons {
                    grid-template-columns: 1fr;
                    row-gap: 0.5rem;
                }

                .contact-heading h1 {
                    font-size: 1.9rem;
                    line-height: 1;
                }

                .logo img {
                    height: 25px;
                    margin-right: 0.7rem;
                }

                .logo h2 {
                    font-size: 1.15rem;
                }
            }
        </style>
    </head>
    <body>
        @include("layouts.nav")

        <main>
            <section class="contact">
                <div class="containers">
                    <div class="left">
                        <div class="forms-wrapper">
                            <div class="contact-heading">
                                <h1>Let's Learn together</h1>
                            </div>

                            <form action="index.html" method="post" class="contact-form">
                                <div class="input-wrap">
                                    <input class="contact-input" autocomplete="off" name="First Name" type="text" required />
                                    <label>First Name</label>
                                    <i class="icon fa-solid fa-address-card"></i>
                                </div>

                                <div class="input-wrap">
                                    <input class="contact-input" autocomplete="off" name="Last Name" type="text" required />
                                    <label>Last Name</label>
                                    <i class="icon fa-solid fa-address-card"></i>
                                </div>

                                <div class="input-wrap w-100">
                                    <input class="contact-input" autocomplete="off" name="Email" type="text" required />
                                    <label>Email</label>
                                    <i class="icon fa-solid fa-envelope"></i>
                                </div>

                                <div class="input-wrap w-100">
                                    <textarea class="contact-input" autocomplete="off" name="Message" type="text" required></textarea>
                                    <label>Message</label>
                                    <i class="icon fa-solid fa-inbox"></i>
                                </div>

                                <div class="contact-buttons">
                                    <input type="submit" value="Send Message" class="btn" />
                                </div>
                            </form>
                            <div class="grid grid-cols-3 place-items-center items-center gap-5">
                                <hr class="w-full h-px my-8 bg-gray-200 border-0">
                                <span>Or</span>
                                <hr class="w-full h-px my-8 bg-gray-200 border-0">
                            </div>
                            {{-- <div class="inline-flex items-center justify-center w-full">
                                <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                                <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">or</span>
                            </div> --}}
    
                            <div class="grid gap-5 bg-sky-50 p-5 rounded-3xl drop-shadow-xl">
                                <div class="flex items-center gap-3 text-lg text-gray-700">
                                    <lord-icon src="https://cdn.lordicon.com/fbijksqq.json" trigger="loop" style="width: 30px; height: 30px" colors="primary:#242424,secondary:#295555"></lord-icon>
                                    <span>09 777 557 034</span>
                                </div>
    
                                <div class="flex items-center gap-3 text-lg text-gray-700">
                                    <lord-icon src="https://cdn.lordicon.com/ebjjjrhp.json" trigger="loop" style="width: 30px; height: 30px" colors="primary:#242424,secondary:#295555"></lord-icon>
                                    <span>edukey@gmail.com</span>
                                </div>

                                <div class="flex items-center gap-3 text-lg text-gray-700">
                                    <lord-icon src="https://cdn.lordicon.com/surcxhka.json" trigger="loop" style="width: 30px; height: 30px" colors="primary:#242424,secondary:#295555"></lord-icon>
                                    <span>Yangon</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="right">
                        <div class="image-wrapper">
                            <img src="{{ asset("images/home/classroom.jpg") }}" class="img" />
                            <div class="wave-wrap">
                                <svg class="wave" viewBox="0 0 783 1536" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="wave" d="M236.705 1356.18C200.542 1483.72 64.5004 1528.54 1 1535V1H770.538C793.858 63.1213 797.23 196.197 624.165 231.531C407.833 275.698 274.374 331.715 450.884 568.709C627.393 805.704 510.079 815.399 347.561 939.282C185.043 1063.17 281.908 1196.74 236.705 1356.18Z" />
                                </svg>
                            </div>

                            <svg class="dashed-wave" viewBox="0 0 345 877" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="dashed-wave" d="M0.5 876C25.6667 836.167 73.2 739.8 62 673C48 589.5 35.5 499.5 125.5 462C215.5 424.5 150 365 87 333.5C24 302 44 237.5 125.5 213.5C207 189.5 307 138.5 246 87C185 35.5 297 1 344.5 1" />
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
        <script src="https://cdn.lordicon.com/lordicon.js"></script>
        <script>
            const inputs = document.querySelectorAll('.contact-input');

            inputs.forEach((ipt) => {
                ipt.addEventListener('focus', () => {
                    ipt.parentNode.classList.add('focus');
                    ipt.parentNode.classList.add('not-empty');
                });

                ipt.addEventListener('blur', () => {
                    if (ipt.value == '') {
                        ipt.parentNode.classList.remove('not-empty');
                    }
                    ipt.parentNode.classList.remove('focus');
                });
            });
        </script>
    </body>
</html>
