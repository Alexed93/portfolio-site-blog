<?php 

    $fields = get_fields(222);

?>

<div class="section | about" id="about">
    <div class="container">
        <div class="secondary-introduction | cf">
            <div class="secondary_heading">
                <h1><?php echo $fields['about_title'] ?></h1>
                <h2 class="highlight"><?php echo $fields['about_subtitle'] ?></h2>
            </div>
            <div class="secondary_excerpt">
                <h3><?php echo $fields['about_blurb'] ?></h3>
            </div>
        </div>
        <div class="timeline">
            <ul>
                <?php $timelineblocks = get_field('timeline_block'); ?>
                <?php if($timelineblocks): ?>
                <?php foreach($timelineblocks as $timelineblock) : ?>
                <li>
                    <div>
                        <p><?php echo $timelineblock['timeline_block_blurb']; ?></p>
                        <time><?php echo $timelineblock['timeline_block_date']; ?></time>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>  

