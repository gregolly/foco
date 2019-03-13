<?php get_header(); 
// Template Name: Contato
?> 
    
    <section class="page-contato container">
        <h1>Contato</h1>
        <div class="from-group box-shadow">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="bg-color" data-anime="left">                
               
                <?php the_content(); ?>
                
            </div>
        <?php endwhile; else: endif; ?>    
            <div class="filiais" data-anime="right">
                <ul>
                   <?php if(have_rows('item_filiais')): while(have_rows('item_filiais')) : the_row(); ?>
                    <li style="text-transform: uppercase;"><img src="<?php echo get_template_directory_uri(); ?>/img/retangulo.png"><?php the_sub_field('filiais_nome'); ?></li>
                    <span style="display: inline-block; margin-bottom: 20px; margin-left: 10px;"><?php the_sub_field('endereco_filiais'); ?></span>
                    <?php endwhile; else: endif; ?>    
                </ul>
            </div>
        </div> 
          
    </section>

    
       
<?php get_footer(); ?> 
