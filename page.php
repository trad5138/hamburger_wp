<?php get_header(); ?>
<main class="l-main c-bgcolor-content">
    <?php
        if(have_posts()):
            while( have_posts() ): the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php $eyecatch = eyechatch_set(); ?>   <!-- アイキャッチ取得表示 -->
                    <div class="p-mainvisual-single-body" style="background-image: url(<?php echo $eyecatch[0]; ?>)">
                        <div class="p-mainvisual-single-title">
                            <h1 class="c-title-si-main-visual"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        </div>
                    </div>
                    <article class="p-content-si c-bgcolor-content c-text-si-base">
                        <?php the_content(); ?> <!-- 投稿の本文を取得表示 -->	
                        <?php wp_link_pages(); ?>
                    </article>
                </div> 
            <?php endwhile; ?>
        <?php //else:?>
        <!--<p><?php //esc_html_e( 'no post data', 'hamburger' ); ?></p>-->  <!--//固定ページはページが無いことはないので削除-->
    <?php endif; ?>
</main> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>