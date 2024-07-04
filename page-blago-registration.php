<?php

/**
 * Template Name: Благодiйнicть - Регистрация
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page inner-blue-bg">
		<div class="page-wrap page-blago-registration">

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
					<div class="blago-form">
						<style>
							.codedropz-upload-handler {
							    margin-top: 12px;
							}
						    .codedropz-upload-container {
						        margin-top: 10px!important;
						        padding: 24px 16px!important;
					    	}
						    .codedropz-upload-inner h4 {
						            margin-bottom: 5px!important;
					        }
						    .codedropz-btn-wrap {
						        margin-top: 10px!important;
						    }
						    .cd-upload-btn {
						        box-sizing: border-box!important;
						        background-color: #6536D6!important;
						        border-radius: 5px!important;
						        color: #fff!important;
						        display: block!important;
						        margin-top: 10px!important;
						        padding: 10px!important;
						    }
						</style>					
						<?php echo do_shortcode('[gravityform id="15" title="false" description="false" ajax="true" tabindex="289"]'); ?>
					</div>
				</div>
			</div>
		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>