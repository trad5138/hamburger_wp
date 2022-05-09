jQuery(function($) {

    /***** スマホ・タブレット ヘッダー部 メニューボタン クリック サイドバー 表示 *****/
    $("#js-sidebar-open").on("click", function() {
        $(".p-sidebar").toggleClass("is-open");
        $(".p-menu-bg").toggleClass("is-open");
        $( "body" ).toggleClass( "is-open" );

    });

    /***** スマホ・タブレット サイドバー部 「×」ボタン クリック サイドバー 非表示 *****/
    $("#js-sidebar-close").on("click", function() {
        $(".p-sidebar").toggleClass("is-open");
        $(".p-menu-bg").toggleClass("is-open");
        $( "body" ).toggleClass( "is-open" );
    });

    /***** スマホ・タブレット 画面サイズ変わったらサイドバー 非表示 *****/
    $(window).resize(function() {
        $(".p-sidebar").removeClass("is-open");
        $(".p-menu-bg").removeClass("is-open");
        $( "body" ).removeClass( "is-open" );
    });
});

