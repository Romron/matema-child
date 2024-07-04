<?php

/**
 * Template Name: Диагностика - Регистрация SMM
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-diagnostic-registration">

			<div class="page-hero-section" style="margin-bottom: 0">
				<div class="container">
					<div class="wrap hero-description-wrap">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<?php get_template_part('template-parts/media-about-us'); ?>

			<div class="content">
				<div class="container">
					<div class="diagnostic-form">
						<?php echo do_shortcode('[gravityform id="23" title="false" description="false" ajax="true" tabindex="649"]'); ?>
					</div>
				</div>
			</div>



		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>
<style>
	.gform_wrapper.gravity-theme .gfield .ginput_container_phone input.large {
		background-color: #f8f9fd;
		border: 1px solid #d8dbe8;
		border-radius: 5px;
		font-size: 14px;
		height: 32px;
		padding: 0 16px;
	}
	body .phone-flags .gfield_radio {border-radius: 5px;}
</style>
<?php get_footer(); ?>