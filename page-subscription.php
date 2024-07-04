<?php

/**
 * Template Name: Абонимент
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap subscription-page">

			<div class="page-hero">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>

			<div class="container">
				<div class="text-block">
					<?php the_content(); ?>
				</div>
			</div>

			<?php if (ICL_LANGUAGE_CODE == 'pl') :  ?>

			<div class="pricing-section">
				<div class="container">
					<div class="row row-fourth">
						<?php if (have_rows('plans', 36144)) : while (have_rows('plans', 36144)) : the_row(); ?>
							<div class="col col-5">
							<?php $show_arrow = get_sub_field('best_plan'); ?>
								<?php if (!empty($show_arrow)) : ?>
								<div class="plan best-plan-block">
								<?php else : ?>
								<div class="plan">
								<?php endif; ?>
								<?php if (!empty($show_arrow)) : ?>
									<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
									<div class="best-plan">
										Najlepsza oferta
									</div>
									<?php else : ?>
									<div class="best-plan">
										Найкращий план
									</div>
										<?php endif; ?>
									<?php endif; ?>
									<h3><?php the_sub_field('name'); ?></h3>
									<div class="plan-description">
										<p><?php the_sub_field('description'); ?></p>
									</div>
									<div class="price">
										<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
											<h2><?php the_sub_field('price'); ?><span><b>zl./god</b></span></h2>
										<?php else : ?>
											<h2><?php the_sub_field('price'); ?><span><b>грн./55 хв</b></span></h2>
										<?php endif; ?>
									</div>
									<span class="button becomeatutor button-plan-selection button-package" id="<?php echo the_sub_field('cta_extra_class'); ?>">
										<?php the_sub_field('cta'); ?>
										<div class="icon">
											<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
											</svg>
										</div>
									</span>
								</div>
							</div>
							<?php endwhile; else : endif; ?>
						</div>
					</div>
				</div>

				<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>

				<div class="pricing-section">
				<div class="container">
					<div class="row row-fourth">
						<?php if (have_rows('plans', 9656)) : while (have_rows('plans', 9656)) : the_row(); ?>
							<div class="col col-5">
							<?php $show_arrow = get_sub_field('best_plan'); ?>
								<?php if (!empty($show_arrow)) : ?>
								<div class="plan best-plan-block">
								<?php else : ?>
								<div class="plan">
								<?php endif; ?>
								<?php if (!empty($show_arrow)) : ?>
									<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
									<div class="best-plan">
										Najlepsza oferta
									</div>
									<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
									<div class="best-plan">
										Best plan
									</div>
									<?php else : ?>
									<div class="best-plan">
										Найкращий план
									</div>
									<?php endif; ?>
									<?php endif; ?>
									<h3><?php the_sub_field('name'); ?></h3>
									<div class="plan-description">
										<p><?php the_sub_field('description'); ?></p>
									</div>
									<div class="price">
										<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
											<h2><?php the_sub_field('price'); ?><span><b>zl./god</b></span></h2>
										<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
											<h2><?php the_sub_field('price'); ?><span><b>GPB./hour</b></span></h2>
										<?php else : ?>
											<h2><?php the_sub_field('price'); ?><span><b>грн./55 хв</b></span></h2>
										<?php endif; ?>
									</div>
									<a href="<?php echo get_page_link('11079'); ?>" class="button button-package" id="<?php echo the_sub_field('cta_extra_class'); ?>">
										<?php the_sub_field('cta'); ?>
										<div class="icon">
											<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
											</svg>
										</div>
									</a>
								</div>
							</div>
							<?php endwhile; else : endif; ?>
						</div>
					</div>
				</div>

				<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>

				<div class="pricing-section">
				<div class="container">
					<div class="row row-fourth">
						<?php if (have_rows('plans', 13341)) : while (have_rows('plans', 13341)) : the_row(); ?>
							<div class="col col-5">
							<?php $show_arrow = get_sub_field('best_plan'); ?>
								<?php if (!empty($show_arrow)) : ?>
								<div class="plan best-plan-block">
								<?php else : ?>
								<div class="plan">
								<?php endif; ?>
								<?php if (!empty($show_arrow)) : ?>
									<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
									<div class="best-plan">
										Najlepsza oferta
									</div>
									<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
									<div class="best-plan">
										Best plan
									</div>
									<?php else : ?>
									<div class="best-plan">
										Найкращий план
									</div>
									<?php endif; ?>
									<?php endif; ?>
									<h3><?php the_sub_field('name'); ?></h3>
									<div class="plan-description">
										<p><?php the_sub_field('description'); ?></p>
									</div>
									<div class="price">
										<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
											<h2><?php the_sub_field('price'); ?><span><b>zl./god</b></span></h2>
										<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
											<h2><?php the_sub_field('price'); ?><span><b>GPB./hour</b></span></h2>
										<?php else : ?>
											<h2><?php the_sub_field('price'); ?><span><b>грн./55 хв</b></span></h2>
										<?php endif; ?>
									</div>
									<a href="<?php echo get_page_link('11079'); ?>" class="button button-package" id="<?php echo the_sub_field('cta_extra_class'); ?>">
										<?php the_sub_field('cta'); ?>
										<div class="icon">
											<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
											</svg>
										</div>
									</a>
								</div>
							</div>
							<?php endwhile; else : endif; ?>
						</div>
					</div>
				</div>

				<?php else : ?>

				<div class="pricing-section">
					<div class="container">
						<div class="row row-fourth">
							<?php if (have_rows('plans', 7)) : while (have_rows('plans', 7)) : the_row(); ?>
								<div class="col col-5">
								<?php $show_arrow = get_sub_field('best_plan'); ?>
									<?php if (!empty($show_arrow)) : ?>
									<div class="plan best-plan-block">
									<?php else : ?>
									<div class="plan">
									<?php endif; ?>
									<?php if (!empty($show_arrow)) : ?>
										<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
										<div class="best-plan">
											Najlepsza oferta
										</div>
										 <?php elseif ((ICL_LANGUAGE_CODE == 'gb') || (ICL_LANGUAGE_CODE == 'en')) : ?>
										 <div class="best-plan">
											Best plan
										</div>
										<?php else : ?>
										<div class="best-plan">
											Найкращий план
										</div>
											<?php endif; ?>
										<?php endif; ?>
										<h3><?php the_sub_field('name'); ?></h3>
										<div class="plan-description">
											<p><?php the_sub_field('description'); ?></p>
										</div>
										<div class="price">
											<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
												<h2><?php the_sub_field('price'); ?><span><b>zl./god</b></span></h2>
											<?php elseif ((ICL_LANGUAGE_CODE == 'gb') || (ICL_LANGUAGE_CODE == 'en')) : ?>	
												<h2><?php the_sub_field('price'); ?><span><b>GBP./hour</b></span></h2>
											<?php else : ?>
												<h2><?php the_sub_field('price'); ?><span><b>грн./55 хв</b></span></h2>
											<?php endif; ?>
										</div>
										<span class="button popmake-35901 button-plan-selection button-package" id="<?php echo the_sub_field('cta_extra_class'); ?>">
											<?php the_sub_field('cta'); ?>
											<div class="icon">
												<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
												</svg>
											</div>
										</span>
									</div>
								</div>
								<?php endwhile; else : endif; ?>
							</div>
						</div>
					</div>

				<?php endif; ?>

				<div class="how-to-start section">
					<div class="container">
						<h2><?php the_field('steps_title'); ?></h2>
						<div class="row">
							<?php $step = 1; ?>
							<?php if (have_rows('steps')) : while (have_rows('steps')) : the_row(); ?>
									<div class="col">
										<div class="block">
											<span class="number"><?php echo $step; ?></span>
											<h4><?php the_sub_field('title'); ?></h4>
											<p><?php the_sub_field('description'); ?></p>
										</div>
									</div>

							<?php $step++;
								endwhile;
							else : endif; ?>
						</div>
					</div>
				</div>

				<div class="all-included section">
					<div class="container">
						<div class="text-block">
							<?php the_field('included_title'); ?>
						</div>
					</div>
				</div>

				<div class="features-section section">
					<div class="container">
						<div class="row">
							<?php if (have_rows('included_steps')) : while (have_rows('included_steps')) : the_row(); ?>
									<div class="col">
										<div class="block">
											<h4><?php the_sub_field('title'); ?></h4>
											<ul>
												<?php if (have_rows('included_listing')) : while (have_rows('included_listing')) : the_row(); ?>
														<li><?php the_sub_field('list_name'); ?></li>
												<?php endwhile;
												else : endif; ?>

											</ul>
										</div>
									</div>
							<?php endwhile;
							else : endif; ?>
						</div>
					</div>
				</div>

				<?php if (ICL_LANGUAGE_CODE == 'en') :  ?>
			    <?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
		    	<?php elseif (ICL_LANGUAGE_CODE == 'pl') :  ?>
			    <?php else : ?>

				<div class="two-plus-two" style="transform: translateY(0);">
			        <div class="container">
			            <div class="wrap">
			                <div class="head">
			                    <h2>Бонусна програма 2х2</h2>
			                    <p>Подаруйте друзям 2 уроки безкоштовних уроки в Mathema та отримайте також 2 бонусних уроки на свій рахунок.</p>
			                    <p>Більше залучених друзів — більше безкоштовних уроків для вашої дитини!</p>
			                </div>
			                <a href="<?php echo get_page_link(12976); ?>" class="button yellow-button">
			                    Бiльше про програму
			                    <div class="icon margin-left">
			                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
			                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
			                        </svg>
			                    </div>
			                </a>
			            </div>
			        </div>
			    </div>

			    <?php endif; ?>



				<div class="expert-section section">
					<div class="desktop-show">
						<div class="expert">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/nelya.png" alt="photo" />
							<div class="expert-info">
								<div class="name">
									<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
										<strong>Krystyna</strong>
									<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
										<strong>Krystyna</strong>
									<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
										<strong>Krystyna</strong>
									<?php else : ?>
										<strong>Неля</strong>
									<?php endif; ?>
								</div>
								<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
									<p>Ekspert w zakresie indywidualnego doboru nauczyciela</p>
								<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
									<p>Teacher Selection Expert</p>
								<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
									<p>Teacher Selection Expert</p>
								<?php else : ?>
									<p>Наш експерт<br />з індивідуального підбору вчителя</p>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="text-block">
									<h1>
										<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
											Spróbuj lekcji diagnostycznej
										<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
											Experience a test lesson
										<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
											Experience a test lesson
										<?php else : ?>
											Спробуйте урок-діагностику
										<?php endif; ?>
									</h1>
									<div class="mobile-show">
										<div class="expert">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/nelya.png" alt="photo" />
											<div class="expert-info">
												<div class="name">
													<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
														<strong>Krystyna</strong>
													<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
														<strong>Krystyna</strong>
													<?php else : ?>
														<strong>Неля</strong>
													<?php endif; ?>
												</div>
												<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
													<p>Ekspert w zakresie indywidualnego doboru nauczyciela</p>
												<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
													<p>Teacher Selection Expert</p>
												<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
													<p>Teacher Selection Expert</p>
												<?php else : ?>
													<p>Наш експерт<br />з індивідуального підбору вчителя</p>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<P><?php the_field('try_description'); ?></p>
									<div class="buttons-wrap">
										<?php
										$link = get_field('try_button');
										if ($link) {
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button"  href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
										<?php echo esc_html($link_title); ?>
											<div class="icon margin-left">
												<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
												</svg>
											</div>
										</a>
										<?php } else { ?>
											<span class="button main-menu-popup">Book your test lesson 
											<div class="icon margin-left">
												<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
												</svg>
											</div>
										</span><?php } ?>
									</div>
								</div>
							</div>
							<div class="col"></div>
						</div>
					</div>
				</div>

				<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
				<?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
				<?php elseif (ICL_LANGUAGE_CODE == 'gb') : ?>
				<?php else : ?>
					<div class="video-reviews section">
						<div class="container">
							<h2>Учні та їх батьки<br>вдячні Матемі за якісну роботу</h2>
							<div class="row">
								<?php if (have_rows('video_reviews', 548)) : while (have_rows('video_reviews', 548)) : the_row(); ?>
										<div class="col col-4">
											<div class="video-card">
												<video controls>
													<source src="<?php the_sub_field('video_file'); ?>" type="video/mp4">
												</video>
												<br><br>
												<strong><?php the_sub_field('video_name'); ?></strong>
												<p><?php the_sub_field('bonus_info'); ?></p>
											</div>
										</div>
								<?php endwhile;
								else : endif; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
				<?php elseif (ICL_LANGUAGE_CODE == 'gb') : ?>
				<?php else : ?>
				<div class="faq-section">
					<div class="container">
						<h2>
							<?php the_field('faq_title'); ?>
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
				<?php endif; ?>
			</div><!-- page -->
		</div>



	</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>