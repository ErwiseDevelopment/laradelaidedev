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

<section id="primary">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<?php echo get_template_part( 'template-parts/content', 'banner' ); ?>
<!-- end banner -->

<!-- about -->
<?php echo get_template_part( 'template-parts/content', 'about' ); ?>
<!-- end about -->

<!-- items -->
<?php echo get_template_part( 'template-parts/content', 'items' ); ?>
<!-- end items -->

<!-- news -->
<?php echo get_template_part( 'template-parts/content', 'news' ); ?>
<!-- end news -->

<!-- more content -->
<?php echo get_template_part( 'template-parts/content', 'more-content' ); ?>
<!-- end more content -->

<!-- testimonials -->
<?php echo get_template_part( 'template-parts/content', 'testimonials' ); ?>
<!-- end testimonials -->

<!-- form -->
<?php echo get_template_part( 'template-parts/content', 'form' ); ?>
<!-- end form -->

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
