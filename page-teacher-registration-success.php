<?php

/**
 * Template Name: Учитель - Подтверждение регистрации
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-teacher-registration-success">

			<div class="page-hero-section">
				<div class="container">
					<div class="wrap hero-description-wrap">
						<!-- <div class="call-icon">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/phone_call.gif" alt="phone" />
						</div> -->
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<div class="press-section">
				<?php get_template_part('template-parts/media-about-us'); ?>
			</div>

			<div class="about-school">
				<div class="container">
					<h2>Про школу</h2>
					<div class="row">
						<div class="col">
							<div class="text-block">
								<p>Матема — онлайн-школа математики. Ми працюємо з учням 1-11 класів, допомагаємо підтягнути шкільну програму, підготуватися до контрольної роботи, ДПА чи ЗНО. Проводимо щомісяця 4 000 уроків. В команді — 90+ вчителів, навчається понад 600 учнів. Ми прагнемо створити найкращі умови роботи для вчителя. Тому, потрапивши в Матему, вчителі не розглядають інші варіанти репетиторства.</p>
							</div>
						</div>
						<div class="col">
							<div class="statistic">
								<ul>
									<li>5000 уроків в місяць</li>
									<li>Майже 1000 учнів</li>
									<li>9 за 10 дітей навчаються з вчителем, якого отримують на першому уроці</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="teachers-section">
				<div class="container">
					<div class="head">
						<h2>Наш менеджер підбере вам вчителя,<br>але ви вже можете познайомится з командою школи на нашому сайті.</h2>
					</div>

					<div class="tutors-listing">
				<div class="row">
					<?php

					$args = array(
						'post_type' => 'tutor',
						'posts_per_page' => 3,
						'orderby' => 'rand'
					);
					$tutors = new WP_Query($args);
					query_posts( $tutors );			
					if ($tutors->have_posts()) : ?>
						<?php while ($tutors->have_posts()) : $tutors->the_post();
						$tutor_categories = get_the_terms($post->ID, 'tutors'); ?>
						<?php
						$post_id = get_the_ID();
						$featured_image_url = get_the_post_thumbnail_url($post_id);
						?>
						<div class="col">
                            <div class="teacher-card">
							 <div class="photo" style="background-image: url('<?php echo $featured_image_url; ?>'); background-size: cover;"></div>
							<div class="details">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="price-wrap">
                                        <div class="price"><?php $terms = get_the_terms( $post->ID , 'tsina' );
											echo join(', ', wp_list_pluck($terms, 'name'));?> грн./год</div>	
									</div>
									<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" hide="if_empty,bars,summary"]');?>	
									<div class="buttons-wrap">
                                        <a href="<?php the_permalink(); ?>" class="button button-tutor-details smaller">
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
                    <?php wp_reset_postdata(); 
					wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>
					<div class="button-wrap" style="text-align: center;">
						<a href="/tutors/" class="learn-more-link">Переглянути усiх викладачiв</a>
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

		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php 
if(isset($_COOKIE['aff_sub'])){

$curl = curl_init();
	curl_setopt_array($curl, [
		CURLOPT_URL => "https://rdr.fmcgsd.net/in/postback/4883/".$_COOKIE['aff_sub']."?trans_id=".time()."&token=cGF2bG8ucGVkZW5rb0BnbWFpbC5jb20",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_FOLLOWLOCATION => true
	]);
	$response= curl_exec($curl);
	curl_close($curl);
	// var_dump($response);
	// var_dump("https://rdr.fmcgsd.net/in/postback/4883/".$_COOKIE['aff_sub']."?trans_id=".time()."&token=cGF2bG8ucGVkZW5rb0BnbWFpbC5jb20");
}
?>

<?php get_footer(); ?>