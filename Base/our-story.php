<style>
    /* Scrollbar for WebKit (Chrome, Edge, Safari) */
    #carouselContent::-webkit-scrollbar {
        width: 8px;
    }

    #carouselContent::-webkit-scrollbar-track {
        background: #f1f1f1;
        /* Light background */
        border-radius: 10px;
    }

    #carouselContent::-webkit-scrollbar-thumb {
        background: linear-gradient(45deg, #4A90E2, #16A085);
        /* Gradient color */
        border-radius: 10px;
    }

    #carouselContent::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, #357ABD, #138F69);
        /* Darker on hover */
    }

    /* Scrollbar for Firefox */
    #carouselContent {
        scrollbar-width: thin;
        scrollbar-color: #4A90E2 #f1f1f1;
    }
</style>

<!-- 
<div class="flex justify-center px-4 md:px-10 py-10 md:py-20">
    <div class="flex flex-col items-center w-full max-w-3xl"> 
        <div class="container-fuild w-full">
            <div class="relative w-full h-[600px] md:h-[700px] flex flex-col items-center">
                <img src="<?php echo $static_url; ?>/images/about/our-story/1.jpg" alt="Position 4" class="absolute -top-8 -right-20 w-48 h-48 border-4 border-white hidden sm:block -rotate-12">
                <img src="<?php echo $static_url; ?>/images/about/our-story/2.jpg" alt="Position 5" class="absolute bottom-[400px] -right-28 w-48 h-48 border-4 border-white hidden sm:block rotate-12">
                <img src="<?php echo $static_url; ?>/images/about/our-story/3.jpg" alt="Position 6" class="absolute bottom-[200px] -right-20 w-48 h-48 border-4 border-white hidden sm:block -rotate-8">

                <div id="carouselContent" class="relative w-full max-w-md min-h-[400px] sm:min-h-[500px] max-h-[500px] flex flex-col items-center justify-center rounded-lg overflow-y-auto px-4"> 
                    <div class="carousel-item absolute w-full h-full transition-all duration-500 opacity-100">
                        <p class="text-lg text-center px-4">
                            At Jobs Admire, we believe every career journey deserves the right opportunity. Our mission is to seamlessly connect job seekers with employers, empowering individuals to achieve their dreams and helping businesses find top talent.
                            <br><br>
                            Understanding the challenges of job hunting and recruitment, we set out to build a platform that goes beyond traditional job boards. Our goal is to simplify and enhance the hiring process, making it more efficient, transparent, and rewarding for both candidates and employers.

                            <br><br>
                            Over the years, Jobs Admire has grown into a trusted recruitment platform serving various industries. From entry-level roles to executive positions, we match the right talent with the right opportunities, ensuring success for both employees and organizations.
                            <br><br>
                            What sets us apart is our commitment to excellence. We leverage cutting-edge technology, a user-friendly interface, and market insights to deliver a personalized job search and hiring experience. Whether you're a recent graduate, a seasoned professional, or a company seeking top-tier talent, Jobs Admire is here to support your journey.
                        </p>
                    </div>
                </div>

                <img src="<?php echo $static_url; ?>/images/about/our-story/4.jpg" alt="Position 1" class="absolute -top-8 -left-20 w-48 h-48 border-8 border-white hidden sm:block -rotate-12">
                <img src="<?php echo $static_url; ?>/images/about/our-story/5.jpg" alt="Position 2" class="absolute bottom-[400px] -left-28 w-48 h-48 border-4 border-white hidden sm:block rotate-12">
                <img src="<?php echo $static_url; ?>/images/about/our-story/6.jpg" alt="Position 3" class="absolute bottom-[200px] -left-20 w-48 h-48 border-4 border-white hidden sm:block -rotate-12">

            </div>
        </div>
    </div>
</div> -->

<div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6 relative">
   <!-- Left Images (Hidden on Mobile) -->
