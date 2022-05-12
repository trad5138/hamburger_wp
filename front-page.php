<?php get_header(); ?>
<main class="l-main">
    <?php $eyecatch = eyechatch_set(); ?>
    <div class="p-mainvisual-body" style="background-image: url(<?php echo $eyecatch[0]; ?>)">
        <?php 
            //メインビジュアル上のタイトルエリア
            $toptitle_args = array(
                'post_type' => 'toptitle',  //カスタム投稿
                'posts_per_page' => 1
            );
            $toptitle_new_query = new WP_Query( $toptitle_args );
            if ( $toptitle_new_query->have_posts() ) :
                while ( $toptitle_new_query->have_posts() ) :
                    $toptitle_new_query->the_post();
        ?>
                    <h2 class="p-mainvisual_title c-title-main-visual"><?php the_title(); ?></h2>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <h2 class="p-mainvisual_title c-title-main-visual">ダミーサイト</h2>
            <?php endif; ?>  
    </div> 
    <article> 
        <div class="p-service-menu c-bgcolor-service-menu">
            <ul class="p-service-menu_body">
                <li class="p-service-menu_inner c-image-service-menu-bg_takeout">
                    <h3 class="p-service-menu_title c-title-service-menu"><a href="<?php echo esc_url( home_url( 'category/takeout') ); ?>">Take Out</a></h3>
                    <div class="p-service-menu_content">
                        <?php 
                            $takeout_args = array(
                                'post_type' => 'post',
                                'category_name' => 'takeout',
                                'posts_per_page' => 2,
                                'order' => 'asc',
                                //'orderby' => 'date',
                            );

                            $tekeout_new_query = new WP_Query( $takeout_args );
                            if ( $tekeout_new_query->have_posts() ) :
                                while ( $tekeout_new_query->have_posts() ) :
                                    $tekeout_new_query->the_post();
                                    get_template_part( 'template-parts/content', 'frontmenu' );
                                endwhile;
                                wp_reset_postdata();                             
                            endif;
                         ?>
                    </div>
                </li>
                <li class="p-service-menu_inner c-image-service-menu-bg_eatint">
                    <h3 class="p-service-menu_title c-title-service-menu"><a href="<?php echo esc_url( home_url( 'category/eatin') ); ?>">Eat In</a></h3>
                    <div class="p-service-menu_content">
                        <?php 
                            $takeout_args = array(
                                'post_type' => 'post',
                                'category_name' => 'eatin',
                                'posts_per_page' => 2,
                                'order' => 'asc',
                                //'orderby' => 'date',
                            );

                            $tekeout_new_query = new WP_Query( $takeout_args );
                            if ( $tekeout_new_query->have_posts() ) :
                                while ( $tekeout_new_query->have_posts() ) :
                                    $tekeout_new_query->the_post();
                                    get_template_part( 'template-parts/content', 'frontmenu' ); 
                                endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </article> 
    <section>
        <div class="p-access-map">
            <div class="p-access-map_inner">
                <?php 
                    //map上のテキストエリア
                    $map_args = array(
                        //'post_type' => 'page', //固定ページ
                        'post_type' => 'map',  //カスタム投稿
                        //'pagename' => 'news'  //固定ページのタイトル「お知らせ」
                        'posts_per_page' => 1
                    );

                    $map_new_query = new WP_Query( $map_args );
                    if ( $map_new_query->have_posts() ) :
                        while ( $map_new_query->have_posts() ) :
                            $map_new_query->the_post();
                            $googlemap = get_post_meta(get_the_ID(),'map_code',true);
                            get_template_part( 'template-parts/content', 'access' );
                            //$googlemap = get_post_meta(get_the_ID(),'地図',true);
                            //$googlemap = get_post_meta(get_the_ID(),'map_code',true);
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>
            <?php 
                if ($googlemap !== ''):
                    echo $googlemap;
                else: ?>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747975468375!2d139.74324421554965!3d35.658580480199454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1645107480843!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <?php endif; ?>
        </div>
    </section> 
</main> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>