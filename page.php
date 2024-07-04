<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
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
		body .quiz_section.quiz_begin {color: #000 !important;}
	</style>
	<div class="page-wrap">
		<div class="container">
			<div class="page-head">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php the_content(); ?>
			<?php if (is_page( 18353 )) { ?>
				<?php get_template_part('template-parts/switchblock-section'); ?>
			<?php } ?>
		</div>
	</div><!-- page name -->
</div><!-- inner page -->	
<?php endwhile; ?>
<?php get_footer(); ?>