const scrollers = document.querySelectorAll(".scroller");

if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    addAnimation();
}

function addAnimation() {
    scrollers.forEach((scroller) => {
        scroller.setAttribute("data-animated", true);

        const scrollerInner = document.querySelector(".scroller__inner");
        const scrollerContent = Array.from(scrollerInner.children);

        scrollerContent.forEach((item) => {
            const duplicatedItem = item.cloneNode(true);
            duplicatedItem.setAttribute("aria-hidden", false);
            scrollerInner.appendChild(duplicatedItem);
        });
    });
}

const swiper = new Swiper(".swiper", {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
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

// Scroll Reveal
const sr = ScrollReveal({
    origin: "bottom",
    distance: "60px",
    duration: 3000,
    delay: 600,
    reset: true,
});

sr.reveal(".hero_left", { origin: "right" });
sr.reveal(".hero_right", { origin: "left" });
sr.reveal(".aboutus_heading", { origin: "bottom",delay : 1000 });
sr.reveal(".aboutus_content", { origin: "bottom",delay : 1000 });
sr.reveal(".aboutus_btn", { origin: "right",delay : 1000 });
sr.reveal(".aboutus_features", { distance: "150px", interval: 200 });
sr.reveal(".aboutus_photos", { distance: "150px", interval: 200 });
sr.reveal(".courses_heading", { origin: "bottom" });
sr.reveal(".courses_content", { origin: "bottom",delay : 1000 });
sr.reveal(".courses", { distance: "150px", interval: 200 });
