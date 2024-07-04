<?php

/**
 * Template Name: Курсы - список всех курсов
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-course">

			<div class="head-course">
				<div class="container wide">
					<div class="row">
						<div class="col">
							<div class="info">
								<?php the_content(); ?>
								<a href="#" class="button button-course-purchase popmake-35901"><?php the_field('cta'); ?></a>
							</div>
						</div>
						<div class="col">
							<div class="course-teaser">
								<?php the_field('course_teaser'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="course-program">
				<div class="container wide">
					<div class="course-description">
						<?php the_field('second_description'); ?>
					</div>

					<div class="course-features">
						<h3><?php the_field('for_who_title'); ?></h3>
						<br><br>
						<div class="row">
							<? if (have_rows('for_who_list')) : while (have_rows('for_who_list')) : the_row(); ?>

									<div class="col">
										<div class="feature">
											<h4><?php the_sub_field('title'); ?></h4>
											<p><?php the_sub_field('for_info'); ?></p>
										</div>
									</div>

							<?php endwhile;
							else : endif; ?>
						</div>
					</div>
				</div>
			</div><!-- course info -->

			<div class="all-courses-list">
				<div class="container">
					<h2>
						<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
							Наши курсы
						<?php else : ?>
							Нашi курси
						<?php endif; ?>
					</h2>
					<ul>
						<?php
						global $id;
						wp_list_pages(array(
							'title_li'    => '',
							'child_of'    => 161,
							'sort_column' => 'menu_order'
						));
						?>
					</ul>
				</div>
			</div>

			<div class="courses-pricing">
				<div class="container">
					<h2>
						<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
							Цены на курсы
						<?php else : ?>
							Цiни на нашi курси
						<?php endif; ?>
					</h2>
					<?php the_field('course_prices'); ?>
				</div>
			</div>

			<div class="for-who">
				<div class="container">
					<h2>
						<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
							Как это работает?
						<?php else : ?>
							Як це працює?
						<?php endif; ?>
					</h2>
					<?php the_field('how_it_works'); ?>
				</div>
			</div>

			<div class="course-feedback">
				<div class="container">
					<h2>Що кажуть про нашi курси:</h2>
				</div>

				<div class="reviews-list">
					<div class="container">
						<div class="row">
							<?php if (have_rows('feedback_list', 548)) : while (have_rows('feedback_list', 548)) : the_row(); ?>
									<div class="col">
										<div class="review-card">
											<?php the_sub_field('feedback'); ?>
										</div>
									</div>
							<?php endwhile;
							else : endif; ?>
						</div>
					</div>
				</div>
			</div>


			<div class="faq-section">
				<div class="container">
					<h2>
						<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
							Часто задаваемые вопросы
						<?php else : ?>
							Поширені запитання
						<?php endif; ?>
					</h2>
					<div class="faq faq-list">
						<?php if (have_rows('faq')) : while (have_rows('faq')) : the_row(); ?>
								<div class="item faq-item">
									<div class="icon">
										<div class="hor"></div>
										<div class="ver"></div>
									</div>
									<div class="question">
										<?php the_sub_field('questuion'); ?>
									</div>
									<div class="answer">
										<?php the_sub_field('answer'); ?>
									</div>
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