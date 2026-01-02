import { gsap } from "gsap";

const clouds = document.querySelectorAll(".cloud");

clouds.forEach((cloudImg, index) => {
    const wrapper = cloudImg.parentElement;

    // Get data attributes from the cloud image
    const direction = cloudImg.getAttribute("data-direction") || "left";

    gsap.to(cloudImg, {
        x: Math.random() * (direction === "left" ? 70 : -70),
        duration: 4 + Math.random() * 2,
        ease: "sine.inOut",
        yoyo: true,
        repeat: -1,
        delay: 1 + Math.random(),
    });
});
