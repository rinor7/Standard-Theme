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

        <!-- Header no topbar w normal navmenu -->
        <header id="demoone" class="site-header">
            <!-- Top NAV -->
            <div class="topbar">
                <div class="container-fluid">
                    <div class="flex justify-end topbar-dir">
                        <?php
							wp_nav_menu( array( 
								'theme_location'    => 'menu-2',
							)); 
						?>
                        <?php if(is_active_sidebar('widget-2') ) { ?>
                        <div class="rightside_head-btn">
                            <ul>
                            <?php dynamic_sidebar('widget-2');?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Normal NAV -->
            <!-- <?php if (is_front_page() || is_404() ): ?> -->
            <div class="headerbar header-demo1" id="headerbar">
                <div class="container-fluid">
                    <div class="menu-here frontpage-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
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
                                'container_class'  => 'collapse navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>
                            
                            <div class="right-widget">
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
            <!-- <?php else: ?> -->
            <!-- other pages - different header -->
            <!-- <?php endif;?> -->
        </header><!-- #demoone -->

        <script>
        // Demo1 - Header with topbar
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("demoone").style.cssText = "top: 0px; transition: .5s";
            } else {
                document.getElementById("demoone").style.cssText =
                    "top: -31px; transition: .5s; box-shadow: 0px 10px 16px #1a1a2e10;";
            }
            prevScrollpos = currentScrollPos;
        }
        </script>