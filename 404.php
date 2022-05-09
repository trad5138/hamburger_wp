<?php get_header(); ?>
<main class="l-main">
    <div class="p-content-si c-bgcolor-content">
        <div class="p-content-si-block">
            <h1 class="c-title-si-h2">ページが見つかりません</h1>
        </div>
        <div class="p-content-si-block c-text-404">
            <p>お探しのページは、移動もしくは削除された可能性があります。<br>
            サイト内検索、もしくは<a href="<?php echo esc_url( home_url('/') ); ?>" class="c-text-si-link">トップページ</a>よりお探しください。</p>
        </div>
    </div>
</main> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>