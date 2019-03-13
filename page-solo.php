<?php get_header(); 
// Template Name: Solo
?> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="container servicos-pages">
   <h1><?php the_field('titulo_solo_page', 279); ?></h1>
    <div class="titulo-servicos">
        <img src="<?php the_field('img_solo_page', 279); ?>">
    </div>
    <div class="texto-servicos">
        <p><?php the_field('texto_solo_page', 279); ?></p>
    </div>
</section>




    <?php endwhile; else: endif; ?>
 <?php get_footer(); ?> 