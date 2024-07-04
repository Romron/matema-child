<?php

/**
 * Template Name: Сторінка з блоком, що розкривається
 */
get_header(); ?>
<style>
    .tab-content a {color: #FF6943;text-decoration: underline;}
</style>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="inner-page">
	<style>
		.page-wrap {
			box-sizing: border-box;
			padding-bottom: 100px;
		}
		.page-wrap .page-head h1 {
			margin-bottom: 48px;
			text-align: center;
		}
	</style>
	<div class="page-wrap">
		<div class="container">
			<div class="page-head">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php the_content(); ?>
		</div>
	</div><!-- page name -->
</div><!-- inner page -->
<?php get_template_part('template-parts/switchblock-section'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>