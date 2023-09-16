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
    <meta name="description" content="Build your own ecommerce shop">
    <!-- <meta name=”robots” content=”noindex, follow”> -->
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" href="src/img/apple.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <!-- Header with Logo in Center -->
        <header id="logo-center-header" class="site-header">
            <?php if (is_front_page() || is_404() || is_single() ): ?>
            <div class="headerbar center-logo-header" id="headerbar">
                <div class="container-fluid">
                    <div class="menu-here frontpage-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">
                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-left-logocenter',
                                'menu_id'        => 'left-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'd-none-mobile collapse navbarNavleft navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>
                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>
                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-right-logocenter',
                                'menu_id'        => 'right-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'd-none-mobile collapse navbarNavright navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>
                            <div class="mobile-menu d-none-desktop">
                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'mobile-menu-logo-center',
                                'menu_id'        => 'center-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbarNavright navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <!-- <span class="menu-global menu-middle"></span> -->
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <div class="right-widget right-widget-centerlogo d-none-mobile">
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
            <?php else: ?>
            <div class="headerbar center-logo-header" id="headerbar">
                <div class="container-fluid">
                    <div class="menu-here otherpages-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">
                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-left-logocenter',
                                'menu_id'        => 'left-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbarNavleft navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>
                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>
                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-right-logocenter',
                                'menu_id'        => 'right-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbarNavright navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <!-- <span class="menu-global menu-middle"></span> -->
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <div class="right-widget right-widget-centerlogo d-none-mobile">
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
            <?php endif;?>
        </header>

        <div class="site-custom">
            <script> 
            $(document).ready(function() {
                function updatePadding() {
                    if ($(window).width() <= 976) {
                        var headerHeight = $('#headerbar').outerHeight();
                        $('.site-custom').css('padding-top', headerHeight + 'px');
                    } else {
                        $('.site-custom').css('padding-top', '');
                    }
                }
                updatePadding();
                $(window).resize(updatePadding);
            });
            </script>