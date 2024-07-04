<?php

/**
 * Template Name: О нас
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-about">

			<div class="head-about">
				<div class="container">
					<div class="wrap">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<br><br>
						<div class="trustpilot-widget">
		                    <?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
		                    <a href="https://pl.trustpilot.com/review/mathema.me" target="_blank" style="display: block;">
		                    <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
		                    <a href="https://www.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount" target="_blank" style="display: block;">
		                    <?php elseif (ICL_LANGUAGE_CODE == 'gb') : ?>
		                    <a href="https://www.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount" target="_blank" style="display: block;">
		                    <?php else : ?>
		                    <a href="https://www.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount" target="_blank" style="display: block;">
		                    <?php endif; ?>
		                        <div class="text">
		                            <?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
		                                Zobacz nasze <strong><?php the_field('trust_total_feed', 7); ?></strong> recenzji na
		                            <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
		                                See our <strong><?php the_field('trust_total_feed', 7); ?></strong> reviews on
		                            <?php elseif (ICL_LANGUAGE_CODE == 'gb') : ?>
		                                See our <strong><?php the_field('trust_total_feed', 7); ?></strong> reviews on
		                            <?php else : ?>
		                                Перегляньте наші <strong><?php the_field('trust_total_feed', 7); ?></strong> вiдгук у
		                            <?php endif; ?>
		                        </div>
		                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1132.8 278.2" width="120"><path d="M297.7 98.6h114.7V120h-45.1v120.3h-24.8V120h-44.9V98.6zm109.8 39.1h21.2v19.8h.4c.7-2.8 2-5.5 3.9-8.1 1.9-2.6 4.2-5.1 6.9-7.2 2.7-2.2 5.7-3.9 9-5.3 3.3-1.3 6.7-2 10.1-2 2.6 0 4.5.1 5.5.2s2 .3 3.1.4v21.8c-1.6-.3-3.2-.5-4.9-.7-1.7-.2-3.3-.3-4.9-.3-3.8 0-7.4.8-10.8 2.3-3.4 1.5-6.3 3.8-8.8 6.7-2.5 3-4.5 6.6-6 11s-2.2 9.4-2.2 15.1v48.8h-22.6V137.7zm164 102.6h-22.2V226h-.4c-2.8 5.2-6.9 9.3-12.4 12.4-5.5 3.1-11.1 4.7-16.8 4.7-13.5 0-23.3-3.3-29.3-10s-9-16.8-9-30.3v-65.1H504v62.9c0 9 1.7 15.4 5.2 19.1 3.4 3.7 8.3 5.6 14.5 5.6 4.8 0 8.7-.7 11.9-2.2 3.2-1.5 5.8-3.4 7.7-5.9 2-2.4 3.4-5.4 4.3-8.8.9-3.4 1.3-7.1 1.3-11.1v-59.5h22.6v102.5zm38.5-32.9c.7 6.6 3.2 11.2 7.5 13.9 4.4 2.6 9.6 4 15.7 4 2.1 0 4.5-.2 7.2-.5s5.3-1 7.6-1.9c2.4-.9 4.3-2.3 5.9-4.1 1.5-1.8 2.2-4.1 2.1-7-.1-2.9-1.2-5.3-3.2-7.1-2-1.9-4.5-3.3-7.6-4.5-3.1-1.1-6.6-2.1-10.6-2.9-4-.8-8-1.7-12.1-2.6-4.2-.9-8.3-2.1-12.2-3.4-3.9-1.3-7.4-3.1-10.5-5.4-3.1-2.2-5.6-5.1-7.4-8.6-1.9-3.5-2.8-7.8-2.8-13 0-5.6 1.4-10.2 4.1-14 2.7-3.8 6.2-6.8 10.3-9.1 4.2-2.3 8.8-3.9 13.9-4.9 5.1-.9 10-1.4 14.6-1.4 5.3 0 10.4.6 15.2 1.7 4.8 1.1 9.2 2.9 13.1 5.5 3.9 2.5 7.1 5.8 9.7 9.8 2.6 4 4.2 8.9 4.9 14.6h-23.6c-1.1-5.4-3.5-9.1-7.4-10.9-3.9-1.9-8.4-2.8-13.4-2.8-1.6 0-3.5.1-5.7.4-2.2.3-4.2.8-6.2 1.5-1.9.7-3.5 1.8-4.9 3.2-1.3 1.4-2 3.2-2 5.5 0 2.8 1 5 2.9 6.7 1.9 1.7 4.4 3.1 7.5 4.3 3.1 1.1 6.6 2.1 10.6 2.9 4 .8 8.1 1.7 12.3 2.6 4.1.9 8.1 2.1 12.1 3.4 4 1.3 7.5 3.1 10.6 5.4 3.1 2.3 5.6 5.1 7.5 8.5 1.9 3.4 2.9 7.7 2.9 12.7 0 6.1-1.4 11.2-4.2 15.5-2.8 4.2-6.4 7.7-10.8 10.3-4.4 2.6-9.4 4.6-14.8 5.8-5.4 1.2-10.8 1.8-16.1 1.8-6.5 0-12.5-.7-18-2.2-5.5-1.5-10.3-3.7-14.3-6.6-4-3-7.2-6.7-9.5-11.1-2.3-4.4-3.5-9.7-3.7-15.8H610zm74.6-69.7h17.1v-30.8h22.6v30.8h20.4v16.9h-20.4v54.8c0 2.4.1 4.4.3 6.2.2 1.7.7 3.2 1.4 4.4.7 1.2 1.8 2.1 3.3 2.7 1.5.6 3.4.9 6 .9 1.6 0 3.2 0 4.8-.1 1.6-.1 3.2-.3 4.8-.7v17.5c-2.5.3-5 .5-7.3.8-2.4.3-4.8.4-7.3.4-6 0-10.8-.6-14.4-1.7-3.6-1.1-6.5-2.8-8.5-5-2.1-2.2-3.4-4.9-4.2-8.2-.7-3.3-1.2-7.1-1.3-11.3v-60.5h-17.1v-17.1zm76.1 0h21.4v13.9h.4c3.2-6 7.6-10.2 13.3-12.8 5.7-2.6 11.8-3.9 18.5-3.9 8.1 0 15.1 1.4 21.1 4.3 6 2.8 11 6.7 15 11.7 4 5 6.9 10.8 8.9 17.4 2 6.6 3 13.7 3 21.2 0 6.9-.9 13.6-2.7 20-1.8 6.5-4.5 12.2-8.1 17.2-3.6 5-8.2 8.9-13.8 11.9-5.6 3-12.1 4.5-19.7 4.5-3.3 0-6.6-.3-9.9-.9-3.3-.6-6.5-1.6-9.5-2.9-3-1.3-5.9-3-8.4-5.1-2.6-2.1-4.7-4.5-6.5-7.2h-.4v51.2h-22.6V137.7zm79 51.4c0-4.6-.6-9.1-1.8-13.5-1.2-4.4-3-8.2-5.4-11.6-2.4-3.4-5.4-6.1-8.9-8.1-3.6-2-7.7-3.1-12.3-3.1-9.5 0-16.7 3.3-21.5 9.9-4.8 6.6-7.2 15.4-7.2 26.4 0 5.2.6 10 1.9 14.4 1.3 4.4 3.1 8.2 5.7 11.4 2.5 3.2 5.5 5.7 9 7.5 3.5 1.9 7.6 2.8 12.2 2.8 5.2 0 9.5-1.1 13.1-3.2 3.6-2.1 6.5-4.9 8.8-8.2 2.3-3.4 4-7.2 5-11.5.9-4.3 1.4-8.7 1.4-13.2zm39.9-90.5h22.6V120h-22.6V98.6zm0 39.1h22.6v102.6h-22.6V137.7zm42.8-39.1H945v141.7h-22.6V98.6zm91.9 144.5c-8.2 0-15.5-1.4-21.9-4.1-6.4-2.7-11.8-6.5-16.3-11.2-4.4-4.8-7.8-10.5-10.1-17.1-2.3-6.6-3.5-13.9-3.5-21.8 0-7.8 1.2-15 3.5-21.6 2.3-6.6 5.7-12.3 10.1-17.1 4.4-4.8 9.9-8.5 16.3-11.2 6.4-2.7 13.7-4.1 21.9-4.1s15.5 1.4 21.9 4.1c6.4 2.7 11.8 6.5 16.3 11.2 4.4 4.8 7.8 10.5 10.1 17.1 2.3 6.6 3.5 13.8 3.5 21.6 0 7.9-1.2 15.2-3.5 21.8-2.3 6.6-5.7 12.3-10.1 17.1-4.4 4.8-9.9 8.5-16.3 11.2-6.4 2.7-13.7 4.1-21.9 4.1zm0-17.9c5 0 9.4-1.1 13.1-3.2 3.7-2.1 6.7-4.9 9.1-8.3 2.4-3.4 4.1-7.3 5.3-11.6 1.1-4.3 1.7-8.7 1.7-13.2 0-4.4-.6-8.7-1.7-13.1s-2.9-8.2-5.3-11.6c-2.4-3.4-5.4-6.1-9.1-8.2-3.7-2.1-8.1-3.2-13.1-3.2s-9.4 1.1-13.1 3.2c-3.7 2.1-6.7 4.9-9.1 8.2-2.4 3.4-4.1 7.2-5.3 11.6-1.1 4.4-1.7 8.7-1.7 13.1 0 4.5.6 8.9 1.7 13.2 1.1 4.3 2.9 8.2 5.3 11.6 2.4 3.4 5.4 6.2 9.1 8.3 3.7 2.2 8.1 3.2 13.1 3.2zm58.4-87.5h17.1v-30.8h22.6v30.8h20.4v16.9h-20.4v54.8c0 2.4.1 4.4.3 6.2.2 1.7.7 3.2 1.4 4.4.7 1.2 1.8 2.1 3.3 2.7 1.5.6 3.4.9 6 .9 1.6 0 3.2 0 4.8-.1 1.6-.1 3.2-.3 4.8-.7v17.5c-2.5.3-5 .5-7.3.8-2.4.3-4.8.4-7.3.4-6 0-10.8-.6-14.4-1.7-3.6-1.1-6.5-2.8-8.5-5-2.1-2.2-3.4-4.9-4.2-8.2-.7-3.3-1.2-7.1-1.3-11.3v-60.5h-17.1v-17.1z" fill="#191919"/><path fill="#00b67a" d="M271.3 98.6H167.7L135.7 0l-32.1 98.6L0 98.5l83.9 61L51.8 258l83.9-60.9 83.8 60.9-32-98.5 83.8-60.9z"/><path fill="#005128" d="M194.7 181.8l-7.2-22.3-51.8 37.6z"/></svg>
		                    </a>
		                </div><!-- trust -->
					</div>
				</div>
			</div>

			<div class="history-section">
				<div class="container">
					<div class="row">
						<div class="col col-7">
							<div class="image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/history_2.jpg" alt="history" />
							</div>
						</div>
						<div class="col col-3">
							<?php the_field('about_history'); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="countries-section">
				<div class="container">
					<div class="head">
						<h2><?php the_field('about_countries_title'); ?></h2>
					</div>
					<div class="row">
						<?php if (have_rows('contries_list')) : while (have_rows('contries_list')) : the_row(); ?>
								<div class="col">
									<div class="countrie">
										<?php the_sub_field('countrie'); ?>
									</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
				</div>
			</div>

			<?php if (ICL_LANGUAGE_CODE == 'pl') :  ?>
			<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
			<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
            <?php else : ?>
            <?php get_template_part('template-parts/benefits-section'); ?>
            <?php endif; ?>
			
            <?php if (ICL_LANGUAGE_CODE == 'en') :  ?>
            <?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
        	<?php else : ?>
			<?php get_template_part('template-parts/media-about-us'); ?>
			<?php endif; ?>

			<?php if (ICL_LANGUAGE_CODE == 'pl') :  ?>
			<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
			<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
			<?php else : ?>
			<div class="video-intoduction">
				<div class="container">
					<div class="teaser">
						<div class="video-thumb embed embed-video" onclick="playVideo(this)" data-video-url="<?php the_field('intro_teaser', 7); ?>" style="background-image: url('<?php the_field('intro_teaser_image', 7); ?>');">
							<iframe src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							<div class="play-button">
								Посмотреть
								<svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.7975 4.06678L0.5775 0.959902C0.51375 0.922402 0.448125 0.899902 0.373125 0.899902C0.16875 0.899902 0.00187497 1.06865 0.00187497 1.2749H0V7.7249H0.00187497C0.00187497 7.93115 0.16875 8.0999 0.373125 8.0999C0.45 8.0999 0.51375 8.07365 0.583125 8.03615L5.7975 4.93303C5.92125 4.8299 6 4.67428 6 4.4999C6 4.32553 5.92125 4.17178 5.7975 4.06678Z" fill="white" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>

			<div class="about-socials">
				<div class="container">
					<div class="head">
						<?php the_field('about_social'); ?>
					</div>
					<div class="socials">
						<div class="row">
							<?php if (have_rows('soocials')) : while (have_rows('soocials')) : the_row(); ?>
									<div class="social">
										<div class="image">
											<img src="<?php the_sub_field('social_logo'); ?>" alt="social" />
										</div>
										<p><strong><?php the_sub_field('social_subscribers'); ?></strong>
										<?php if (ICL_LANGUAGE_CODE == 'pl') :  ?>
										<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
										<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
										<?php else : ?>
							            підписників
							            <?php endif; ?>
										</p>
									</div>
							<?php endwhile;
							else : endif; ?>
						</div>
					</div>
				</div>
			</div>

			<div class="about-offers">
				<div class="container">
					<div class="head">
						<?php if (ICL_LANGUAGE_CODE == 'pl') :  ?>
			            <h2>Nasze usługi</h2>
			            <?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
			            <h2>What we offer</h2>
			           	<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
		           		<h2>What we offer</h2>
			            <?php else : ?>
			            <h2>Нашi послуги</h2>
			            <?php endif; ?>
					</div>
					<div class="row">
						<?php
						$counter = 1;
						if (have_rows('about_offers')) : while (have_rows('about_offers')) : the_row(); ?>
								<div class="col">
									<div class="offer">
										<div class="counter"><?php echo $counter; ?></div>
										<p><?php the_sub_field('offer'); ?></p>
										
										<?php if(get_sub_field('offer_button') ): ?>
										<div class="buttons-wrap">
											<?php
											$link = get_sub_field('offer_button');
											if ($link) :
												$link_url = $link['url'];
												$link_title = $link['title'];
												$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<?php endif; ?>
											<a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
												<?php echo esc_html($link_title); ?>
												<div class="icon margin-left">
													<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
													</svg>
												</div>
											</a>
										</div>
										<?php endif; ?>
									</div>
								</div>
								<?php $counter++;
							endwhile;
						else : endif; ?>
					</div>
				</div>
			</div>

			<?php if (ICL_LANGUAGE_CODE == 'en') :  ?>
    <?php elseif (ICL_LANGUAGE_CODE == 'pl') :  ?>
    <?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
    <?php else : ?>
	<div class="head-about"><div class="container"><div class="head">
						<h2>Наші викладачі</h2>
	</div></div></div>
    <?php get_template_part('template-parts/teachers-section'); ?>
    <?php endif; ?>

			<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
			<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
			<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
			<?php else : ?>
			<div class="video-reviews">
				<div class="container">
					<div class="head">
						<h2>Вiдгуки студентів та батьків про школу математики Матема</h2>
						<p>Ми допомогли 400 учням знайти найкращого викладача та легко опанувати математику онлайн.</p>
					</div>
					<div class="row">
						<?php if (have_rows('video_reviews', 548)) : while (have_rows('video_reviews', 548)) : the_row(); ?>
								<div class="col">
									<div class="video-card">
										<video controls poster="<?php the_sub_field('video_poster'); ?>">
											<source src="<?php the_sub_field('video_file'); ?>" type="video/mp4">
										</video>
										<div class="video-details">
											<strong><?php the_sub_field('video_name'); ?></strong>
											<p><?php the_sub_field('bonus_info'); ?></p>
										</div>
									</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>

			<style>
				.expert-section .col {width: 50%;}
				body .expert-section {padding-bottom: 50px;}
				.docs-dane {padding-bottom: 60px;}				
			</style>

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
								<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
									<p>Ekspert w zakresie indywidualnego doboru nauczyciela</p>
								<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
									<p>No commitment required, and you’ll receive a personalised analysis of your child’s maths skills. It’s a great way to see how we can take your child’s maths skills to the next level.</p>
								<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
									<p>No commitment required, and you’ll receive a personalised analysis of your child’s maths skills. It’s a great way to see how we can take your child’s maths skills to the next level.</p>
								<?php else : ?>
									<p>Це не зобов’язує до навчання і ви отримаєте розгорнутий аналіз про рівень знань учня.</p>
								<?php endif; ?></p>
								<div class="buttons-wrap">
									<?php
									$link = get_field('try_button');
									if ($link) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<?php endif; ?>

									<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
										<a class="button" href="<?php echo get_page_link('1705'); ?>" target="<?php echo esc_attr($link_target); ?>">
											ZAREZERWUJ CZAS NA LEKCJĘ
											<div class="icon margin-left">
												<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
												</svg>
											</div>
										</a>
									<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
										<a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
											Book your test lesson
											<div class="icon margin-left">
												<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
												</svg>
											</div>
										</a>
									<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
										<a class="button" href="<?php echo get_page_link('11079'); ?>">
											Book your test lesson
											<div class="icon margin-left">
												<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
												</svg>
											</div>
										</a>
									<?php else : ?>
										<a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
											<?php echo esc_html($link_title); ?>
											<div class="icon margin-left">
												<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
												</svg>
											</div>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col"></div>
					</div>
				</div>
			</div>

			

			<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
			<?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
			<?php else : ?>
			<div class="documents-section">
				<div class="container">
					<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
						<h2>Нашi документи</h2>
						<div class="row">
						<div class="col">
							<div class="doc-block">
								<div class="info">
									<h4 class="doc-title">Виписка з ЄДР</h3>
										<a class="button" href="<?php echo get_stylesheet_directory_uri() ?>/assets/docs/edr.jpg" target="_blank">Дивитись документ</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="doc-block">
								<div class="info">
									<h4 class="doc-title">Свідоцтво платника податків</h3>
										<a class="button" href="<?php echo get_stylesheet_directory_uri() ?>/assets/docs/svidotstvo.jpg" target="_blank">Дивитись документ</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="doc-block">
								<div class="info">
									<h4 class="doc-title">Оферта</h3>
										<a class="button" href="<?php echo get_stylesheet_directory_uri() ?>/assets/docs/oferta.docx" target="_blank">Дивитись документ</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="doc-block">
								<div class="info">
									<h4 class="doc-title">Виписка з ЄДР, база Мінюсту</h3>
										<a class="button" href="<?php echo get_stylesheet_directory_uri() ?>/assets/docs/vipiska.png" target="_blank">Дивитись документ</a>
								</div>
							</div>
						</div>
					</div>
					<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
						<div class="docs-dane"><h2>Dane firmy:</h2>
						MATHEMA SP. Z O.O. SPÓŁKA Z OGRANICZONĄ ODPOWIEDZIALNOŚCIĄ, woj. Mazowieckie, pow. Warszawa, gm. Warszawa, miejsc. Warszawa, ul. Złota, nr 7/28, 00-019, Polska
						</div>
					<?php } ?>
				</div>
			</div>
			<?php endif; ?>

		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>