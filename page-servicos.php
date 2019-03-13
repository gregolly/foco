<?php get_header(); 
// Template Name: Serviços
?> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="servicos">
      
            <h1>serviços</h1>
         <div class="container">
              <?php if(have_rows('item_servicos')): while(have_rows('item_servicos')) : the_row(); ?>
               <div class="servicos-single">
                   <header><?php the_sub_field('titulo_servico'); ?></header>
                   <p><?php the_sub_field('desc_servico'); ?></p>
               </div>
               <?php endwhile; else: endif; ?>
        </div>
    </section>
    
    <?php include(TEMPLATEPATH . '/inc/contador.php'); ?>
    
 <?php endwhile; else: endif; ?>   
 <?php get_footer(); ?> 
