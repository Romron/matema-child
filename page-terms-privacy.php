<?php

/**
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 * Template Name: Политика, Условия и положения
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-terms-privacy">
			<div class="container">
				
				<div class="head">
					<h1><?php the_title(); ?></h1>
				</div>

				<div class="page-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>