const d=()=>{const o=document.querySelectorAll("img.youtube-embed-placeholder");if(o.length===0)return;const n=new IntersectionObserver((t,s)=>{t.forEach(l=>{if(l.isIntersecting){const e=l.target,c=e.getAttribute("src").match(/\/vi\/([^\/]+)\//),a=c?c[1]:null;if(a){const r=document.createElement("div");r.className="relative w-full aspect-video overflow-hidden rounded-xl shadow-md my-6 bg-black",r.innerHTML=`
                        <iframe
                            class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/${a}?autoplay=0&rel=0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    `,e.parentNode.replaceChild(r,e)}s.unobserve(e)}})},{rootMargin:"200px 0px",threshold:.1});o.forEach(t=>n.observe(t))};document.addEventListener("DOMContentLoaded",d);
