<?php
$jobs = [
    [
        'target' => '500',
        'numbers' => '0',
        'numbers1' => '+',
        'title' => 'Job Fulfillment'
    ],
    [
        'target' => '3',
        'numbers' => '0',
        'numbers1' => '+',
        'title' => 'Branches'
    ],
    [
        'target' => '2',
        'numbers' => '0',
        'numbers1' => '+',
        'title' => 'Years Experience'
    ]
];

?>

<div class="relative grid md:grid-cols-3 grid-cols-1 items-center gap-[30px] z-1">
<?php foreach ($jobs as $item): ?>
                    <div class="counter-box text-center">
                        <h1 class="lg:text-5xl text-4xl font-semibold mb-2 dark:text-white"><span class="counter-value" data-target="<?php echo $item['target']; ?>"><?php echo $item['numbers']; ?></span><?php echo $item['numbers1']; ?></h1>
                        <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase"><?php echo $item['title']; ?></h5>
                    </div><!--end counter box-->
                    
                    <?php endforeach; ?>
                </div>