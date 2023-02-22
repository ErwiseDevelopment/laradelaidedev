<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->a
<?php
    //pega o id da pagina/post
 if( isset($_GET['id']))
 $id_url = $_GET['id'];

    //url principal do site
     $link_pattern = get_field( 'link_padrao_portal', 'option' );
    // echo $link_pattern;
     //concatena o link pricipal+o caminho das postagens
    $post_link = $link_pattern . "wp-json/wp/v2/posts/$id_url";
//	echo $post_link;
     //faz a requisição com o site no caminho digitado acima
     $request_posts = wp_remote_get( $post_link );
     if(!is_wp_error( $request_posts )) :
   $body = wp_remote_retrieve_body( $request_posts );
   $data = json_decode( $body );
//    echo "<pre>";
// 	var_dump($data);
// 	echo "</pre>";
   if(!is_wp_error( $data )) :
    //    foreach( $data as $rest_post ) :
?>

<section class="u-bg-folk-extrabold-electric-blue py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">



                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="py-5">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="row">

					<div class="col-lg-9">

                    <div class="card-img w-100">
                                    <img
                                    class="img-fluid w-100 u-object-fit-cover"
                                    src="<?php echo $data->featured_image_src; ?>"
                                        alt="<?php echo $data->title->rendered; ?>">
                                </div>


						<p class="u-font-size-13 xxl:u-font-size-15 u-font-weight-bold u-color-folk-golden mt-4 mb-2">
                        <?php $date_post = $data->date;
					   list($data_year, $data_month, $data_day) = explode("-", $date_post);
					   list($data_day1) = explode("T", $data_day);
					 echo $data_day1 . '/' . $data_month . '/' . $data_year; ?>
						</p>

						<h2 class="l-single-post__title u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                        <?php echo $data->title->rendered; ?>

						</h2>

						<span class="d-block u-font-size-14 xxl:u-font-size-18 all:u-color-folk-aluminium">
                        <?php echo $data->content->rendered;  ?>
						</span>

						<span class="l-single-post__excerpt d-block u-font-weight-bold text-center u-color-folk-white u-bg-folk-bold-electric-blue my-4 p-2">
							
						</span>

						<div class="row">

							
						</div>
					</div>
                    <?php endif;
			endif;?>

					<div class="col-lg-3 mt-5 mt-lg-0">

					<div class="row">

                            <div class="col-12">

                                <div class="border mt-4 p-4">

									<h6 class="xxl:u-font-size-20 u-font-weight-bold u-color-folk-bold-electric-blue">
                                        Blog
                                    </h6>

									<div class="row">
											
										<!-- loop -->
										<?php
                                            $link_pattern = get_field( 'link_padrao_portal', 'option' );
                                            $post_link = $link_pattern . get_field( 'link_caminho', 'option' ) . get_field( 'link_conteudos_especiais', 'option' );
                                            $request_posts = wp_remote_get( $post_link );
                                            $count = 0;


                                            if(!is_wp_error( $request_posts )) :
                                                $body = wp_remote_retrieve_body( $request_posts );
                                                $data = json_decode( $body );

                                                if(!is_wp_error( $data )) :
                                                    foreach( $data as $rest_post ) :
                                                        $count++;
                                                        if($id_url <> $rest_post->id) :
										?>
													<a 
													class="col-12 u-border-b-1 last-child:u-border-b-1 border-light d-block text-decoration-none my-3 pb-3"
													href="<?php echo get_home_url( null, 'noticia/?id=' . $rest_post->id )  ?>">

														<div class="row">
															
															<div class="col-3 pr-0">
                                                                <div class="card-img w-100">
                                                                    <img
                                                                    class="img-fluid w-100 u-object-fit-cover"
                                                                    src="<?php echo $rest_post->featured_image_src; ?>"
                                                                    alt="<?php echo $rest_post->title->rendered; ?>">
                                                                </div>
															</div>

															<div class="col-9">
																
																<p class="u-font-size-10 xxl:u-font-size-12 u-font-weight-bold u-color-folk-golden mb-1">
																	<!-- 15 de março, 2022 -->
																	<?php echo get_date_format( get_the_date( 'd/m/Y', get_the_ID() ) );?>
																</p>

																<h4 class="u-font-size-13 u-font-weight-bold u-color-folk-dark-grayish-navy">
																	<!-- Título da Notícia -->
																	<?php echo $rest_post->title->rendered; ?>
																</h4>
															</div>
														</div>
													</a>
                                                    <?php 
						if ( $count == 4)
							break;		
		
                            endif;    
							endforeach;
                            endif;
                        endif;
						
                    ?>
										<!-- end loop -->
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
