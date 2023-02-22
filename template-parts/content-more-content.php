<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-dark-blue mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-22 u-font-weight-regular u-font-family-lato u-color-dark-blue">Aprofunde-se com nossos</span> <br>
                    Conteúdos
                </h2>
            </div>

            <div class="col-12">

                <div class="row">
                        
                    <!-- loop -->
                    <?php
                        $link_pattern = get_field( 'link_padrao_portal', 'option' );
                        $post_link = $link_pattern . get_field( 'link_conteudos_especiais', 'option' );
                        $request_posts = wp_remote_get( $post_link );
                        $count = 0;

                        if(!is_wp_error( $request_posts )) :
                            $body = wp_remote_retrieve_body( $request_posts );
                            $data = json_decode( $body );

                            if(!is_wp_error( $data )) :
                                foreach( $data as $rest_post ) :
                                    $count++;
                    ?>
                                    <div class="col-md-6 col-lg-3 my-3 my-lg-0">

                                        <a 
                                        class="card border-0 text-decoration-none"
                                        href="<?php echo esc_url( $rest_post->id ); ?>">

                                            <div class="card-img">
                                                <img
                                                class=" img-fluid w-100 h-100 u-object-fit-cover"
                                                src="<?php echo $rest_post->featured_image_src; ?>"
                                                alt="<?php echo $rest_post->title->rendered; ?>">
                                            </div>

                                            <div class="card-body">
                                                
                                                <p class="u-font-size-14 xxl:u-font-size-16 u-font-weight-semibold u-color-folk-cyan-blue mb-0">
                                                    Blog
                                                </p>

                                                <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-color-folk-dark-grayish-navy">
                                                    <?php echo $rest_post->title->rendered; ?>
                                                </h4>

                                                <div class="row">

                                                    <div class="col-6 mt-3">

                                                        <p
                                                        class="w-100 u-box-shadow-pattern u-font-size-12 xxl:u-font-size-14 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-dark-blue hover:u-bg-folk-golden py-2">
                                                            Ler mais
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                    <?php

                                    if( $count == 4 ) 
                                        break;
                                endforeach;
                            endif;
                        endif;
                    ?>
                    <!-- end loop -->
                </div>
            </div>

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-8 col-md-3 mt-5">

                        <a
                        class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-22 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-cyan-blue hover:u-bg-folk-golden py-3"
                        href="<?php echo $link_pattern . 'blog'; ?>">
                            Ver mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>