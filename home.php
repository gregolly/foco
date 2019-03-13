<?php
get_header();
?>
   <section class="blog-page" style="margin: 60px 0;">
       <div class="container">
           <h1>notícias</h1>
               
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <div class="blog-itens">
                       <div class="blog-itens-single">
                       <div class="itens-noticia">
                        
                            
                               <ul>
                                   <li>
                                       <article>
                                            <?php the_post_thumbnail('post-thumbnails'); ?>
                                            <h2 style="color: #000;"><?php the_title(); ?></h2>
                                            <span>Publicado <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' atrás'; ?></span>
                                            <a href="<?php the_permalink(); ?>">leia mais</a>
                                        </article>
                                    </li>
                                </ul>
                      </div>
                </div>
           </div>     
    <?php endwhile; ?>
    <div class="nav-blog">
		<?php next_posts_link( '← Posts Antigos' ); ?>
		<?php previous_posts_link( 'Posts Novos →' ); ?>
	</div>    
       <?php else: endif; ?>           
        </div>
</section>

<?php get_footer(); ?>