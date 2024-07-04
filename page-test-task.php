<?php

/**
 * Template Name: Test Task
 */
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="inner-page">
	<div class="page-wrap">
		<div class="container">
			<div class="page-head">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php the_content(); ?>
			
		</div>
	</div><!-- page name -->
</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>