<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section class="u-bg-folk-extrabold-electric-blue py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">

                <h1 class="l-banner-full__title u-font-weight-bold text-center u-color-folk-white mb-4">
                        Blogs
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<section>

    <div class="container">

        <div class="row">

            <div class="col-12 mt-md-5 pt-md-5">

                <div class="row">

                    <div class="col-md-12 order-2 order-md-1">

                        <div class="row">

                            <!-- loop -->
                            <?php 
     							  $link_pattern = get_field( 'link_padrao_portal', 'option' );
                                   $post_link = $link_pattern . get_field( 'link_caminho', 'option' ) . get_field( 'link_conteudos_especiais', 'option' );
                                   $request_posts = wp_remote_get( $post_link );
                                 
           
                                   if(!is_wp_error( $request_posts )) :
                                       $body = wp_remote_retrieve_body( $request_posts );
                                       $data = json_decode( $body );
           
                                       if(!is_wp_error( $data )) :
                                           foreach( $data as $rest_post ) :
                            ?>
                                        
                                        <div class="col-md-4">

                                        <a 
                                        class="card border-0 text-decoration-none"
                                        href="<?php echo get_home_url( null, 'blog/?id=' . $rest_post->id )  ?>">

                                            <div class="l-news__card-img card-img">
                                                <img
                                                class=" img-fluid w-100 h-100 u-object-fit-cover"
                                                src="<?php echo $rest_post->featured_image_src; ?>"
                                                alt="<?php echo $rest_post->title->rendered; ?>">
                                            </div>

                                            <div class="card-body">
                                                
                                                <p class="u-font-size-14 u-font-weight-semibold u-color-folk-cyan-blue mb-0">
                                                    <?php 
                                                        $data = $rest_post->post_date;
                                                        $data_format = get_date_format( $data );

                                                        echo $data_format;  
                                                    ?>
                                                </p>

                                                <h4 class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-color-folk-dark-grayish-navy">
                                                    <?php echo $rest_post->title->rendered; ?>
                                                </h4>

                                                <p class="u-font-size-13 xxl:u-font-size-16 u-font-weight-regular u-color-folk-aluminium">
                                                    <?php echo $rest_post->post_excerpt; ?>
                                                </p>

                                                <div class="row">

                                                    <div class="col-6 mt-3">

                                                        <p
                                                        class="w-100 u-box-shadow-pattern u-font-size-12 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-dark-blue hover:u-bg-folk-golden py-2">
                                                            Ler mais
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                                       
                                        <?php endforeach;
                                                        endif;
                                                            endif;?>

                            <!-- end loop -->
                        </div>
                    </div>
                        <div class="row">

                            <div class="col-12 mt-5">
                                <a href="<?php  echo get_field('link_banner', 'option')?>">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_field('banner_pagina_noticias', 'option') ?>"
                                    alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div><!-- #main -->
</section><!-- #primary -->

<?php endwhile; ?>
<?php

get_footer();
