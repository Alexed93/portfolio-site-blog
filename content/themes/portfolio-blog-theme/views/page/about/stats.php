<?php 

    $fields = get_fields(337);

?>

    <div class="secondary-introduction | container--small">
        <div class="secondary_heading">
            <h1><?php echo $fields['skills_title'] ?></h1>
            <h2 class="highlight"><?php echo $fields['skills_subtitle'] ?></h2>
        </div>
        <div class="secondary_excerpt | bordertop">
            <h3><?php echo $fields['skills_blurb'] ?></h3>
        </div>


        <div class="stat-circles | grid | grid--compact">
            <div class="grid__item | grid__item--4-12-bp2 | statcircle | statcircle-1">
                <div class="statcircle_number">
                    <h5 class="frankie">90%</h5>
                </div>
                <h4 class="gamma | statcircle_title">
                    <div class="icon | icon--coding | statcircle_icon"></div>
                    Design
                </h4>
            </div>
            <div class="grid__item | grid__item--4-12-bp2 | statcircle | statcircle-2">
                <div class="statcircle_number">
                    <h5 class="frankie">70%</h5>
                </div>
                <h4 class="gamma | statcircle_title">
                    <div class="icon | icon--artbrush | statcircle_icon"></div>
                    Development
                </h4>
            </div>
            <div class="grid__item | grid__item--4-12-bp2 | statcircle | statcircle-3">
                <div class="statcircle_number">
                    <h5 class="frankie">80%</h5>
                </div>
                <h4 class="gamma | statcircle_title">
                    <div class="icon | icon--lightbulb | statcircle_icon"></div>
                    Branding
                </h4>
            </div>
        </div>
    </div>
</div>
