<nav class="p-pagination">
    <div class="p-pagination_sp c-text-as-pagination">                        
        <?php
            $link = get_previous_posts_link('≪ 前へ');
            if($link):
                $link = str_replace('<a','<a class="p-pagination-float-left"',$link);
                echo $link;
            endif;
        ?>
        <?php
            $link = get_next_posts_link('次へ ≫');
            if($link):
                $link = str_replace('<a','<a class="p-pagination-float-right"',$link);
                echo $link;
            endif;
        ?>
        <div class="p-pagination-float-clear"></div>
    </div>
    <div> 
        <?php wp_pagenavi(); ?>
    </div>                    
</nav>