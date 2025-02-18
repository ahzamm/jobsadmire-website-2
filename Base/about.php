<div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
    <div class="lg:col-span-7 md:col-span-6 mt-6 md:mt-0 text-center md:!text-left">
        <div class="lg:ms-5">
            <h3 class="mb-6 md:text-[26px] text-2xl md:leading-normal leading-normal font-semibold dark:text-white mt-8">What we do</h3>

            <!-- Buttons for switching content -->
            <div class="flex flex-wrap justify-center md:justify-start gap-4 mb-6">
                <button class="category-btn px-6 py-3 bg-gray-200 text-white rounded-xl font-semibold shadow-md transition-all duration-300 hover:bg-gray-300 active:scale-95" data-category="students">
                Candidates
                </button>
                <button class="category-btn px-6 py-3 bg-gray-200 text-gray-700 rounded-xl font-semibold shadow-md transition-all duration-300 hover:bg-gray-300 active:scale-95" data-category="recruitment">
                Recruitment Agency
                </button>
                <button class="category-btn px-6 py-3 bg-gray-200 text-gray-700 rounded-xl font-semibold shadow-md transition-all duration-300 hover:bg-gray-300 active:scale-95" data-category="institutions">
                Companies
                </button>
            </div>




            <!-- <div class="flex flex-col md:flex-row items-center md:justify-start space-y-2 md:space-y-0 md:space-x-4 mb-6">
                <button class="category-btn px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold text-sm md:text-base w-full md:w-auto" data-category="students">STUDENTS</button>
                <button class="category-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm md:text-base w-full md:w-auto" data-category="recruitment">RECRUITMENT PARTNERS</button>
                <button class="category-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm md:text-base w-full md:w-auto" data-category="institutions">INSTITUTIONS</button>
            </div> -->
            <!-- Text Content -->
            <p id="category-text" class="text-slate-400 max-w-xl text-lg">
            At JOBS ADMIRE, we are dedicated to helping you unlock global career opportunities. Our personalized job matching process ensures that we guide you every step of the way to find the right fit. With access to a wide variety of positions across industries like IT, healthcare, and more, you can be confident that we’ll find the perfect match for your skills and career aspirations. Trust JOBS ADMIRE to help you take the next step in your professional journey.
            </p>

            <div class="mt-6">
                <a href="contact" class="btn bg-blue-900 hover:bg-blue-950 border-blue-900 hover:border-blue-950 text-white mt-2 rounded-md"><i class="uil uil-envelope"></i> Contact us</a>
            </div>
        </div>
    </div>

    <!-- Image Section -->
    <div class="lg:col-span-5 md:col-span-6">
        <div class="relative">
            <div class="relative justify-center items-center flex">
                <img id="category-image" src="<?php echo $static_url; ?>/images/about/we-do/7.png" class="lg:w-[380px] w-[300px]" alt="">
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Select all buttons
        const buttons = document.querySelectorAll(".category-btn");
        const textElement = document.getElementById("category-text");
        const imageElement = document.getElementById("category-image");

        // Content for each category
        const content = {
            students: {
                text: "At JOBS ADMIRE, we are dedicated to helping you unlock global career opportunities. Our personalized job matching process ensures that we guide you every step of the way to find the right fit. With access to a wide variety of positions across industries like IT, healthcare, and more, you can be confident that we’ll find the perfect match for your skills and career aspirations. Trust JOBS ADMIRE to help you take the next step in your professional journey.",
                image: "<?php echo $static_url; ?>/images/about/we-do/7.png"
            },
            recruitment: {
                text: "JOBS ADMIRE partners with recruitment agencies to connect them with top talent from around the world. We leverage our expertise and innovative recruitment tools to streamline the hiring process and ensure efficient placements. By working with us, your agency can strengthen its talent pool, providing a competitive edge to your clients. We offer seamless recruitment solutions designed to meet your specific needs, making us the perfect partner for growing your agency’s success.",
                image: "<?php echo $static_url; ?>/images/about/we-do/8.png"
            },
            institutions: {
                text: "JOBS ADMIRE is committed to helping businesses like yours secure the best candidates for every role. We understand the unique hiring needs of your company and tailor our recruitment solutions to meet them. With our extensive global network, we bring top-tier talent to fuel your business growth. Our reliable, licensed recruitment services ensure a smooth and efficient hiring process, allowing you to focus on driving success within your organization.",
                image: "<?php echo $static_url; ?>/images/about/we-do/9.png"
            }
        };

        // Add event listener to each button
        buttons.forEach(button => {
            button.addEventListener("click", function() {
                const category = this.getAttribute("data-category");

                // Update text and image
                textElement.textContent = content[category].text;
                imageElement.src = content[category].image;

                // Change button styles
                buttons.forEach(btn => {
                    btn.classList.remove("bg-gray-200", "text-white", "font-semibold");
                    btn.classList.add("bg-gray-200", "text-gray-700");
                });

                this.classList.remove("bg-gray-200", "text-gray-700");
                this.classList.add("bg-gray-200", "text-white", "font-semibold");
            });
        });
    });
</script>