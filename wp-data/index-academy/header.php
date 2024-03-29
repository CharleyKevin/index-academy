<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/layout.css' ?>">
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <?php
        the_custom_logo();
        ?>
        <nav>
            <?php
            wp_nav_menu( 
                array (
                    'menu' => 'menu-navegacao'
                )
            );
            ?>
        </nav>    
    </div>
</header>    