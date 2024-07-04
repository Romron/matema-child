<?php

/**
 * Template Name: Диагностика - Регистрация
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

			<!-- <?php get_template_part('template-parts/media-about-us'); ?> -->

			<div class="content">
				<div class="container">
					<div class="diagnostic-form">
						<?php echo do_shortcode('[gravityform id="8" title="false" description="false" ajax="true" tabindex="249"]'); ?>
					</div>
				</div>
			</div>
			
			<div id="diagnostic-loader">
				<h1>Ваша заявка опрацьовується!</h1>
				<p>Будь ласка, зачекайте.</p>
			</div>
		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>