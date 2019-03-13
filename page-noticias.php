<?php get_header(); 
// Template Name: Noticias
?> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
  <section class="BNE" data-anime="top" style="margin-top: 50px;">
        <div class="container">
           <h1>blog</h1>
           
            <div class="blog-itens">
                <div class="blog-itens-single">
                    <div class="itens-noticia">
                       <ul>
                          
                           <li>
                                <img src="<?php the_field('page_imagem_noticia1'); ?>" alt="foto noticia">
                                <h2><?php the_field('page_descricao_noticia1'); ?></h2>
                                <span><?php the_field('page_data_noticia1'); ?></span>
                                <a href="noticia1.php">leia mais</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-itens">
                <div class="blog-itens-single">
                    <div class="itens-noticia">
                       <ul>
                          
                           <li>
                                <img src="<?php the_field('page_imagem_noticia2'); ?>" alt="foto noticia">
                                <h2><?php the_field('page_descricao_noticia2'); ?></h2>
                                <span><?php the_field('page_data_noticia2'); ?></span>
                                <a href="noticia2.php">leia mais</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-itens">
                <div class="blog-itens-single">
                    <div class="itens-noticia">
                       <ul>
                          
                           <li>
                                <img src="<?php the_field('page_imagem_noticia3'); ?>" alt="foto noticia">
                                <h2><?php the_field('page_descricao_noticia3'); ?></h2>
                                <span><?php the_field('page_data_noticia3'); ?></span>
                                <a href="noticia3.php">leia mais</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-itens">
                <div class="blog-itens-single">
                    <div class="itens-noticia">
                       <ul>
                          
                           <li>
                                <img src="<?php the_field('page_imagem_noticia4'); ?>" alt="foto noticia">
                                <h2><?php the_field('page_descricao_noticia4'); ?></h2>
                                <span><?php the_field('page_data_noticia4'); ?></span>
                                <a href="noticia4.php">leia mais</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-itens">
                <div class="blog-itens-single">
                    <div class="itens-noticia">
                       <ul>
                          
                           <li>
                                <img src="<?php the_field('page_imagem_noticia5'); ?>" alt="foto noticia">
                                <h2><?php the_field('page_descricao_noticia5'); ?></h2>
                                <span><?php the_field('page_data_noticia5'); ?></span>
                                <a href="noticia5.php">leia mais</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-itens">
                <div class="blog-itens-single">
                    <div class="itens-noticia">
                       <ul>
                          
                           <li>
                                <img src="<?php the_field('page_imagem_noticia6'); ?>" alt="foto noticia">
                                <h2><?php the_field('page_descricao_noticia6'); ?></h2>
                                <span><?php the_field('page_data_noticia6'); ?></span>
                                <a href="noticia6.php">leia mais</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
</section>
  
 <?php endwhile; else: endif; ?>   
<?php get_footer(); ?> 