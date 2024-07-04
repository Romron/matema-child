<?php

/**
 * Template Name: Диагностика - Подтверждение регистрации - Польский
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-diagnostic-registration-success">

			<div class="page-hero-section">
				<div class="container">
					<div class="wrap hero-description-wrap">
						<div class="call-icon">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/phone_call.gif" alt="phone" />
						</div>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
<style>
.page-diagnostic-registration-success .hero-description-wrap .call-icon img {height: auto;}
.page-diagnostic-registration-success .hero-description-wrap .call-icon {max-height: 200px;}
</style>
			<!-- <div class="press-section">
				<div class="container">
					<h2>Матема привернула увагу<br>телебачення та преси:</h2>
				</div>
				<?php get_template_part('template-parts/media-about-us'); ?>
			</div> -->

			<div class="about-school">
				<div class="container">
					<?php  switch (ICL_LANGUAGE_CODE) {
                       
						case 'pl':
						?> <h2>O szkole</h2>
					<div class="row">
						<div class="col">
							<div class="text-block">
								<p>
									Matema to specjalistyczna internetowa szkoła Matematyki. Pracujemy z uczniami w każdym wieku, pomagamy podciągnąć program szkolny, poprawić straconą wiedzę, przygotować się do pracy kontrolnej i pomyślnie zdać maturę.<br><br>
									Korepetytorze szkoły przeprowadzają co miesiąc 5 000 lekcji. W zespole jest ponad 90 nauczycieli, uczy się ponad 1000 uczniów nie tylko z Polski, ale i z różnych krajów Europy. Rodzice nas wybierają, ponieważ wiemy, jak wybrać idealnego nauczyciela do potencjału każdego ucznia.
								</p>
							</div>
						</div>
						<div class="col">
							<div class="statistic">
								<ul>
									<li>9 za 10 dzieci uczy się z nauczycielem, którego wybieramy</li>
									<li>Uczymy tylko matematyki, więc jesteśmy ekspertami w tym zakresie</li>
									<li>Co drugie dziecko wybiera naukę w Matemie po pierwszej lekcji</li>
								</ul>
							</div>
						</div>
					</div><?php
						break;
						default:
						?> <h2>About school</h2>
					<div class="row">
						<div class="col">
							<div class="text-block">
								<p>
									Matema is a specialized online school of Mathematics. We work with students of all ages, help them improve their school curriculum, improve their knowledge, prepare for their tests and successfully pass their final exams.<br><br>
									The school's tutors conduct 5,000 lessons each month. The team consists of over 90 teachers, and over 1,000 students study not only from UK but also from various European countries. Parents choose us because we know how to choose the perfect teacher for each student's potential.
								</p>
							</div>
						</div>
						<div class="col">
							<div class="statistic">
								<ul>
									<li>9 out of 10 children study with the teacher we choose</li>
									<li>We only teach math, so we are experts in this field</li>
									<li>Every second child chooses to study Mathematics after the first lesson</li>
								</ul>
							</div>
						</div>
					</div>
						<?php
						} ?>

					
					
				</div>
			</div>

			<?php /* 
			<div class="teachers-section">
				<div class="container">
					<div class="head">
						<h2>Наш менеджер підбере вам вчителя,<br>але ви вже можете познайомится з командою школи на нашому сайті.</h2>
					</div>

					<div class="team-list">
						<div class="row">
							<?php
							$args = array(
								'orderby'   => 'rand',
								'post_type' => 'post',
								'cat' => 23,
								'posts_per_page' => 3
							);
							$blog = new WP_Query($args);
							if ($blog->have_posts()) : ?>
								<?php while ($blog->have_posts()) : $blog->the_post(); ?>

									<div class="col">
										<div class="teacher-card">
											<div class="photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($post); ?>');"></div>
											<div class="details">
												<h3><?php the_title(); ?></h3>
												<div class="price-wrap">
													<div class="price"><?php the_field('price_for_hour') ?> грн./год</div>
												</div>
												<div class="buttons-wrap">
													<a href="<?php the_permalink(); ?>" class="button smaller">
														Детальнiше
														<div class="icon margin-left">
															<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
															</svg>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>

								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="button-wrap" style="text-align: center;">
						<a href="/teachers" class="learn-more-link">Переглянути усiх викладачiв</a>
					</div>
				</div><!-- container -->
			</div>

			<div class="video-reviews">
				<div class="container">
					<h2>Учні та їх батьки<br>вдячні Матемі за якісну роботу</h2>
					<div class="row">
						<?php if (have_rows('video_reviews', 548)) : while (have_rows('video_reviews', 548)) : the_row(); ?>
								<div class="col">
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
			*/ ?>

		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php
if (isset($_COOKIE['aff_sub'])) {

	$curl = curl_init();
	curl_setopt_array($curl, [
		CURLOPT_URL => "https://rdr.fmcgsd.net/in/postback/4883/" . $_COOKIE['aff_sub'] . "?trans_id=" . time() . "&token=cGF2bG8ucGVkZW5rb0BnbWFpbC5jb20",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_FOLLOWLOCATION => true
	]);
	$response = curl_exec($curl);
	curl_close($curl);
	// var_dump($response);
}
?>

<?php get_footer(); ?>