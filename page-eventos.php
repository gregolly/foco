<?php get_header(); 
// Template Name: Eventos
?> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="eventos">
        <div class="container teste">
           <h1>eventos</h1>
           <?php $Eventos = new WP_Query([
            'posts_per_page' => 30,
            'post_type' => 'eventos'
        ]); 
          
        if($Eventos->have_posts()) : while($Eventos->have_posts()) : $Eventos->the_post();
        ?>     
            <div class="img-responsive">
                <a href="<?php the_permalink(); ?>">
                <?the_post_thumbnail('medium'); ?>
                <p><?php the_title(); ?></p>
                </a>
            </div>
        <?php endwhile; else: endif; ?>                           
        </div>
    </section>
    <?php endwhile; else: endif; ?>
 <?php get_footer(); ?> 
