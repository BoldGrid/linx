<?php
/**
 * Template Name: Home Page
 *
 * @package BoldGrid
 */

get_header(); ?>

</div><!-- .container -->
<div class="container-fluid">

	<div class="row background-custom">
		<div class="col-md-6"></div>

	<?php dynamic_sidebar( 'boldgrid-widget-1' ); ?>
	</div><!-- .row -->

	<div class="row background-primary">
		<div class="col-md-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
