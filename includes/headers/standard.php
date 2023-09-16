<?php
/**
 * @package Standard
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <meta charset="<?php bloginfo( 'charset' ); ?>"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <meta name=”robots” content=”noindex, follow”> -->
    <meta name="description" content="Build your own ecommerce shop">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" href="src/img/apple.png">    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header-navmenu-custom">
    <?php wp_nav_menu(
        array(
        'theme_location'    => 'menu-1',
        'menu_id'        => 'primary-menu',
        'menu_class'        => 'navbar-nav',
        'container_class'  => 'collapse navbar-collapse main-nav-toggle d-none-desktop',
        'container_id'    => 'navbarNav',
        )
        ); 
    ?>
    <button class="d-none-desktop navbar-toggler navbar-toggler-standard" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <div class="menu-m">
            <span class="menu-global menu-top menu-top-custom"></span>
            <!-- <span class="menu-global menu-middle"></span> -->
            <span class="menu-global menu-bottom menu-bottom-custom"></span>
        </div>
    </button>
</div>

    <div id="page" class="site">
        <!-- Header Canvas Menu -->
        <header id="canvas-menu-header" class="site-header">
            <?php if (is_front_page() ): ?>
            <div class="headerbar standard-header" id="headerbar">
                <div class="container">
                    <div class="menu-here frontpage-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>

                            <button class="navbar-toggler navbar-toggler-standard" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <!-- <span class="menu-global menu-middle"></span> -->
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbar-collapse main-nav-toggle d-none-mobile',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>

                            <div class="right-widget d-none-mobile">
                            <?php if(is_active_sidebar('header-widget') ) { ?>
                            <ul>
                            <?php dynamic_sidebar('header-widget');?>
                            </ul>
                            <?php } ?>
                            </div>  

                        </nav>
                    </div>
                </div>
            </div>
            <?php elseif (is_single() || is_404() ): ?>
                <div class="headerbar standard-header" id="headerbar">
                <div class="container">
                    <div class="menu-here single-404">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>

                            <button class="navbar-toggler navbar-toggler-standard" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <!-- <span class="menu-global menu-middle"></span> -->
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbar-collapse main-nav-toggle d-none-mobile',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>

                        </nav>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <div class="headerbar standard-header" id="headerbar">
                <div class="container">
                    <div class="menu-here otherpages-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>

                            <button class="navbar-toggler navbar-toggler-standard" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <!-- <span class="menu-global menu-middle"></span> -->
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbar-collapse main-nav-toggle d-none-mobile',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>

                        </nav>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </header>
