<?php get_header(); 
// Template Name: Pesquisa
?> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="container servicos-pages">
   <h1><?php the_field('titulo_pesquisa_page', 283); ?></h1>
    <div class="titulo-servicos">
        <img src="<?php the_field('img_pesquisa_page', 283); ?>">
    </div>
    <div class="texto-servicos">
        <p><?php the_field('texto_pesquisa_page', 283); ?></p>
    </div>
</section>




    <?php endwhile; else: endif; ?>
 <?php get_footer(); ?> 