<?php get_header(); 
// Template Name: Trabalhos
?> 
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <section class="trabalhos">
        <div class="container">
            <h1>trabalhos</h1>
            <div class="trabalhos-item">
            <?php $Trabalhos = new WP_Query([
            'posts_per_page' => 30,
            'post_type' => 'trabalhos'
        ]); 
          
        if($Trabalhos->have_posts()) : while($Trabalhos->have_posts()) : $Trabalhos->the_post();
        ?>  
        <a href="<?php the_permalink(); ?>">
                <div class="trabalhos-single">
      
                    <?php the_post_thumbnail(); ?>
                                         
                                   
                    <header><?php the_title(); ?></header>
                    <span><?php the_date('d/m/y'); ?></span>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <?php endwhile; else: endif; ?>
            </div>
            </a>   
        </div>
    </section>
 <?php endwhile; else: endif; ?>   
<?php get_footer(); ?> 
