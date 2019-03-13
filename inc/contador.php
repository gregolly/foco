<section class="contador" data-anime="bottom">
        <div class="container">
          <?php if(have_rows('item_contador')): while(have_rows('item_contador')) : the_row(); ?>
           <div class="contador-container">
                <div class="contador-numero">
                    <div class="count"><?php the_sub_field('numero_contador'); ?></div>
                </div>
                <p><?php the_sub_field('texto_contador'); ?></p>
            </div>
           <?php endwhile; else: endif; ?> 
           <div class="clear"></div>
        </div>
</section>