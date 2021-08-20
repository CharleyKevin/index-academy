<?php get_header(); ?>

<div class="content">
    <div class="wrap">
        <div class="marketplace">
            <div class="box-liste-posts">
                <?php
                    if(have_posts()) : 
                        while(have_posts()) :
                            the_post();
                ?>
                <div class="list-post">
                    <?php the_post_thumbnail(); ?>
                    <div class="box-content-post">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink() ?>" class="bt-look-more">Ver mais</a>                        </div>
                    </div>
                <?php 
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?> 
                </div>
            </div>
        </div>
    </div>
</div>