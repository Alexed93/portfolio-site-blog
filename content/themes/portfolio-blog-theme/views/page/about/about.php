<?php 

    $fields = get_fields(337);

?>

<div class="container | u-top-bottom-space">
    <div class="secondary-introduction | container--small">
        <div class="secondary_heading">
            <h1><?php echo $fields['about_title'] ?></h1>
            <h2 class="highlight"><?php echo $fields['about_subtitle'] ?></h2>
        </div>
        <div class="secondary_excerpt | bordertop">
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

