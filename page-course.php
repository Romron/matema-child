<?php

/**
 * Template Name: Курс
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
								<div class="price">
									<?php the_field('course_price'); ?>
									<small>
										<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
											Курс можно оплатить частями. Для более детальной информации отправьте заявку
										<?php else : ?>
											Курс можна сплатити частинами. Для докладної інформації відправте заявку
										<?php endif; ?>
									</small>
								</div>
								<div class="buttons-wrap">
									<a href="#" class="button popmake-35901 button-course-purchase"><?php the_field('cta_buy'); ?></a>
									<a href="#" class="button popmake-35901 button-diagnostics-body"><?php the_field('cta_free'); ?></a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="course-teaser">
<script>const queryString=window.location.search;const urlParams=new URLSearchParams(queryString);function setCookie(cname,cvalue,exdays){const d=new Date();d.setTime(d.getTime()+exdays*24*60*60*1000);let expires="expires="+d.toUTCString();document.cookie=cname+"="+cvalue+";"+expires+";path=/";}
if(urlParams.get("aff_sub")!=null){setCookie("aff_sub",urlParams.get("aff_sub"),30);}
if(urlParams.get("aff_id")!=null){setCookie("aff_id",urlParams.get("aff_id"),30);}
if(urlParams.get("utm_source")!=null){setCookie("utm_source",urlParams.get("utm_source"),30);}
if(jQuery('input[name="aff_sub"]').length>0){if(getCookie("aff_sub")){jQuery('input[name="aff_sub"]').attr('value',getCookie('aff_sub'));}}
if(jQuery('input[name="utm_source"]').length>0){if(getCookie("utm_source")){jQuery('input[name="utm_source"]').attr('value',getCookie("utm_source"));}}
if(jQuery('input[name="input_14"]').length>0){if(getCookie("aff_sub")){jQuery('input[name="input_14"]').attr('value',getCookie('aff_sub'));}}
if(jQuery('input[name="input_15"]').length>0){if(getCookie("aff_id")){jQuery('input[name="input_15"]').attr('value',getCookie("aff_id"));}}
if(jQuery('input[name="input_16"]').length>0){if(getCookie("utm_source")){jQuery('input[name="input_16"]').attr('value',getCookie("utm_source"));}}
var videoActive;function playVideo(element){if(videoActive){stopVideo();}
var videoUrl=element.dataset.videoUrl;var vParam=videoUrl.split('v=');var videoId=vParam[1].includes('&')?vParam[1].substring(0,vParam[1].indexOf('&')):vParam[1];var embedUrl='https://www.youtube.com/embed/'+
videoId+'?rel=0&controls=1&showinfo=0&autoplay=1&start=5';var figure=element.querySelector('figure');var iframe=element.querySelector('iframe');element.classList.add('active');iframe.src=embedUrl;videoActive=element;}
function stopVideo(){var figure=videoActive.querySelector('figure');var iframe=videoActive.querySelector('iframe');videoActive.classList.remove('active');iframe.src='';}</script>
								<div class="video-thumb embed embed-video" onclick="playVideo(this)" data-video-url="https://www.youtube.com/watch?v=H3uG2wpx6Wo" style="background-image: url('https://www.mathema.me/wp-content/uploads/2021/12/222014897_960970068014724_7121586680416104351_n.jpg');">
									<iframe src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									<div class="play-button">
										Подивитись
										<svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.7975 4.06678L0.5775 0.959902C0.51375 0.922402 0.448125 0.899902 0.373125 0.899902C0.16875 0.899902 0.00187497 1.06865 0.00187497 1.2749H0V7.7249H0.00187497C0.00187497 7.93115 0.16875 8.0999 0.373125 8.0999C0.45 8.0999 0.51375 8.07365 0.583125 8.03615L5.7975 4.93303C5.92125 4.8299 6 4.67428 6 4.4999C6 4.32553 5.92125 4.17178 5.7975 4.06678Z" fill="white" />
										</svg>
									</div>
									<!-- <svg class="play-icon" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
		                                <circle cx="34.7826" cy="34.7826" r="34.7826" fill="#6536D6" />
		                                <path d="M47.1957 33.9166C47.8623 34.3015 47.8623 35.2637 47.1957 35.6486L29.3261 45.9656C28.6594 46.3505 27.8261 45.8694 27.8261 45.0996L27.8261 24.4656C27.8261 23.6958 28.6594 23.2147 29.3261 23.5996L47.1957 33.9166Z" fill="#F6F3F0" />
		                            </svg> -->
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="course-program">
				<div class="container wide">
					<h2>
						<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
							Программа курса
						<?php else : ?>
							Програма курсу
						<?php endif; ?>
					</h2>

					<div class="course-main-details">
						<div class="row">
							<div class="col">
								<p>
									<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
										Среднее время прохождения курса
									<?php else : ?>
										Середній час виконання
									<?php endif; ?>
								</p>
								<strong><?php the_field('program_time'); ?></strong>
							</div>
							<div class="col">
								<p>
									<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
										Всего уроков
									<?php else : ?>
										Усього уроків
									<?php endif; ?>
								</p>
								<strong><?php the_field('program_total'); ?></strong>
							</div>
							<div class="col">
								<p>
									<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
										Тестовых заданий
									<?php else : ?>
										Тестових завдань
									<?php endif; ?>
								</p>
								<strong><?php the_field('course_test'); ?></strong>
							</div>
						</div>
					</div>

					<div class="course-description">
						<?php the_field('course_description'); ?>
					</div>

					<div class="course-list">
						<h3><?php the_field('themes_title'); ?></h3>
						<br><br><br>
						<?php $i = 1;
						if (have_rows('course_program')) : while (have_rows('course_program')) : the_row(); ?>
								<div class="item">
									<div class="row">
										<div class="name">
											<div class="counter">тема <?php echo $i; ?></div>
											<?php the_sub_field('program_title'); ?>
										</div>
										<div class="info">
											<p><?php the_sub_field('program_description'); ?></p>
										</div>
									</div>
								</div>
								<?php $i++; ?>
						<?php endwhile;
						else : endif; ?>
					</div>

					<div class="certificate-section">
						<div class="info">
							<?php the_field('certificate'); ?>
						</div>
						<div class="certificate">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cert.jpg" alt="certificate" />
						</div>
					</div>
				</div>
			</div><!-- course info -->

			<div class="for-who">
				<div class="container">

					<h2><?php the_field('for_who_title'); ?></h2>

					<div class="for-who-list">
						<div class="row">
							<?php $fw = 1;
							if (have_rows('for_who')) : while (have_rows('for_who')) : the_row(); ?>
									<div class="col">
										<div class="counter"><?php echo $fw; ?></div>
										<p><?php the_sub_field('item'); ?></p>
									</div>
									<?php $fw++; ?>
							<?php endwhile;
							else : endif; ?>
						</div>
					</div>
				</div>
			</div>

			<div class="course-feedback">
				<div class="container">
					<h2><?php the_field('course_feedback_title'); ?></h2>
				</div>
				<div class="feed-gallery">
					<div class="swiper-container mySwiper">
						<div class="swiper-wrapper">
							<?php if (have_rows('course_feedback')) : while (have_rows('course_feedback')) : the_row(); ?>
									<div class="swiper-slide">
										<img src="<?php the_sub_field('feedback'); ?>" alt="feed">
									</div>
							<?php endwhile;
							else : endif; ?>
						</div>

						<div class="swiper-pagination"></div>
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
						<?php if (have_rows('faq_section')) : while (have_rows('faq_section')) : the_row(); ?>
								<div class="item faq-item">
									<div class="icon">
										<div class="hor"></div>
										<div class="ver"></div>
									</div>
									<div class="question">
										<?php the_sub_field('faq_question'); ?>
									</div>
									<div class="answer">
										<?php the_sub_field('faq_answer'); ?>
									</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
				</div>
			</div>

			<?php /* 
			<div class="our-blog">
				<div class="container wide">
					<h2>Бiльше по темi у нашому Блозi</h2>
					<div class="posts-list">
						<div class="container wide">
							<div class="row">
								<?php
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => 3,
									'orderby'  => array(
										'date' => 'DESC',
										'menu_order' => 'DESC'
									)
								);
								$blog = new WP_Query($args);
								$max_pages = $projects->max_num_pages;

								if ($blog->have_posts()) : ?>
									<?php while ($blog->have_posts()) : $blog->the_post(); ?>
										<a href="<?php the_permalink(); ?>" class="col">
											<div class="block">
												<div class="post-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url($post, $size); ?>');"></div>
												<div class="post-info">
													<div class="date">
														<?php the_time('d M, Y'); ?>
													</div>
													<h3><?php the_title(); ?></h3>
												</div>
											</div>
										</a>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			*/ ?>

		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>