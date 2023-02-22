<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-dark-blue mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-22 u-font-weight-regular u-font-family-lato u-color-dark-blue">Fique informado!</span> <br>
                    Últimas Notícias
                </h2>
            </div>

            <div class="col-12">

                <div class="row">
                        
                    <!-- loop -->
                    <?php
                        $link_pattern = get_field( 'link_padrao_portal', 'option' );
                        $post_link = $link_pattern . get_field( 'link_noticia', 'option' );
                        $request_posts = wp_remote_get( $post_link );
                        $count = 0;

                        if(!is_wp_error( $request_posts )) :
                            $body = wp_remote_retrieve_body( $request_posts );
                            $data = json_decode( $body );

                            if(!is_wp_error( $data )) :
                                foreach( $data as $rest_post ) :
                                    $count++;
                                    $id = array( $rest_post->id );
                    ?>
                                    <div class="col-md-4">
                                    
                                        <a 
                                        class="card border-0 text-decoration-none"
                                        href="<?php echo get_home_url( null, 'single-post/?id=' . $rest_post->id )  ?>">

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
                                                        class="w-100 u-box-shadow-pattern u-font-size-12 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-dark-blue hover:u-bg-folk-golden py-2"
                                                       >
                                                            Ler mais
                                                        </p>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                    <?php
                                    if( $count == 3 )
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
                        class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-cyan-blue hover:u-bg-folk-golden py-3"
                        href="<?php echo $link_pattern . 'noticias/?cat=lar-adelaide'; ?>">
                            Ver mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>