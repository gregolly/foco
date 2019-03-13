<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-')?> <?php the_field('title_seo') ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-')?> <?php the_field('title_seo') ?>">
    <meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-')?> <?php the_field('desc_seo') ?>">
    <meta property="og:url" content="<?php bloginfo('url') ?>">
    <title> <?php wp_title('-')?> <?php the_field('title_seo') ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/fav.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css">
    <?php wp_head(); ?>
</head>

<body>
 
   <header class="menu">
        <div class="container">
           <div class="img-aleatoria grid-2">
              <div class="img-single">
                  <a href="https://focotga.com.br">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/elipse.png" alt="foco assessoria" style="width: 50px;">
                   </a>
               </div>
           </div>
            <nav class="menu-desktop">
                <?php
                    $args = array(
                        'menu' => 'principal',
                        'theme_location' => 'menu-principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                ?>

            </nav>
            
            <nav class="menu-mobile">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-white.png" alt="icone do menu">
                <ul>
                    <li><a href="/foco/contato">contato</a></li>
                    <li><a href="/foco/depoimentos">depoimentos</a></li>
                    <li><a href="/foco/trabalhos">trabalhos</a></li>
                    <li><a href="/foco/eventos">eventos</a></li>
                    <li><a href="/foco/noticias">notícias</a></li>
                    <li><a href="/foco/servicos">serviços</a></li>
                    <li><a href="/foco/sobre">sobre</a></li>
                    <li><a href="https://focotga.com.br">home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    
    