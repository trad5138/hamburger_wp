<?php get_header(); ?>
<main class="l-main">
    <div class="p-mainvisual-as-body c-image-as-main-visual-bg">
        <div class="p-mainvisual-as-title">
            <h2 class="c-title-as-main-visual">Menu:</h2>
            <h3 class="p-mainvisual-as-title_item c-title-as-main-visual-subtitle"><?php single_term_title(); ?></h3>
        </div>
    </div> 
    <article class="p-content c-bgcolor-content">        
        <section> 
            <?php if(!is_paged()):?>           
                <div class="p-content-archive-text c-text-as-base">        
                        <?php if(category_description()):?>
                            <?php echo category_description(); ?>
                        <?php endif;?>                    
                </div> 
            <?php endif;?>                                  
        </section>
        <section>
            <?php if(have_posts()): ?>
                <?php
                    while(have_posts()):
                        the_post(); ?> 
                        <?php get_template_part( 'template-parts/content', 'card' ); ?>
                <?php endwhile; ?>
            <?php //else: ?>
                <?php //get_template_part( 'template-parts/content-none' ); ?>  <!--//ページが無いことはないので削除-->
            <?php endif; ?>
            <?php get_template_part( 'template-parts/content','pagination' ); ?>    <!--//ページネーション-->
        </section>   
    </article>
</main> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>