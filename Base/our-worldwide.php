<style>
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fade-in-left {
        animation: fadeInLeft 1s ease-out forwards;
    }
</style>
<div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6 relative">
    <!-- Left Section with Hidden State -->
    <div id="animated-section" class="hidden md:block lg:col-span-3 md:col-span-3 space-y-6 items-center relative opacity-0 translate-x-[-100px] transition-all duration-1000">
        <div>
            <h3 class="text-3xl font-bold text-blue-600">1,000+</h3>
            <p class="text-gray-600 text-lg">Globally</p>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-blue-600">200+</h3>
            <p class="text-gray-600 text-lg">South Asia</p>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-blue-600">25+</h3>
            <p class="text-gray-600 text-lg">South and East Asia, Africa and Latin America</p>
        </div>
    </div>

    <!-- Text Section -->
    <div class="lg:col-span-9 md:col-span-9 space-y-6 px-4">
        <img src="<?php echo $static_url; ?>/images/world-map2.png" alt="World Map" class="w-[1200px] h-auto md:max-w-2xl">
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const animatedSection = document.getElementById("animated-section");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animatedSection.classList.add("animate-fade-in-left");
                    animatedSection.classList.remove("opacity-0", "translate-x-[-100px]");
                }
            });
        }, {
            threshold: 0.2
        }); // Trigger when 20% of the section is visible

        observer.observe(animatedSection);
    });
</script>