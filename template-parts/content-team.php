<section class="l-team py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-dark-blue mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-22 u-font-weight-regular u-font-family-lato u-color-dark-blue">Conheça nossa</span> <br>
                    Equipe
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-team">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php for( $i = 0; $i < 6; $i++ ) { ?>
                            <div class="swiper-slide flex-column align-items-start">
                                <img
                                class="img-fluid w-100"
                                src="http://ancora.test/wp-content/uploads/2022/07/Ir-Adenise-Somer-Diretora-Presidente.png"
                                alt="">

                                <div class="mt-3">
                                    <h6 class="u-font-size-22 u-font-weight-bold u-color-folk-dark-grayish-navy mb-0">
                                        Ir. Adenise Somer
                                    </h6>

                                    <p class="u-font-size-15 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium">
                                        Diretora Presidente
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- end slide -->
                    </div>
                </div>
                        
                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-team d-none d-lg-flex js-swiper-button-prev-team"></div>
                <div class="swiper-button-next swiper-button-next-team d-none d-lg-flex js-swiper-button-next-team"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>