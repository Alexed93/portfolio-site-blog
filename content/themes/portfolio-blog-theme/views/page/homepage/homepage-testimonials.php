<?php 

    $fields = get_fields(222);

?>
<div class="section | section_testimonials">
    <div class="container">
        <div class="secondary-introduction | cf">
            <div class="secondary_heading">
                <h1><?php echo $fields['testimonials_title'] ?></h1>
                <h2 class="highlight"><?php echo $fields['testimonials_subtitle'] ?></h2>
            </div>
            <div class="secondary_excerpt">
                <div class="testimonial-slider">
                    <ul>
                        <?php $testimonials = get_field('testimonial_content'); ?>
                        <?php if($testimonials): ?>
                        <?php foreach($testimonials as $testimonial) : ?>
                        <li>
                            <p class="gamma">"<?php echo $testimonial['testimonial_text']; ?>"</p>
                            <p class="gamma | u-float-right">- <?php echo $testimonial['testimonial_author']; ?></p>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
