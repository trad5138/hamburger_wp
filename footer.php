        <footer class="l-footer c-image-footer-bg">
            <?php
                $menu_name = 'footer_nav';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object( $locations[$menu_name] );
                $menu_items = wp_get_nav_menu_items( $menu -> term_id );
            ?> 
            <nav>
                <ul class="p-footer-nav c-text-footer-nav">
                    <?php foreach($menu_items as $item): ?>
                        <li><a href="<?php echo esc_attr( $item -> url ); ?>"><?php echo esc_html( $item -> title ); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <!-- 下の コードでもfooterメニューは表示された -->
            <?php //wp_nav_menu(   
				//array(
					//'theme_location' => 'footer_nav',
                    //'container' => 'div',
                    //'container_class' => 'c-text-footer-nav',
                    //'menu' => 'footer-menu',
                    //'manu_class' => 'p-footer-nav',
                    //'items_wrap' => '<ul class="p-footer-nav">%3$s</ul>',
				//)
			//); ?> 
            <div class="p-copyright">
                <p class="c-text-footer-copyright">Copyright: RascTech</p>
            </div>
        </footer>
        <div class="p-menu-bg c-bgcolor-menu-bg"></div>
    </article>
    <?php wp_footer(); ?>
</body>
</html>