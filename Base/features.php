<?php
$features = [
    [
        'icon' => 'uil uil-phone text-[30px]',
        'title' => '24/7 Support',
        'desc' => 'At Jobs Admire, we provide a 24/7 active services team. No matter if you are planning to work in IT or the tourism industry, we will always help you. Whether you just got your application together or have concerns about your job in the future, we are here to respond whenever you want. They found out that with our continuing help, employment seekers are sure to find Turkey and worldwide job openings that suits them.',
    ],
    [
        'icon' => 'uil uil-atom text-[30px]',
        'title' => 'Tech & Startup Jobs',
        'desc' => 'Search a great number of interesting vacancies in the IT and startup industries. Whether you want to seek employment with a IT firm or a modern startup company, Jobs Admire has a job opening that suits them. Given the available roles internationals enrolled as Turkey our platform will assist you to secure a suitable job. Whether you’re just starting your job search or seeking a new position in your desired field, we will help you at every stage.',
    ],
    [
        'icon' => 'uil uil-user-arrows text-[30px]',
        'title' => 'Quick & Easy',
        'desc' => 'At Jobs Admire, we make the job search process quick and easy. With a user-friendly platform, you can instantly explore a wide range of opportunities in the IT and tourism sectors. Whether you’re looking for roles in Turkey or globally, our streamlined search and application process ensures a hassle-free experience. Finding the perfect job has never been simpler. Let us help you take the next step in your career with ease and convenience.
',
    ],
    [
        'icon' => 'uil uil-hourglass text-[30px]',
        'title' => 'Save Time',
        'desc' => 'Jobs Admire helps you save time by offering a streamlined job search experience. With a comprehensive selection of positions in the IT and tourism sectors, you can quickly find roles that match your skills and career goals. Our efficient platform allows you to apply to multiple opportunities with ease, reducing the time spent on your job search. Regardless of the location of the position – Jobs Admire makes it easier for you.',
    ],
];

?>
<style>
    .hidden {
        display: none;
    }

    button.read-more-btn {
        cursor: pointer;
        background: none;
        border: none;
        color: rgb(25, 44, 65);
        font-size: 1rem;
        padding: 0;
    }

    button.read-more-btn:hover {
        color: #0056b3;
    }
</style>
<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
    <?php foreach ($features as $index => $item): ?>
        <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
            <div class="size-16 flex items-center justify-center mx-auto bg-blue-900/5 group-hover:bg-blue-900 dark:bg-blue-900/10 dark:group-hover:bg-blue-900 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                <i class="<?php echo $item['icon']; ?> text-blue-900 group-hover:text-white"></i>
            </div>

            <div class="mt-4">
                <h1 class="text-lg font-semibold hover:text-blue-900 transition-all duration-500"><?php echo $item['title']; ?></h1>

                <p class="short-desc text-slate-400 mt-3 mb-2">
                    <?php
                    $shortDesc = implode(' ', array_slice(explode(' ', $item['desc']), 0, 12));
                    echo $shortDesc . '...';
                    ?>
                    <span class="hidden full-content"><?php echo $item['desc']; ?></span>
                </p>
                <button
                    class="read-more-btn text-blue-900 font-medium hover:text-blue-600 transition-all duration-500"
                    data-index="<?php echo $index; ?>">
                    Read More
                </button>
            </div>
        </div><!--end content-->
    <?php endforeach; ?>
</div><!--end grid-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.short-desc').each(function() {
            const fullText = $(this).find('.full-content').text().trim();
            const truncatedText = fullText.split(' ').slice(0, 12).join(' ') + '...';

            $(this).data('full-text', fullText); // Store full content
            $(this).data('truncated-text', truncatedText); // Store truncated content
            $(this).html(truncatedText); // Set initial truncated content
        });

        $('.read-more-btn').on('click', function() {
            const button = $(this);
            const paragraph = button.siblings('.short-desc'); // Get the associated paragraph
            const isExpanded = button.text() === 'Show Less';
            paragraph.html(isExpanded ? paragraph.data('truncated-text') : paragraph.data('full-text'));
            button.text(isExpanded ? 'Read More' : 'Show Less'); // Update button text
        });
    });
</script>