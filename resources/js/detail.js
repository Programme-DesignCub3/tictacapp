const hydrateYouTubeEmbeds = () => {
    const placeholders = document.querySelectorAll(
        "img.youtube-embed-placeholder",
    );

    if (placeholders.length === 0) return;

    const observer = new IntersectionObserver(
        (entries, observerInstance) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const imgEl = entry.target;
                    const imgSrc = imgEl.getAttribute("src");

                    const match = imgSrc.match(/\/vi\/([^\/]+)\//);
                    const videoId = match ? match[1] : null;

                    if (videoId) {
                        const wrapper = document.createElement("div");

                        wrapper.className =
                            "relative w-full aspect-video overflow-hidden rounded-xl shadow-md my-6 bg-black";

                        wrapper.innerHTML = `
                        <iframe
                            class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/${videoId}?autoplay=0&rel=0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    `;

                        imgEl.parentNode.replaceChild(wrapper, imgEl);
                    }

                    observerInstance.unobserve(imgEl);
                }
            });
        },
        {
            rootMargin: "200px 0px",
            threshold: 0.1,
        },
    );

    placeholders.forEach((el) => observer.observe(el));
};

document.addEventListener("DOMContentLoaded", hydrateYouTubeEmbeds);
