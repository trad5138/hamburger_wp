<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <artcle class="l-container">
        <header class="l-header">
            <div class="p-header_body c-bgcolor-header">
                <div class="p-header_title">
                    <h1 class="c-title-header">
                        <a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
                    </h1>
                </div>
                <?php get_search_form(); ?>
                <div class="p-button-menu">
                    <button id="js-sidebar-open" class="c-button-menu c-text-sidebar-menu">Menu</button>
                </div>
            </div>
        </header>
