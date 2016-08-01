<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/wp-content/themes/mktz_CDCorretor/assets/css/plugins/remodal/remodal.css" rel="stylesheet" />
    <link href="/wp-content/themes/mktz_CDCorretor/assets/css/plugins/remodal/remodal-default-theme.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() . '/style.css'; ?>" rel="stylesheet" />

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
    <div class="container">

        <div class="logo">
            <a href="/">Casa do Corretor</a>
        </div>

        <div class="menu-wrapper">
            <?php wp_nav_menu(array(
                'menu' => 'header_menu'
            )); ?>
        </div>

    </div><!-- .container -->
</div><!-- #header -->

<div id="menu-mobile">

    <div class="open">
        <div class="title">MENU</div>
        <div class="icon">
            <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
            </svg>
        </div>
    </div>

    <div class="wrapper">

        <?php wp_nav_menu(array(
            'menu' => 'header_menu',
            'menu_class' => 'header-mobile-menu'
        )); ?>

        <div class="close">
            <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
            </svg>
        </div>
    </div>

</div>