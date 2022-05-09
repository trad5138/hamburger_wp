<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="p-card c-bgcolor-card">
        <a href="<?php the_permalink(); ?>">
            <figure class="p-card_body">
                <div class="p-card-image">
                    <?php $eyecatch = eyechatch_set(); ?>
                    <img src="<?php echo $eyecatch[0]; ?>">
                </div>
                <figcaption class="p-card-item">
                    <h3 class="p-card-item-title c-title-as-card"><!--<a href="<?php //the_permalink(); ?>">--><?php the_title(); ?><!--</a>--></h3>
                    <?php
                        //contentから100文字分取得（htmlタグは除く）                            
                        if(mb_strlen($post->post_content, 'UTF-8')>200){
                            $content= mb_substr(strip_tags($post->post_content), 0, 200, 'UTF-8');
                            $content= $content.'…';
                        }else{
                            $content= strip_tags($post->post_content);
                        }

                        //改行の特殊文字をすべてのパターンに対応できるように統一する
                        $content = str_replace(["\r\n", "\r", "\n"], "\n", $content);
                        
                        //配列に変換（先頭行と2行目移行を分けるため）
                        $array = explode("\n", $content);

                        //空白の配列を削除（空白行を削除）
                        $array = array_filter($array, "strlen");

                        //配列の連番に振り直す
                        $array = array_values($array);

                        //2行目以降の取り出し（配列2つ目の要素～最後まで）
                        $arraysecondlast = array_slice($array,1);

                        //配列を文字列に変換
                        $strcontents = implode($arraysecondlast);
                    ?>
                    <h4 class="p-card-item-subtitle c-title-as-card-subtitle"><?php echo $array[0]; ?></h4>
                    <div class="p-card-item-text .c-text-as-card">
                        <p><?php echo $strcontents; ?></p>
                        <?php //the_excerpt(); ?>  
                        <?php //the_content(""); ?>
                    </div>
                    <div class="p-button-card">
                        <button class="c-button-card c-text-as-card-button"><!--<a href="<?php //the_permalink(); ?>">-->詳しく見る<!--</a>--></button>
                    </div>
                </figcaption>
            </figure>
        </a>
    </div>
</div>