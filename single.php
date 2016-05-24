<?php
/**
 * The template for displaying all single posts.
 *
 * @package BoldGrid
 */

get_header(); ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="h4 entry-title">', '</h1>' ); ?>
		<div class="container">
		<div class="entry-meta">
			<?php boldgrid_posted_on(); ?>
		</div><!-- .entry-meta -->
		</div>
	</header><!-- .entry-header -->
	<div class="container">
<div class="row">
<div class="col-md-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
	

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php boldgrid_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
 </div>
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
</div>

<?php get_footer(); ?>
