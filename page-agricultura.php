<?php get_header(); 
// Template Name: Agricultura
?> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
<section class="container servicos-pages">
   <h1><?php the_field('titulo_agricultura_page', 276); ?></h1>
    <div class="titulo-servicos">
        <img src="<?php the_field('img_agricultura_page', 276); ?>">
    </div>
    <div class="texto-servicos">
        <p><?php the_field('texto_agricultura_page', 276); ?></p>
    </div>
</section>


    <?php endwhile; else: endif; ?>
 <?php get_footer(); ?> 