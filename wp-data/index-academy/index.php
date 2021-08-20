<?php
require_once 'header.php';

$args = array('post_type' => 'cursos');
$query = new WP_Query($args);
if($query->have_posts()):
    echo '<main class="page-cursos">';
    echo '<ul class="lista-cursos container">';
    while($query->have_posts()): $query->the_post();
        echo '<li class="col-md-3 destinos" >';
        the_post_thumbnail();
        the_title('<p class="titulo-curso">','</p>');
        the_content();
        echo '</li>';
    endwhile;    
    echo '</ul>';
    echo '</main>';
endif;
require_once 'footer.php';