<?php

/**
 * Template Name: Тест-демо НМТ 2023
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page no-padding">
		<div class="page-wrap test-demo-nmt">

			<div class="page-hero">
				<div class="container">
					<div class="wrap">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<div class="test-content">
				<div class="container">

					<form id="quizForm">
						<div class="questions-wrap"></div>
						<a href="/pidgotovka-do-nmt-zno-z-matematiki/" class="button homepage-book-lesson light-effect"> Курс підготовки до НМТ/ЗНО з математики<div class="icon margin-left"> <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white"></path> </svg></div> </a>
					</form>
					<div class="results"></div>
				</div>
			</div>

		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>