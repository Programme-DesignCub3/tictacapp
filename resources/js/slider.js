// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

// init Swiper:
const swiper = new Swiper("#activitySlider", {
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
        // when window width is >= 320px
        425: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // when window width is >= 480px
        720: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        1240: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
        snapOnRelease: true,
    },
});
