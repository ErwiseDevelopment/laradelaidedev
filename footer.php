<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
  
    <?php get_template_part( 'footer-widget' ); ?>
    
    <!-- <footer id="colophon" class="site-footer <php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <php echo date('Y'); ?> <php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div>
        </div>
    </footer> #colophon -->

    <footer class="l-footer">
        
        <div class="u-bg-folk-extra-light-gray pt-5">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10 py-5">

                        <div class="row justify-content-around">

                            <div class="col-8 col-lg-3 mb-5 mb-lg-0">

                                <a href="#">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_home_url( null, '/wp-content/uploads/2022/07/Logo-Lar-Adelaide-Weiss-Scarpa-300x219-1.png' ) ?>"
                                    alt="">
                                </a>
                            </div>

                            <div class="col-lg-4">

                                <h6 class="u-font-weight-bold u-color-folk-dark-grayish-navy pl-3">
                                    Entre em contato
                                </h6>

                                <div class="d-flex mb-4">
                                    <span class="u-icon__free u-icon__local before::u-font-size-14 u-font-weight-bold u-color-folk-light-gray"></span>
                                    <p class="u-font-size-14 u-font-weight-regular u-color-folk-dark-grayish-navy pl-2">
                                        R. Quinze de Outubro, 1190 <br>
                                        Planta Estância Pinhais – Pinhais – PR
                                    </p>
                                </div>

                                <div class="d-flex mb-3">
                                    <span class="u-icon__free u-icon__phone before::u-font-size-14 u-font-weight-bold u-color-folk-light-gray"></span>
                                    <p class="u-font-size-14 u-font-weight-regular u-color-folk-dark-grayish-navy pl-2">
                                        (41) 3667-4872 / (41) 3667-6641 <br>
                                        (41) 9.9925-3123 / WhatsApp: (41) 9.9806-6956
                                    </p>
                                </div>

                                <div class="d-flex">
                                    <span class="u-icon__free u-icon__envelope before::u-font-size-14 u-font-weight-bold u-color-folk-light-gray"></span>
                                    <p class="u-font-size-14 u-font-weight-regular u-color-folk-dark-grayish-navy pl-2">
                                        irmascopiosas@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="u-bg-folk-dark-grayish-navy pt-4 pb-5">
            
            <div class="container">

                <div class="row justify-content-end">

                    <div class="col-lg-4 order-2 order-lg-1 d-flex justify-content-center align-items-center">

                        <a href="<?php echo get_home_url( null, '/' ) ?>">
                            <img
                            class="img-fluid"
                            src="<?php echo get_home_url( null, '/wp-content/uploads/2022/07/logotipo_oficial_horizontal.png' ) ?>"
                            alt="Lar Adelaide">
                        </a>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2 d-flex justify-content-center justify-content-lg-end align-items-center my-4 my-lg-0">

                        <ul class="d-flex mb-0 pl-0">

                            <li class="u-list-style-none">
                                <a
                                class="px:u-w-40 px:u-h-40 u-icon__brands u-icon__facebook-square hover:u-opacity-8 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 u-font-weight-bold text-decoration-none u-color-folk-white u-bg-folk-facebook"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do Facebook
                                </a>
                            </li>

                            <li class="u-list-style-none mx-3">
                                <a
                                class="px:u-w-40 px:u-h-40 u-icon__brands u-icon__youtube hover:u-opacity-8 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 u-font-weight-bold text-decoration-none u-color-folk-white u-bg-folk-youtube"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do Youtube
                                </a>
                            </li>

                            <li class="u-list-style-none">
                                <a
                                class="px:u-w-40 px:u-h-40 u-icon__brands u-icon__instagram hover:u-opacity-8 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 u-font-weight-bold text-decoration-none u-color-folk-white u-bg-folk-instagram"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do instagram
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row">

                    <?php echo get_template_part( 'template-parts/content', 'dev' ) ?>
                </div>
            </div>
        </div>
    </footer>

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>