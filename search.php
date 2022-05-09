<?php get_header(); ?>
<main class="l-main">
    <div class="p-mainvisual-as-body c-image-as-main-visual-bg">
        <div class="p-mainvisual-as-title">
            <h2 class="c-title-as-main-visual">Search:</h2>
            <h3 class="p-mainvisual-as-title_item c-title-as-main-visual-subtitle">
                <?php the_search_query(); ?>
            </h3>
        </div>
    </div> 
    <article class="p-content c-bgcolor-content">
        <?php if(empty(get_search_query())): ?>
            <div class="p-content-text c-text-as-base">
                <?php echo '<p>検索キーワードが未入力です。</p>'; ?>
            </div>
        <?php else: ?>
            <?php if(have_posts()): ?>
                <section>
                    <h3 class="c-title-as-content">「<?php the_search_query(); ?>」の検索結果</h3>
                    <div class="p-content-text c-text-as-base">
                        <p><?php echo $wp_query->found_posts; ?>件の記事が見つかりました。</p>
                    </div>                    
                </section>
                <section>
                    <?php while( have_posts() ):
                                the_post(); ?>
                                <?php get_template_part( 'template-parts/content','card' ); ?>
                    <?php endwhile; ?>
                </section>
                <?php get_template_part( 'template-parts/content','pagination' ); ?>    <!--//ページネーション-->
            <?php else: ?>
                <section>
                    <?php get_template_part( 'template-parts/content','searchnone' ); ?> <!--//記事がない時-->
                </section>
            <?php endif; ?>
        <?php endif; ?>
    </article>
</main> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>