<?php get_header(); 
// Template Name: Pesquisas
?> 
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="pesquisa-page container" style="margin-top: 90px; margin-bottom: 90px;">
      <h1 class="titulo-pesquisa">pesquisas</h1>

      <div class="pesquisas-empresa">
          <ul class="lista-pesquisa" style="text-align: center;">
                   <?php if(have_rows('item_pesquisa_page')): while(have_rows('item_pesquisa_page')) : the_row(); ?>
                    <p>
                       
                        <a href="<?php the_sub_field('file_pesquisa'); ?>"><?php the_sub_field('nome_pesquisa_page'); ?></a>
                        
                    </p>
                    <span><?php the_sub_field('data_pesquisa_page'); ?></span>
                    <?php endwhile; else: endif; ?>                    
            </ul>
      </div>
    </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?> 