<div class="hidden md:block lg:col-span-3 md:col-span-3 space-y-6 items-center relative">
    <div class="relative w-full h-[700px] sm:h-[800px]">
        <img src="<?php echo $static_url; ?>/images/about/our-story/1.jpg" alt="Position 4" class="absolute top-[10%] right-[10%] w-32 sm:w-48 h-32 sm:h-48 border-4 border-white -rotate-12">
        <img src="<?php echo $static_url; ?>/images/about/our-story/2.jpg" alt="Position 5" class="absolute top-[40%] right-[5%] w-32 sm:w-48 h-32 sm:h-48 border-4 border-white rotate-12">
        <img src="<?php echo $static_url; ?>/images/about/our-story/3.jpg" alt="Position 6" class="absolute top-[70%] right-[10%] w-32 sm:w-48 h-32 sm:h-48 border-4 border-white -rotate-8">
    </div>
</div>

    <!-- Text Section -->
    <div class="lg:col-span-6 md:col-span-6 space-y-6 px-4">
        <div id="carouselContent" class="relative w-full min-h-[600px] sm:min-h-[700px] max-h-auto flex flex-col items-center justify-center rounded-lg overflow-y-auto p-4">
            <!-- <p class="sm:text-lg leading-relaxed text-justify text-slate-400 text-lg"> -->
            <p class="sm:text-lg leading-relaxed text-justify text-slate-400 text-lg sm:mt-0 mt-4">

                At Jobs Admire, we believe that every career journey deserves the right opportunity. Our story began with a vision—to create a platform that seamlessly connects job seekers with employers, empowering individuals to achieve their professional dreams and helping businesses find the right talent to grow.

                <br><br>
                Understanding the challenges of job hunting and recruitment, we set out to build a solution that goes beyond traditional job boards. Jobs Admire was founded with the mission to simplify and enhance the hiring process, making it more efficient, transparent, and rewarding for both candidates and employers.

                <br><br>
                Over the years, we have grown into a trusted recruitment platform that serves various industries, offering opportunities across multiple sectors. From entry-level positions to executive roles, our goal is to match the right talent with the right opportunities, ensuring success for both employees and organizations.

                <br><br>
                What sets Jobs Admire apart is our commitment to excellence. We leverage cutting-edge technology, a user-friendly interface, and a deep understanding of market trends to deliver a personalized job search and hiring experience. Whether you're a recent graduate taking the first step in your career, a seasoned professional looking for new challenges, or a company seeking top-tier talent, Jobs Admire is here to support you at every stage.
                <br><br>
                Our journey is fueled by the success stories of individuals who have found their dream jobs through our platform and companies that have built strong, dynamic teams with our help. We take pride in being more than just a job portal—we are a career-building partner dedicated to shaping the future of work.

                <br><br>
                Join us in redefining recruitment, unlocking potential, and creating opportunities that inspire growth. At Jobs Admire, your career aspirations and hiring needs are our priority. Together, let’s build a world where talent meets opportunity seamlessly.
            </p>
        </div>
    </div>

   <!-- Right Images (Centered on Mobile) -->
   <div class="lg:col-span-3 md:col-span-3 space-y-6 relative flex md:block justify-center items-center">
    <div class="relative w-full h-[700px] sm:h-[800px]">
        <img src="<?php echo $static_url; ?>/images/about/our-story/4.jpg" alt="Position 1" class="absolute top-[10%] md:left-[25%] left-1/2 transform -translate-x-1/2 w-40 h-40 sm:w-48 sm:h-48 border-8 border-white -rotate-12">
        <img src="<?php echo $static_url; ?>/images/about/our-story/5.jpg" alt="Position 2" class="absolute top-[40%] md:left-[30%] left-1/2 transform -translate-x-1/2 w-40 h-40 sm:w-48 sm:h-48 border-4 border-white rotate-12">
        <img src="<?php echo $static_url; ?>/images/about/our-story/6.jpg" alt="Position 3" class="absolute top-[70%] md:left-[25%] left-1/2 transform -translate-x-1/2 w-40 h-40 sm:w-48 sm:h-48 border-4 border-white -rotate-12">
    </div>
</div>


</div>