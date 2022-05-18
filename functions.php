<?php

    function hamburger_theme_setup(){
        //load_theme_textdomain( 'hamburger', get_template_directory() . '/languages' );
    
        /**
         * テーマサポート
         */
        /**
        * タイトルタグ
        */
        add_theme_support( 'title-tag' );

        /**
        * アイキャッチ画像を取得
        */
        add_theme_support( 'post-thumbnails' ); 
    
        /**
        * カスタムロゴの設定
        */
        add_theme_support( 'custom-logo' );

        /**
		 * Add post-formats support.
		 */
		//add_theme_support(
			//'post-formats',
			//array(
			//	'link',
			//	'aside',
			//	'gallery',
			//	'image',
			//	'quote',
			//	'status',
			//	'video',
			//	'audio',
			//	'chat',
			//)
		//);

        /**
         * ブロックエディターサポート
         */
        add_theme_support( 'wp-block-styles' );

        /**
        * 動画などのレスポンシブ対応サポート
        */
        add_theme_support( 'responsive-embeds' ); 

        /**
        * 画像などの幅（幅広・全幅）の設定サポート
        */    
        add_theme_support( 'align-wide' ); 

        /**
        * カラーパレットの設定サポート
        */    
        add_theme_support( 'editor-color-palette',
            array(
                array(
                    'name' => 'ライトブラウン',
                    'slug' => 'light-brown',
                    'color' => '#9d8670',
                ),
                array(
                    'name' => 'ダークブラウン',
                    'slug' => 'dark-brown',
                    'color' => '#3c2a10',
                ),  
                array(
                    'name' => 'ブラックブラウン',
                    'slug' => 'black-brown',
                    'color' => '#3c2b1c',
                ), 
                array(
                    'name' => 'サンド',
                    'slug' => 'sand',
                    'color' => '#f2ede9',
                ),  
                array(
                    'name' => 'グレー',
                    'slug' => 'gray',
                    'color' => '#787878',
                ),   
                array(
                    'name' => 'ジェミニグレー',
                    'slug' => 'gemini-gray',
                    'color' => '#707070',
                ), 
                array(
                    'name' => 'ブラック',
                    'slug' => 'black',
                    'color' => '#000000',
                ), 
                array(
                    'name' => 'ホワイト',
                    'slug' => 'white',
                    'color' => '#ffffff',
                ),  
                array(
                    'name' => 'アイボリー',
                    'slug' => 'ivory',
                    'color' => '#fffdfa',
                ),
                array(
                    'name' => 'ホワイトスモーク',
                    'slug' => 'whitesmoke',
                    'color' => '#f5f5f5',
                ), 
                array(
                    'name' => 'シーシェル',
                    'slug' => 'seashell',
                    'color' => '#fff7ef',
                ), 
                array(
                    'name' => 'ブルー',
                    'slug' => 'blue',
                    'color' => '#4a6c9b',
                ),                 
            )    
        ); 

        /**
        * フォントサイズの設定サポート
        */    
        add_theme_support( 'editor-font-sizes',
            array(
                array(
                    'name' => '小',
                    'size' => 14,
                    'slug' => 'small',
                ),
                array(
                    'name' => '標準',
                    'size' => 16,
                    'slug' => 'normal',
                ),
                array(
                    'name' => '中',
                    'size' => 20,
                    'slug' => 'medium',
                ),
                array(
                    'name' => '大',
                    'size' => 22,
                    'slug' => 'large',
                ),
                array(
                    'name' => 'x-大',
                    'size' => 24,
                    'slug' => 'x-large',
                ),
                array(
                    'name' => 'xx-大',
                    'size' => 28,
                    'slug' => 'xx-large',
                ),
                array(
                    'name' => '3x-大',
                    'size' => 30,
                    'slug' => '3x-large',
                ),
                array(
                    'name' => '4x-大',
                    'size' => 34,
                    'slug' => '4x-large',
                ),
                array(
                    'name' => '5x-大',
                    'size' => 36,
                    'slug' => '5x-large',
                ),
                array(
                    'name' => '6x-大',
                    'size' => 40,
                    'slug' => '6x-large',
                ),
                array(
                    'name' => '7x-大',
                    'size' => 41,
                    'slug' => '7x-large',
                ),
                array(
                    'name' => '8x-大',
                    'size' => 44,
                    'slug' => '8x-large',
                ),
                array(
                    'name' => '9x-大',
                    'size' => 60,
                    'slug' => '9x-large',
                ),
                array(
                    'name' => 'ax-大',
                    'size' => 64,
                    'slug' => 'ax-large',
                ),
            )    
        ); 

        /**
        * 独自のエディタスタイルの設定
        */ 
        add_theme_support( 'editor-styles' ); 
        add_editor_style( 'css/editor-style.css' );
        add_editor_style( 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;900&display=swap' );
        add_editor_style( 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap' );
    

        /**
        * 背景の色の設定サポート
        */ 
        add_theme_support( 'custom-background',
            array(
                //'default-color' => 'FFFFFF',
                'default-color'          => '',
                'default-image'          => '',
                'default-repeat'         => '',
                'default-position-x'     => '',
                'default-attachment'     => '',
                'wp-head-callback'       => '_custom_background_cb',
                'admin-head-callback'    => '',
                'admin-preview-callback' => '',         
            )
        );
        
        /**
        * カスタムヘッダーの設定サポート
        */    
        add_theme_support( 'custom-header',
            array(
                'default-image'          => '',
                'random-default'         => false,
                'width'                  => 0,
                'height'                 => 0,
                'flex-height'            => false,
                'flex-width'             => false,
                'default-text-color'     => '',
                'header-text'            => true,
                'uploads'                => true,
                'wp-head-callback'       => '',
                'admin-head-callback'    => '',
                'admin-preview-callback' => '',        
            )
        ); 

        /**
        * html5の設定サポート
        */  
        add_theme_support( 'html5',
            array(
             'search-form',
             'comment-form',
             'comment-list',
             'gallery',
             'caption',       
            )
        );

        /**
        * メニュー
        */ 
        register_nav_menus( 
            array(
                'footer_nav' => esc_html__('footer navigation','hamburger'),
                'category_nav' => esc_html__('category navigation','hamburger'),
            )
        );
    
    }
    
    add_action( 'after_setup_theme','hamburger_theme_setup' );

    //カテゴリー説明文でHTMLタグを使う
    remove_filter( 'pre_term_description', 'wp_filter_kses' );

    //カテゴリー説明文から自動で付与されるpタグを除去
    remove_filter( 'term_description', 'wpautop' );

    /**
    * タイトル出力
    */   
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo('name', 'display');
        } elseif ( is_singular() ) {        //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    /**
     * フォント・css・javascript・jQuery 読み込み
     */
    function hamburger_script() {
        //wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;900&display=swap', array() );
        wp_enqueue_style( 'mplus1m', '//mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css', array() );
        wp_enqueue_style( 'mplus1m-j', '//mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css', array() );
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', array() );
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );
        wp_enqueue_style( 'hamburger-style', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'burger', get_theme_file_uri('/js/burger.js') ,array('jquery') ,'',true); //true で bodyタグ閉じ前で読み込み
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    /**
    * 投稿表示用のスタイリング-editor-style.css
    */
    function hamburger_theme_add_editor_styles(){
        add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
    }
    add_action( 'admin_init','hamburger_theme_add_editor_styles');

    /**
    * フィードの設定
    */
    add_theme_support( 'automatic-feed-links' );

    /**
    * アイキャッチ画像あり、無の場合の画像の設定
    */
    function eyechatch_set() {
        if (has_post_thumbnail()):
            $id = get_post_thumbnail_id();
            $img = wp_get_attachment_image_src( $id, 'large');
        elseif ( is_single()): //シングルページなら
                $img = array(get_template_directory_uri() . '/images/single-pc.png');
        elseif ( is_page()):        //固定ページなら
                $img = array(get_template_directory_uri() . '/images/shop-pc.png');
        elseif ( is_front_page() || is_home() ): //トップページなら
                $img = array(get_template_directory_uri() . '/images/mainvisual-pc.jpg');
        elseif ( is_archive() || is_search()): //アーカイブページorサーチページなら
                $img = array(get_template_directory_uri() . '/images/card-pc.png');
        else:   //サムネイルない場合
            $img = array(get_template_directory_uri() . '/images/card-pc.png');
        endif;
        
        return $img;
    }

    /**
    * カスタムウォーカー サイドバーの階層メニュー表示の設定
    */
    class custom_walker_nav_menu extends Walker_Nav_Menu {
        function start_lvl(&$output, $depth = 0, $args = array()) {
          $output .= '<ul class="p-sidebar-category-item_body c-text-sidebar-item">';
        }
        function end_lvl(&$output, $depth = 0, $args = array()) {
            $output .= '</ul>';
         }
    }

    /**
    * カスタム投稿
    */ 
    add_action( 'init', function() {
        //フロントページのメインヴィジュアルとタイトルテキスト入力
        register_post_type('toptitle', [
        'label' => 'トップページタイトルと画像',   //管理画面表示名
        'public' => true,     //管理画面に表示する
        'menu_position' => 20,  //管理画面の表示位置--メディアの下
        'menu_icon' => 'dashicons-pets', //アイコンの設定
        'supports' => ['title','thumbnail'],
        'show_in_rest' => true
        ]);

        //mapの設定とmapの上の見出しテキスト入力のカスタム投稿
        register_post_type('map', [
            'label' => '地図と地図上テキスト',   //管理画面表示名
            'public' => true,     //管理画面に表示する
            'menu_position' => 20,  //管理画面の表示位置--メディアの下
            'menu_icon' => 'dashicons-pets', //アイコンの設定
            //'supports' => ['title','editor','custom-fields'],
            'supports' => ['title','editor'],
            'show_in_rest' => true
        ]);
    });

    /*
    * カスタムフィールド
    */
    function add_mapdetail_fields() {
        add_meta_box(
            'map_setting',              //カスタムフィールドブロックに割り当てるID名
            '地図情報',                  //カスタムフィールドのタイトル
            'insert_mapdetail_fields',  //入力エリアの HTML
            'map',                      //投稿タイプ。サンプルでは カスタムタクソノミー名。他に post 等が指定可能
            'normal'                    //カスタムフィールドが表示される部分
        );
    }
    add_action( 'admin_menu', 'add_mapdetail_fields' );

    //カスタムフィールド入力エリアの設定（地図情報：googleマップコード）
    function insert_mapdetail_fields() {
        global $post;
        $map = get_post_meta( $post->ID, 'map', true );        
        echo '<form method="post" action="admin.php?page=site_settings">';
        echo '<label for="map_code">googleマップコード：</label><br>';
        echo '<textarea name="map_code" id="map_code" rows="4"  style="width:100%;">'.get_post_meta( $post->ID, 'map_code', true ).'</textarea>';
        echo '</form>'; 
    }

    //カスタムフィールドの値を保存
    function save_custom_fields( $post_id ) {
        if( !empty( $_POST['map_code'] ) ){
            update_post_meta( $post_id, 'map_code', $_POST['map_code'] );
        } else {
            delete_post_meta( $post_id, 'map_code' );
        }
    }
    add_action( 'save_post', 'save_custom_fields' );
    
    //本体ギャラリーCSS停止
    add_filter( 'use_default_gallery_style', '__return_false' );
    
    // サーチフォームに全角スペース入力を半角スペースに変換する関数
    function hamburger_searchform_blank_change($query) {
        if( is_admin() || ! $query->is_main_query() ){
            return;
        }
    
        if ($query->is_search()) {
            $query->set('post_type', 'post');
            //全角スペースを半角スペースに
            $s = $query->get( 's' );
            $s = str_replace('　',' ', $s );
            $query->set( 's', $s );
        }
    }
    add_action( 'pre_get_posts', 'hamburger_searchform_blank_change' );

    // サーチフォームに空欄・スペース検索の結果を変更する関数（結果非表示）
    function hamburger_searchform_empty_and_blank( $search, \WP_Query $q ) {
        if ( $q->is_search() && $q->is_main_query() && ! $q->is_admin() ) {
            $s = $q->get( 's' );
            $s = trim( $s );
            if ( empty( $s ) ) {
                $search .=" AND 0=1 ";
            }
        }
        return $search;
    }
    add_filter( 'posts_search', 'hamburger_searchform_empty_and_blank', 10, 2 );    
    
?>