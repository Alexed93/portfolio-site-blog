<?php 
    $args = array( 'post_type' => 'project', 'posts_per_page' => 6 );
    $the_query = new WP_Query( $args ); 
?>

        <div class="grid | grid--spaced | container | projects" onclick="">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $featured_image = get_field('featured_image');?>
                <div class="grid__item | grid__item--6-12-bp2 | grid__item--4-12-bp3 | project_item">
                    <img class="project_image" src="<?php echo $featured_image; ?>">
                    <div class="project_overlay"></div> 
                    <a class="project_link" href="<?php the_permalink(); ?>">   
                        <h2 class="u-style-uppercase | beta"><?php the_title(); ?></h2> 
                        <?php the_excerpt(); ?>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php else:  ?>
                <?php get_template_part('views/errors/404-posts'); ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>
