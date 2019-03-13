<?php get_header(); 
// Template Name: Depoimentos
?> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="container" style="padding: 90px 0; text-align: center;">
        <div class="depoimentos-empresas depo" style="padding-top: 20px;">
                <h1>depoimentos</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/img/aspas.png">
                <div class="depoimento-slide-single">
                  
                    <div class="depoimento-slide">
                        <?php if(have_rows('item_depoimento_page')): while(have_rows('item_depoimento_page')) : the_row(); ?>
                        <div>
                            <p><?php the_sub_field('depoimento_single_page'); ?></p>
                            <span><?php the_sub_field('nome_depoimento_page'); ?></span>
                        </div>
                        <?php endwhile; else: endif; ?>
                    </div>
                    
                </div>
            </div>
    </section>
       <!--
        <div class="depoimentos-empresas" style="padding-top: 20px;">
                    <h1 style="font-size: 2em;">depoimentos</h1>
                    <img src="img/aspas.png">
                    <div class="depoimentos-single">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel enim in nulla varius scelerisque eu in mauris.</p>
                        <span>-fabricio de souza</span>
                    </div>
        </div>
    -->
    

  <?php endwhile; else: endif; ?>  
<?php get_footer(); ?> 
