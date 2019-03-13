<?php get_header(); 
// Template Name: Home

?> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="coisas">
        <div class="container">
            <div class="itens-empresa">
                <ul>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/local.png">Rod. MT 480, 2121-W, Jd. Morada do Sol, Tangará da Serra - MT, 78300-000</li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fone.png"><a href="#" style="text-decoration: none; color: #fff;">(65) 99987-6299</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/email.png">focotgamt@gmail.com</li>
                </ul>
            </div>
        </div>
</section>

<style>
.intro .load{
    animation: slide 2s;
    timing-function: step-end;
}
.intro { 
    background-image: url('<?php the_field('bg-home'); ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position: top;
    backface-visibility: hidden;
    height: 600px;
    width: 100%;
    animation: slide 20s linear infinite;
    animation-timing-function: step-end;
    position: relative;
}
@keyframes slide{
    0%{
        background-image: url('<?php the_field('bg-home2'); ?>');
    }
    20%{
        background-image: url('<?php the_field('bg-home3'); ?>');
    }
    40%{
        background-image: url('<?php the_field('bg-home4'); ?>');
    }
    60%{
        background-image: url('<?php the_field('bg-home5'); ?>');
    }
}
 
</style>
<section class="intro">
    <div class="load"></div>
    
</section>
    
    <section class="servicos container" data-anime"top">
              <h1>serviços</h1>
            <div class="servicos-item">
                    <a href="agricultura/">
                        <div class="img-services">
                            <img src="<?php the_field('img_agricultura') ?>">
                        </div>
                    </a>
                    <h2><?php the_field('agricultura_titulo') ?></h2>
            </div>
            <div class="servicos-item">
                <a href="solo/">
                    <div class="img-services">
                        <img src="<?php the_field('img_solo') ?>">
                    </div>
                </a>
                <h2><?php the_field('solo_titulo') ?></h2>
            </div>
            <div class="servicos-item">
                <a href="pecuaria/">
                    <div class="img-services">
                        <img src="<?php the_field('img_pecuaria') ?>">
                    </div>
                </a>
                <h2><?php the_field('pecuaria_titulo') ?></h2>
            </div>
            <div class="servicos-item">
                <a href="pesquisa/">
                    <div class="img-services">
                        <img src="<?php the_field('img_pesquisa') ?>">
                    </div>
                </a>
                <h2><?php the_field('pesquisa_titulo') ?></h2>
            </div>
                
    </section>
    
   <section class="BNE" data-anime="top">
       <div class="container">
           <h1>blog</h1>
        
        <?php
            global $post;
            $args = array( 'numberposts' => 6 );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>
            
                    

                    <div class="blog-itens">
                       <div class="blog-itens-single">
                           <div class="itens-noticia">


                                   <ul>
                                       <li>
                                            <?php the_post_thumbnail('post-thumbnail'); ?>
                                            <p style="color: white; margin-bottom:10px;"><?php the_title(); ?></p>
                                            <span>Publicado <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' atrás'; ?></span>
                                            <a href="<?php the_permalink(); ?>">leia mais</a>
                                        </li>
                                    </ul>
                          </div>
                </div>
           </div>     

        <?php endforeach;  ?>
        <?php wp_reset_postdata(); ?>
        </div>
             
    </section>
    
    <section class="pesquisas-depoimentos" data-anime="top">
        <div class="container">
            <div class="pesquisas-empresa">
               <header>pesquisas</header>
                <ul class="lista-pesquisa">
                   <?php if(have_rows('item_pesquisa')): while(have_rows('item_pesquisa')) : the_row(); ?>
                        <p>

                            <a href="<?php the_sub_field('file'); ?>"><?php the_sub_field('nome_pesquisa'); ?></a>

                        </p>
                        <span><?php the_sub_field('data_pesquisa'); ?></span>
                    <?php endwhile; else: endif; ?>                    
                </ul>
            </div>
            
            <div class="depoimentos-empresas" style="padding-top: 20px;">
                <header>depoimentos</header>
                <img src="<?php echo get_template_directory_uri(); ?>/img/aspas.png">
                <div class="depoimento-slide-single">
                  
                    <div class="depoimento-slide">
                        <?php if(have_rows('item_depoimento')): while(have_rows('item_depoimento')) : the_row(); ?>
                        <div>
                            <p><?php the_sub_field('depoimento_single'); ?></p>
                            <span><?php the_sub_field('nome_depoimento'); ?></span>
                        </div>
                        <?php endwhile; else: endif; ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="cotacao-links" data-anime="top">
        <div class="container">
           <header>cotações</header>
            <div class="cotacao">
                      <div style="display: inline-block;">
                           <iframe src="https://www.agron.com.br/widgets/dollar.php" max-width="100%;" width="100%;" height="150px;" scrolling="no" frameborder="0"></iframe>
                       </div>
                       <div style="display: block;">
                           <iframe src="https://www.agron.com.br/widget/cotacao.php"  max-width="100%;" width="200px;" height="280px;" scrolling="no" frameborder="0" id="iframe2"></iframe>
                       </div>
                      
            </div>
            
            <div class="links-uteis">
                <header>links úteis</header>
                <div class="all-links">
                    <a href="https://www.embrapa.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/retangulo.png">embrapa</a>
                    <a href="http://aprosojabrasil.com.br/2014/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/retangulo.png">aprosoja</a>
                    <a href="https://agrural.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/retangulo.png">agrural</a>
                    <a href="http://www.safras.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/retangulo.png">safras e mercado</a>
                    <a href="https://www.agrolink.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/retangulo.png">agro link</a>
                    <a href="http://www.centrograos.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/retangulo.png">centro grãos</a>
                </div>
            </div>
        </div>
    </section>
    
    <?php include(TEMPLATEPATH . '/inc/contador.php'); ?>
    
    <section class="videos">
        <div class="container">
           <div class="slider-videos">
               <?php if(have_rows('item_video')): while(have_rows('item_video')) : the_row(); ?>
                <div class="videos-single">
                    <iframe class="iframevideo" id="ytplayer" height="400px" src="<?php the_sub_field('url_video'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <p><?php the_sub_field('titulo_video'); ?></p>
                </div>
               <?php endwhile; else: endif; ?>
            </div>
        </div>
    </section>
    <?php endwhile; else: endif; ?>
 <?php get_footer(); ?>    

