        <footer class="l-footer c-image-footer-bg">
            <nav>
                <ul class="p-footer-nav c-text-footer-nav"> 
                    <?php
                        $menu_name = 'footer_nav';
                        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
                            //メニューIDを取得
                            $locations = get_nav_menu_locations();
                            $menu = wp_get_nav_menu_object( $locations[$menu_name] );
                            $menu_items = wp_get_nav_menu_items( $menu -> term_id );
                    ?>        
                            <?php foreach($menu_items as $items): ?>
                                <li><a href="<?php echo esc_attr( $items -> url ); ?>"><?php echo esc_html( $items -> title ); ?></a></li>
                            <?php endforeach; ?> 
                        <?php endif; ?>               
                </ul>
            </nav>
            <div class="p-copyright">
                <p class="c-text-footer-copyright">Copyright: RascTech</p>
            </div>
        </footer>
        <div class="p-menu-bg c-bgcolor-menu-bg"></div>
    </article>
    <?php wp_footer(); ?>
</body>
</html>