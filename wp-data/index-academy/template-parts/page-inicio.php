<?php get_header(); ?>
        <h2>Academy</h2>

        <div class="box-liste-posts">
            <?php
                $args = array('post_type' => 'post');
                $my_posts = get_posts($args);

                if($my_posts) : 
                    foreach($my_posts as $post) :
                        setup_postdata($post);
            ?>
            <div class="list-post">
                <?php the_post_thumbnail(); ?>
                <div class="box-content-post">
                    <h2><?php the_title(); ?></h2>
                    <div class="bt-look-more">
                        <a href="<?php the_permalink() ?>">Ver mais</a>
                    </div>
                </div>
            </div>
            <?php 
                    endforeach;
                endif;
                wp_reset_postdata();
            ?>    
        </div>

<?php get_footer(); ?>