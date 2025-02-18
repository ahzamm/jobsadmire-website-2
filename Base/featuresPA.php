<?php
$features = [
    [
        'icon' => 'uil uil-globe text-[30px]',
        'title' => 'Global Job Placement',
        'desc' => 'We collaborate with state, regional and local employment agencies to help people looking for work and companies',
        'url' => 'service-global-job-placement',
    ],
    [
        'icon' => 'uil uil-file-alt text-[30px]',
        'title' => 'Resume Services',
        'desc' => 'It’s time for you to make a impactful effect on the employers with a professionally designed resume.',
        'url' => 'service-resume-service',

    ],
    [
        'icon' => 'uil uil-comments text-[30px]',
        'title' => 'Interview Coaching',
        'desc' => 'Prepare for your job interview with a human resources and personal development specialist. Discover all the tools.',
        'url' => 'service-interview-coaching',

    ],
    [
        'icon' => 'uil uil-compass text-[30px]',
        'title' => 'Career Counseling',
        'desc' => 'We will work together to be your guide and accompany you at key moments in your career. You will have a ',
        'url' => 'service-career-counselling',

    ],
    [
        'icon' => 'uil uil-plane text-[30px]',
        'title' => 'Visa and Relocation Assistance',
        'desc' => 'This Visa or Relocation Assistance helps anyone who is planning to move to another country for work, studies or.',
        'url' => 'service-visa-and-relocation-assistance',

    ],
    [
        'icon' => 'uil uil-graduation-cap text-[30px]',
        'title' => 'Skill Development Training',
        'desc' => 'With our skill development training, our clients acquire the skills, skills and knowledge they require in the today’s',
        'url' => 'service-skill-development-training',

    ],
    [
        'icon' => 'uil uil-laptop text-[30px]',
        'title' => 'Remote Work Opportunities',
        'desc' => 'We offer an opportunity to find high-quality remote work and work from anywhere in the world; it is also a great',
        'url' => 'service-remote-work-opportunities',

    ],
    [
        'icon' => 'uil uil-user-check text-[30px]',
        'title' => 'Talent Acquisition Process',
        'desc' => 'This guide describes our Talent Acquisition Process as a way to assist businesses in finding quality employees as',
        'url' => 'service-talent-acquisition-process',

    ],
];

?>

<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
    <?php foreach ($features as $item): ?>
        <div class="group px-3 py-10 rounded-md shadow dark:shadow-gray-700 hover:shadow-emerald-600/10 dark:hover:shadow-emerald-600/10 text-center bg-white dark:bg-slate-900 hover:bg-emerald-600/5 dark:hover:bg-emerald-600/5 transition duration-500">
            <div class="size-16 flex items-center justify-center mx-auto bg-blue-900/5 group-hover:bg-blue-900 dark:bg-blue-900/10 dark:group-hover:bg-blue-900 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                <i class="<?php echo $item['icon']; ?> text-blue-900 group-hover:text-white"></i>
            </div>

            <div class="mt-4">
                <a href="<?php echo $item['url']; ?>" class="text-lg font-semibold hover:text-blue-900 transition-all duration-500"><?php echo $item['title']; ?></a>

                <p class="truncate-text text-slate-400 mt-3 mb-2 text-lg">
                    <?php
                    $shortDesc = implode(' ', array_slice(explode(' ', $item['desc']), 0, 30));
                    echo $shortDesc . '...';
                    ?>
                </p>

                <a href="<?php echo $item['url']; ?>" class="hover:text-blue-900 font-medium transition-all duration-500">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div><!--end content-->
    <?php endforeach; ?>

</div><!--end grid-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.truncate-text').each(function() {
            const fullText = $(this).text().trim();
            const truncatedText = fullText.length > 50 ? fullText.substring(0, 80) + '...' : fullText; 

            $(this).data('full-text', fullText);
            $(this).data('truncated-text', truncatedText);
            $(this).text(truncatedText); 
        });
    });
</script>