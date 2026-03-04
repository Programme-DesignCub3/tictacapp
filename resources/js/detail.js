// resources/js/app.js

const hydrateYouTubeEmbeds = () => {
    // Select all placeholder images that haven't been replaced yet
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

                    // Extract the Video ID from the thumbnail URL: https://img.youtube.com/vi/ID/maxresdefault.jpg
                    const match = imgSrc.match(/\/vi\/([^\/]+)\//);
                    const videoId = match ? match[1] : null;

                    if (videoId) {
                        // Create the wrapper and iframe dynamically
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

                        // Replace the image with the new iframe wrapper
                        imgEl.parentNode.replaceChild(wrapper, imgEl);
                    }

                    // Stop observing
                    observerInstance.unobserve(imgEl);
                }
            });
        },
        {
            rootMargin: "200px 0px", // Load slightly earlier before it enters the viewport
            threshold: 0.1,
        },
    );

    placeholders.forEach((el) => observer.observe(el));
};

// Execution hooks
document.addEventListener("DOMContentLoaded", hydrateYouTubeEmbeds);
