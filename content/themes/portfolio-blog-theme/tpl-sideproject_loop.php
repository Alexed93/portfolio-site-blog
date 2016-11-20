<?php /**
 ***************************************************************************
 * Example Custom Template
 ***************************************************************************
 *
 * Template part that forms the loop that grabs each side project and displays it
 *
 * Template Name: side-project_loop
 *
 */ ?>


<div class="section__content">
            <div class="grid | grid--compact | grid--posts" onclick="">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="grid__item grid__item--6-12 | grid__item--4-12-bp3 | grid__item--3-12-bp6">
                                <div class="sideproject_item">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="sideproject_image" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>');">
                                            <div class="sideproject_overlay">
                                                <div class="sideproject_overlay--text">     
                                                    <h2 class="u-style-uppercase | beta">
                                                        <?php the_title(); ?>
                                                    </h2>
                                                    <?php if ( $post->post_excerpt ): ?>
                                                        <div class="delta"><?php the_excerpt(); ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <?php get_template_part('views/errors/404-posts'); ?>
                <?php endif; ?>
            </div>
        </div>
