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

<!-- banner -->
<section 
class="l-template-content__banner d-flex justify-content-center align-items-center u-bg-cover u-bg-no-repeat"
style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/template-content-banner.png)">

    <div class="container">

        <div class="row">

            <div class="col-12 px-0">
				
                <h1 class="l-template-content__banner__title position-relative u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-white pb-4">
                    <!-- Notícias -->
				
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="py-5">

	<div class="container">
	
	<!-- <php $posts_current = array();
 		array_push($posts_current, get_the_ID()); 
	?> -->
		<div class="row">

		<?php
							//pega o id da pagina/post
							if( isset($_GET['id']))
							$id_url = $_GET['id'];

							//url principal do site
							$link_pattern = get_field( 'link_padrao_portal', 'option' );
							//concatena o link pricipal+o caminho das postagens
							$post_link = $link_pattern . get_field( 'link_noticia', 'option' );
							//faz a requisição com o site no caminho digitado acima
							$request_posts = wp_remote_get( $post_link );

		?>
		<?php
					   if(!is_wp_error( $request_posts )) :
						   $body = wp_remote_retrieve_body( $request_posts );
						   $data = json_decode( $body );

						   if(!is_wp_error( $data )) :
							   foreach( $data as $rest_post ) :
		
								
		?>
		
			<div class="col-12">

				<div class="row">

				<?php 
				
				if($id_url==$rest_post->id ) :{
					

				?>

					<div class="col-lg-8">
						<img
								class=" img-fluid w-100 u-h-auto lg:px:u-h-460 u-object-fit-coverr"
								src="<?php echo $rest_post->featured_image_src; ?>"
								alt="<?php echo $rest_post->title->rendered; ?>">
						

						<p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden mt-4 mb-0">
													<?php 
                                                        $data = $rest_post->post_date;
                                                        $data_format = get_date_format( $data );

                                                        echo $data_format;  
                                                    ?>
						</p>
						</p> 

						<h1 class="u-font-size-32 xxl:u-font-size-45 u-font-weight-bold u-font-family-cinzel u-color-folk-bold-marron mb-4">
							<!-- A Redenção na vocação dos Mercedários -->
							<?php echo $rest_post->title->rendered; ?>
						</h1>
						
						<span class="l-single-post">
						 <?php echo $rest_post->content->rendered; ?> 
						</span>
					</div>
					<?php
					}
					endif;
				
					endforeach;
					
				endif;endif;endwhile;
					?>
				</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php  ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer(); 
