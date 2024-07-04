<?php
/**
 * Template Name: Батьківська сторінка
 */
get_header(); ?>

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
			</div>
			<?php the_content(); ?>

		</div>
	</div><!-- page name -->
</div><!-- inner page -->
<?php endwhile; ?>
<?php get_footer(); ?>