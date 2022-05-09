<aside class="l-sidebar p-sidebar c-bgcolor-sidebar">
    <h2 class="p-sidebar-menu c-text-sidebar-menu">Menu</h2>
    <div class="p-button-close_body">
        <button id="js-sidebar-close" class="p-button-close c-button-close"><span>閉じるボタン</span></button>
    </div>
    <nav>        
        <?php wp_nav_menu(
				array(
				    'theme_location' => 'category_nav',
                    'container' => 'div',
                    'container_class' => 'p-sidebar-category_body',
                    'menu' => 'categorymenu',
                    //'manu_class' => 'p-sidebar-category',
                    //'manu_class' => 'p-sidebar-category&c-text-sidebar-category',
                    'items_wrap' => '<ul class="p-sidebar-category_inner c-text-sidebar-category">%3$s</ul>',
                    //'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'walker'  => new custom_walker_nav_menu
				)
			);
        ?>
    </nav>
</aside>
