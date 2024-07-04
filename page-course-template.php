<?php

/**
 * Template Name: Шаблон сторінки курсу
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-nmt-zno">

			<?php
			$hero_section = get_field('hero_section');
			?>

			<div class="page-hero">
				<div class="container">
					<div class="wrap">
						<div class="text-block">
							<?php the_content(); ?>

							<div class="timer-wrap">
								<div class="icon">
									<svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="24" width="24" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/">
										<g transform="translate(0 -1028.4)">
											<path d="m5 1032.4c-1.1046 0-2 0.9-2 2v14c0 1.1 0.8954 2 2 2h6 2 6c1.105 0 2-0.9 2-2v-14c0-1.1-0.895-2-2-2h-6-2-6z" fill="#bdc3c7" />
											<path d="m5 3c-1.1046 0-2 0.8954-2 2v14c0 1.105 0.8954 2 2 2h6 2 6c1.105 0 2-0.895 2-2v-14c0-1.1046-0.895-2-2-2h-6-2-6z" transform="translate(0 1028.4)" fill="#ecf0f1" />
											<path d="m5 3c-1.1046 0-2 0.8954-2 2v3 1h18v-1-3c0-1.1046-0.895-2-2-2h-6-2-6z" transform="translate(0 1028.4)" fill="#e74c3c" />
											<path d="m7 5.5a1.5 1.5 0 1 1 -3 0 1.5 1.5 0 1 1 3 0z" transform="translate(.5 1028.4)" fill="#c0392b" />
											<path d="m7 5.5a1.5 1.5 0 1 1 -3 0 1.5 1.5 0 1 1 3 0z" transform="translate(12.5 1028.4)" fill="#c0392b" />
											<g fill="#bdc3c7">
												<path d="m5 1039.4v2h2v-2h-2zm3 0v2h2v-2h-2zm3 0v2h2v-2h-2zm3 0v2h2v-2h-2zm3 0v2h2v-2h-2z" />
												<path d="m5 1042.4v2h2v-2h-2zm3 0v2h2v-2h-2zm3 0v2h2v-2h-2zm3 0v2h2v-2h-2zm3 0v2h2v-2h-2z" />
												<path d="m5 1045.4v2h2v-2h-2zm3 0v2h2v-2h-2zm3 0v2h2v-2h-2zm3 0v2h2v-2h-2zm3 0v2h2v-2h-2z" />
											</g>
											<path d="m6 1c-0.5523 0-1 0.4477-1 1v3c0 0.5523 0.4477 1 1 1s1-0.4477 1-1v-3c0-0.5523-0.4477-1-1-1zm12 0c-0.552 0-1 0.4477-1 1v3c0 0.5523 0.448 1 1 1s1-0.4477 1-1v-3c0-0.5523-0.448-1-1-1z" transform="translate(0 1028.4)" fill="#95a5a6" />
											<path d="m6 1029.4c-0.5523 0-1 0.4-1 1v2h2v-2c0-0.6-0.4477-1-1-1zm12 0c-0.552 0-1 0.4-1 1v2h2v-2c0-0.6-0.448-1-1-1z" fill="#bdc3c7" />
										</g>
									</svg>
								</div>
								<h4><?php echo $hero_section['hero_section_dates']; ?></h4>
								<?php
								if ($hero_section['hero_section_timer']) {
									if ($hero_section['hero_section_timer'][0] === 'yes') {
								?>
										<div id="timer">
											<div class="timer-item" id="days"></div>
											<i class="separator">:</i>
											<div class="timer-item" id="hours"></div>
											<i class="separator">:</i>
											<div class="timer-item" id="minutes"></div>
											<i class="separator">:</i>
											<div class="timer-item" id="seconds"></div>
										</div>
								<?php
									}
								}
								?>
							</div>

							<span class="button popmake-35901 button-plan-selection button-package" id="<?php echo the_sub_field('cta_extra_class'); ?>" data-shortcode-id="<?php echo $hero_section['hero_section_button_shortcode_id']; ?>">
								<?php echo $hero_section['hero_section_button_txt']; ?>
								<div class="icon">
									<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
									</svg>
								</div>
							</span>
						</div>
					</div>
				</div>
			</div>

			<?php
			$advantages_section = get_field('advantages_section');
			?>

			<div class="reminder-section">
				<div class="container">
					<div class="head">
						<h2><?php echo $advantages_section['advantages_section_header']; ?></h2>
					</div>
					<div class="row two-columns">
						<?php
						if ($advantages_section['advantages_section_list']) {
							foreach ($advantages_section['advantages_section_list'] as $key => $item) {
								echo '<div class="col">';
								echo '<div class="block">';
								echo '<span class="number">' . ($key + 1) . '</span>';
								echo '<p>' . $item["advantage"] . '</p>';
								echo '</div>';
								echo '</div>';
							}
						}
						?>
					</div>
				</div>
			</div>

			<?php
			$preparation_section = get_field('preparation_section');
			?>

			<div class="preparation-types">
				<div class="container">
					<div class="head">
						<h2><?php echo $preparation_section['preparation_section_header']; ?></h2>
					</div>
					<div class="row">
						<div class="name">
							<h3><?php echo $preparation_section['preparation_section_type']; ?></h3>
							<div class="price">
								<h2><?php echo $preparation_section['preparation_section_price']; ?></h2>
							</div>
						</div>
						<div class="plan">
							<div class="plan-description">
								<?php
								if ($preparation_section['preparation_section_advantages']) {
									echo "<ul>";
									foreach ($preparation_section['preparation_section_advantages'] as $item) {
										echo "<li>" . $item["advantage"] . "</li>";
									}
									echo "</ul>";
								}
								?>
							</div>
							<span class="button yellow-button popmake-35901 button-plan-selection button-package" id="<?php echo the_sub_field('cta_extra_class'); ?>" data-shortcode-id="<?php echo $preparation_section['preparation_section_btn_shortcode_id']; ?>">
								<?php echo $preparation_section['preparation_section_more_btn_text']; ?>
								<div class="icon">
									<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
									</svg>
								</div>
							</span>
						</div>
					</div>
				</div>
			</div>

			<?php
			$blog_section = get_field('blog_section');
			?>

			<div class="blog-section">
				<div class="container">
					<div class="head">
						<div class="text-block">
							<h2><?php echo $blog_section['blog_section_header']; ?></h2>
							<p><?php echo $blog_section['blog_section_short_desc']; ?></p>
						</div>
					</div>
				</div>

				<div class="posts-list">
					<div class="container">
						<div class="row col-three">
							<?php
							$args = array(
								'post_type' => 'post',
								'post__in' => $blog_section["blog_section_posts"],
								'orderby' => 'post__in',
								'ignore_sticky_posts' => true
							);
							$blog = new WP_Query($args);
							if ($blog->have_posts()) : ?>
								<?php while ($blog->have_posts()) : $blog->the_post(); ?>
									<a href="<?php the_permalink(); ?>" class="col">
										<div class="block">
											<!-- <div class="post-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url($post); ?>');"></div> -->
											<div class="post-cover">
												<img src="<?php echo get_the_post_thumbnail_url($post); ?>" style="display: block; height: auto; width: 100%;">
											</div>
											<div class="post-info">
												<div class="top">
													<div class="date">
														<p class="published">
															<svg width="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3337 1.875H15.625V0.625C15.625 0.279375 15.3456 0 15 0C14.6544 0 14.375 0.279375 14.375 0.625V1.875H10.625V0.625C10.625 0.279375 10.345 0 10 0C9.655 0 9.375 0.279375 9.375 0.625V1.875H5.625V0.625C5.625 0.279375 5.345 0 5 0C4.655 0 4.375 0.279375 4.375 0.625V1.875H1.66688C0.74625 1.875 0 2.62062 0 3.54125V18.3331C0 19.2538 0.74625 20 1.66688 20H18.3337C19.2544 20 20 19.2538 20 18.3331V3.54125C20 2.62062 19.2544 1.875 18.3337 1.875ZM18.75 18.3331C18.75 18.5631 18.5631 18.75 18.3337 18.75H1.66688C1.43688 18.75 1.25 18.5631 1.25 18.3331V3.54125C1.25 3.31187 1.43688 3.125 1.66688 3.125H4.375V4.375C4.375 4.72062 4.655 5 5 5C5.345 5 5.625 4.72062 5.625 4.375V3.125H9.375V4.375C9.375 4.72062 9.655 5 10 5C10.345 5 10.625 4.72062 10.625 4.375V3.125H14.375V4.375C14.375 4.72062 14.6544 5 15 5C15.3456 5 15.625 4.72062 15.625 4.375V3.125H18.3337C18.5631 3.125 18.75 3.31187 18.75 3.54125V18.3331Z" fill="#8B8B8B" />
																<path d="M6.875 7.5H4.375V9.375H6.875V7.5Z" fill="#8B8B8B" />
																<path d="M6.875 10.625H4.375V12.5H6.875V10.625Z" fill="#8B8B8B" />
																<path d="M6.875 13.75H4.375V15.625H6.875V13.75Z" fill="#8B8B8B" />
																<path d="M11.25 13.75H8.75V15.625H11.25V13.75Z" fill="#8B8B8B" />
																<path d="M11.25 10.625H8.75V12.5H11.25V10.625Z" fill="#8B8B8B" />
																<path d="M11.25 7.5H8.75V9.375H11.25V7.5Z" fill="#8B8B8B" />
																<path d="M15.625 13.75H13.125V15.625H15.625V13.75Z" fill="#8B8B8B" />
																<path d="M15.625 10.625H13.125V12.5H15.625V10.625Z" fill="#8B8B8B" />
																<path d="M15.625 7.5H13.125V9.375H15.625V7.5Z" fill="#8B8B8B" />
															</svg>
															<?php the_time('d m Y'); ?>
														</p>
														<p class="last-edit">
															<svg width="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3335 13.4383V18.3333C18.3335 18.8195 18.1403 19.2858 17.7965 19.6297C17.4527 19.9735 16.9864 20.1666 16.5002 20.1666H3.66683C3.1806 20.1666 2.71428 19.9735 2.37047 19.6297C2.02665 19.2858 1.8335 18.8195 1.8335 18.3333V5.49996C1.8335 5.01373 2.02665 4.54741 2.37047 4.2036C2.71428 3.85978 3.1806 3.66663 3.66683 3.66663H8.56183" stroke="#8B8B8B" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
																<path d="M16.5002 1.83337L20.1668 5.50004L11.0002 14.6667H7.3335V11L16.5002 1.83337Z" stroke="#8B8B8B" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
															</svg>
															<?php echo get_the_modified_date('d m Y') ?>
														</p>
													</div>
													<?php /* 
													<div class="post-category">
														<?php
														$category = get_the_category();
														echo $category[0]->name;
													</div>
													*/ ?>
												</div>
												<h3><?php the_title(); ?></h3>
											</div>
										</div>
									</a>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
						<div class="buttons-wrap">
							<a href="<?php echo $blog_section['blog_section_more_btn_url']; ?>" class="button margin-left">
								<?php echo $blog_section['blog_section_more_btn_text']; ?>
								<div class="icon">
									<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
									</svg>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php
			$feedback_section = get_field('feedback_section');
			?>
			<?php get_template_part('template-parts/switchblock-section'); ?>
			<div class="reviews-list">
				<div class="head">
					<div class="container">
						<div class="text-block">
							<h2><?php echo $feedback_section['feedback_section_header']; ?></h2>
							<p><?php echo $feedback_section['feedback_section_short_desc']; ?></p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<?php
						$args = array(
							'post_type' => 'review',
							'post__in' => $feedback_section["feedback_section_list"],
							'orderby' => 'post__in',
							'ignore_sticky_posts' => true
						);
						$reviews = new WP_Query($args);

						if ($reviews->have_posts()) :
							while ($reviews->have_posts()) : $reviews->the_post();
								$teacher = get_field('review_teacher', get_the_ID());
								$date = get_field('review_date', get_the_ID());
								$rating_group = get_field('review_rating_group', get_the_ID());
								$text = get_field('review_text', get_the_ID());
						?>
								<div class="col">
									<div class="review-card">
										<h3><?php the_title(); ?></h3>
										<?php echo '<p>' . $teacher . '</p>'; ?>
										<?php echo '<p>' . $date . '</p>'; ?>
										<?php
										$stars = '';
										for ($i = 0; $i < $rating_group["review_rating_group_number"]; $i++) {
											$stars .= '★';
										}
										echo '<p>' . $rating_group["review_rating_group_txt"] . ' ' . $stars . '</p>';
										?>
										<blockquote><?php echo $text; ?></blockquote>
									</div>
								</div>
						<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div>
				</div>
			</div>

			<?php
			$faq_section_title = get_field('faq_title');
			?>

			<div class="faq-section">
				<div class="container">
					<h2>
						<?php
						$faq_section_title = get_field('faq_title');
						echo $faq_section_title;
						?>
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

			<?php
			$packages_nmt_list = get_field('packages_nmt_list');
			if ($packages_nmt_list) {
				get_template_part('template-parts/packages-nmt-section', null, ['margin' => '100px 0 20px']);
			}
			?>

		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>