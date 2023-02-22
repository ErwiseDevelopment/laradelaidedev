<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- fontawesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- fontmontserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- fontlato -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    <!-- top -->
    <?php echo get_template_part( 'template-parts/content', 'top' ) ?>
    <!-- end top -->

    <header id="masthead" class="l-header site-header navbar-static-top position-relative pt-2 pb-4 <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">

        <div class="container-fluid">

            <nav class="l-navbar navbar navbar-expand-xl justify-content-center p-0">

                <div class="col-8 col-md-2 mb-3 mb-md-0">
                    <div class="navbar-brand">
                        <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                <img class="l-navbar__brand" src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row">

                        <div class="col-12">
                            
                            <div class="row justify-content-between">

                                <div class="col-lg-7 order-2 order-lg-1">

                                    <ul class="d-lg-flex mb-0 pl-0">

                                        <li class="u-list-style-none my-3 my-lg-0">

                                            <a 
                                            class="d-flex align-items-center text-decoration-none" 
                                            href="#">
                                                <span class="px:u-w-25 px:u-h-25 rounded-pill u-icon__free u-icon__envelope d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-14 u-font-weight-semibold u-color-folk-white u-bg-folk-medium-electric-blue">
                                                    Envelope
                                                </span>

                                                <span class="u-font-size-14 u-font-weight-medium u-color-folk-aluminium pl-2">
                                                    centroancora@copiosaredencao.org.br
                                                </span>
                                            </a>
                                        </li>

                                        <li class="u-list-style-none my-3 my-lg-0 ml-lg-3">

                                            <a 
                                            class="d-flex align-items-center text-decoration-none" 
                                            href="#">
                                                <span class="px:u-w-25 px:u-h-25 rounded-pill u-icon__free u-icon__phone d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-14 u-font-weight-semibold u-color-folk-white u-bg-folk-medium-electric-blue">
                                                    Telefone
                                                </span>

                                                <span class="u-font-size-14 u-font-weight-medium u-color-folk-aluminium pl-2">
                                                    222 000 7777
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-3 d-flex justify-content-between justify-content-lg-start order-1 order-lg-2">

                                    <ul class="d-flex mb-0 pl-0">

                                        <li class="u-list-style-none">
                                            <a
                                            class="u-icon__brands u-icon__facebook-square u-font-size-0 before::u-font-size-22 u-font-weight-light text-decoration-none u-color-folk-medium-electric-blue hover:u-color-folk-golden"
                                            href="#"
                                            target="_blank"
                                            rel="noreferrer noopener">
                                                Link do Facebook
                                            </a>
                                        </li>

                                        <li class="u-list-style-none ml-3">
                                            <a
                                            class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-22 u-font-weight-light text-decoration-none u-color-folk-medium-electric-blue hover:u-color-folk-golden"
                                            href="#"
                                            target="_blank"
                                            rel="noreferrer noopener">
                                                Link do Instagram
                                            </a>
                                        </li>
                                    </ul>

                                    <span class="u-icon__free u-icon__search d-block d-lg-none u-font-size-0 before::u-font-size-22 u-font-weight-semibold u-color-folk-medium-electric-blue hover:u-color-folk-golden js-search">
                                        Pesquisar
                                    </span>
                                </div>
                            </div>

                            <hr>
                        </div>

                        <div class="col-12 d-flex">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location'  => 'primary',
                                    'container'       => 'div',
                                    'container_id'    => 'main-nav',
                                    'container_class' => 'collapse navbar-collapse justify-content-start',
                                    'menu_id'         => false,
                                    'menu_class'      => 'navbar-nav',
                                    'depth'           => 3,
                                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                    'walker'          => new wp_bootstrap_navwalker()
                                ));
                            ?>

                            <span class="u-icon__free u-icon__search d-none d-lg-block before::u-font-size-40 u-font-weight-semibold u-color-folk-black u-cursor-pointer u-color-folk-aluminium js-search"></span>
                        </div>
                    </div>
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>

        <div class="l-search-box js-search-box py-3">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <form method="GET" action="<?php echo get_home_url( null, '/' ) ?>">
 
                            <div class="row justify-content-lg-center">

                                <div class="col-10 col-lg-8 order-1">
                                    <input
                                    class="w-100 border-0 shadow rounded d-block u-font-size-14 u-font-weight-regular u-font-style-italic u-color-folk-aluminium py-2 px-3"
                                    type="search"
                                    name="s"
                                    placeholder="Pesquisar...">
                                </div>

                                <div class="col-10 col-lg-2 order-3 order-lg-2 mt-3 mt-lg-0">
                                    <input
                                    class="w-100 border rounded d-block u-font-size-14 u-font-weight-bold text-center u-color-folk-white u-bg-folk-dark-blue hover:u-bg-folk-golden py-2 px-3"
                                    type="submit"
                                    value="Pesquisar">
                                </div>

                                <div class="col-1 order-2 order-lg-3 d-flex align-items-center pl-0">
                                    <span class="u-icon__free u-icon__close u-font-size-20 u-font-weight-bold u-color-folk-dark-blue u-cursor-pointer hover:u-color-folk-golden js-search-close"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <?php endif; ?>