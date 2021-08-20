<?php get_header(); ?>

<div class="content">
    <div class="wrap">
        <?php 
            if(is_page('inicio')) : 
                get_template_part('template-parts/page-inicio');
            else :    
                if(have_posts()) : 
                    while(have_posts()) : the_post();
                        echo '<h2>';
                        the_title();
                        echo '</h2>';
                        the_content();
                    endwhile;
                endif;        
            endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>