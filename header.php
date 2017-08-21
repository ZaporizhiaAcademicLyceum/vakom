<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- favicon-begin -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon-end -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="<?php //echo esc_url(home_url('/')); ?>"
               rel="home"><?php //bloginfo('name'); ?>Академічний ліцей</a>-->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <?php
            if (has_nav_menu('left-menu')) :
                wp_nav_menu(array(
                    'container' => false,
                    'depth' => 2,
                    'menu_class' => 'nav navbar-nav',
                    'theme_location' => 'left-menu',
                    'walker' => new BS_Nav_Menu()
                ));
            endif; ?>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a title="Вконтакте" href="https://vk.com/id14432507"><i class="fa fa-vk"></i></a>
                </li>
                <li>
                    <a title="Facebook" href="https://www.facebook.com/vkomisarov"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a title="Google+" href="https://plus.google.com/u/0/118064018825389637098"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                    <a title="Twitter" href="https://twitter.com/Vakom1960"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a title="YouTube" href="https://www.youtube.com/channel/UCsg2us3mzEHW7z189LluWEw"><i class="fa fa-youtube-play"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>