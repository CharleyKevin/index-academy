<?php get_header(); ?>

<div class="content">
    <div class="wrap">
        <?php 
            if(have_posts()) : 
                while(have_posts()) :
                    the_post(); ?>
                    <div class="post">
                        <div class="thumbnail-post">
                        <?= the_post_thumbnail(); ?>
                        </div>
                        <h2> <?= the_title(); ?> </h2>
                        <?= the_content();
                        comments_template();
                        ?>                    
                    </div>
                <?php    
                endwhile;
            endif; 
        ?>
    </div>
</div>

<?php get_footer(); ?>