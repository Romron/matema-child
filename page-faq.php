<?php

/**
 * Template Name: FAQ
 */
get_header(); ?>

<?php 
//DELETE ALL POLISH TUTORS
/*$allposts= get_posts( array('post_type'=>'tutor','numberposts'=>-1) );
	foreach ($allposts as $eachpost) {
$check = apply_filters( 'wpml_post_language_details', NULL, $eachpost->ID );
	$slide_language_code = substr( $check['locale'], 0, 2 );	
	if( $slide_language_code == "pl" ) {
		 wp_delete_post( $eachpost->ID, true );
	}
	}*/



if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page no-padding">
		<div class="page-wrap faq-page">

			<div class="page-hero">
				<div class="container">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>

			<div class="faq-listings">
				<div class="container">
					<div class="row">
						<?php if (have_rows('faq_section')) : while (have_rows('faq_section')) : the_row(); ?>
						<div class="col">
							<h3 class="faq-section-title"><?php the_sub_field('faq_title'); ?></h3>
							<?php if (have_rows('faq_list')) : while (have_rows('faq_list')) : the_row(); ?>
							<div class="faq-list">
								<div class="faq-question faq-item"><?php the_sub_field('question'); ?></div>
								<div class="faq-answer"><?php the_sub_field('answer'); ?></div>
							</div>
							<?php endwhile;
							else : endif; ?>
						</div>
						<?php endwhile;
						else : endif; ?>
					</div>
				</div>
			</div>



		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>