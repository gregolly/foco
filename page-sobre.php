<?php get_header(); 
// Template Name: Sobre
?> 
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="history" style="padding: 90px 0;">
        <div class="container">
            <h1>sobre</h1>
            <p><?php the_field('texto_sobre')?></p>
        </div>
    </section>
    
    <section class="equipe" style="padding: 90px 0;">
        <div class="container">
           <h1 style="text-align: center;">Nossa equipe</h1>
            <div class="slide-equipe">
               <?php if(have_rows('equipe_single')): while(have_rows('equipe_single')) : the_row(); ?>
                <div class="equipe-single">
                    <ul>
                        <li>
                            <img src="<?php the_sub_field('img_equipe'); ?>" alt="imagem equipe da empresa" width="500px" max-width="100%;">
                            <p style="text-align: center;"><?php the_sub_field('nome_equipe'); ?></p>
                            <span style="color: #00A859;"><?php the_sub_field('func_equipe'); ?></span>
                            <span><?php the_sub_field('desc_equipe'); ?></span>
                        </li>
                    </ul>
                </div>
                <?php endwhile; else: endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; else: endif; ?>    
<?php get_footer(); ?> 
