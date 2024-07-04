<?php

get_header(); ?>




<?php if (is_page( 2366 )) { ?>

		<div class="inner-page no-padding">
		<div class="page-wrap page-tutors">

			<div class="head">
				<div class="container">
					<div class="wrap">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<div class="tutors-listing">
				<div class="container">
					<?php
					$args = array(
						'post_type' => 'tutor',
						'paged' => $paged,
						'posts_per_page' => 20,
						'orderby'  => array(
							'date' => 'DESC',
							'menu_order' => 'DESC'
						)
						
					);
					$tutors = new WP_Query($args);
					query_posts( $tutors );
					echo do_shortcode('[fe_widget id="46661" show_selected="yes" show_count="yes" horizontal="yes" columns="4"]');				
					if ($tutors->have_posts()) : ?>
						<?php while ($tutors->have_posts()) : $tutors->the_post();
						$tutor_categories = get_the_terms($post->ID, 'tutors'); ?>

						<?php
						$post_id = get_the_ID();
						$featured_image_url = get_the_post_thumbnail_url($post_id);
						
						?>
						<script>
	function PopupFunction(el) {	
		var tutname = jQuery(el).closest('.row').find('h4');
		jQuery('.tutpopname').text(tutname.text());
		tutname = jQuery(el).closest('.row').find('.tutid');
		jQuery('input#input_28_7').val(tutname.text());
		jQuery('.popuptopphoto').empty();
		jQuery(el).closest('.tutor-block').find('.tutor-photo').clone().appendTo( ".popuptopphoto" );
    }
    
						</script>
							<div class="col">
								<span class="tutor-block">
									<div class="row">
										<div class="left-tut-wrap">
										<a  href="<?php the_permalink(); ?>">
											<?php if (has_post_thumbnail()) { ?>
												<div class="tutor-photo" style="background-image: url('<?php echo $featured_image_url; ?>'); background-size: cover;"></div>
											<?php } else { ?>
												<div class="tutor-photo tutor-place-photo"></div>	
											<?php } ?>
										</a>
										<a href="<?php the_permalink(); ?>">
												<div class="tutor-head">
													<h4><?php the_title(); ?></h4>
												</div>
											</a>
										<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" hide="if_empty,bars,summary"]');?>	
										</div>	
										<div class="tutor-info-wrap">
											<div class="details">
												<ul>
													<li style="display: none;">
									ID:
									<strong class="tutid"><?php the_field('tut_id'); ?></strong>
								</li>
								<?php if(get_field('education') && (get_field('education') != "")){?>
								<li>	
									Образование: <strong><?php the_field('education'); ?></strong>
								</li><?php } ?>
								<?php $terms = get_the_terms( $post->ID , 'repetitorskii_stazh' );
								if ($terms){?>
								<li>	
									Репетиторский стаж: <strong><?php echo join(', ', wp_list_pluck($terms, 'name'));?></strong>
								</li><?php } ?>
								<?php $terms = get_the_terms( $post->ID , 'kvalifikatsiya' );
								if ($terms){?>
								<li>	
									Квалификация: <strong><?php echo join(', ', wp_list_pluck($terms, 'name'));?></strong>
								</li><?php } ?>
								<?php $terms = get_the_terms( $post->ID , 'klasi' );
								if ($terms){?>
								<li>	
									Классы: <strong><?php echo join(', ', wp_list_pluck($terms, 'name'));?></strong>
								</li><?php } ?>
								<?php $terms = get_the_terms( $post->ID , 'ispiti' );
								if ($terms){?>
								<li>	
									Экзамены: <strong><?php echo join(', ', wp_list_pluck($terms, 'name'));?></strong>
								</li><?php } ?>
								<?php $terms = get_the_terms( $post->ID , 'navchalni_programi' );
								if ($terms){?>
								<li>	
									Учебные программы: <strong><?php echo join(', ', wp_list_pluck($terms, 'name'));?></strong>
								</li><?php } ?>
								<?php $terms = get_the_terms( $post->ID , 'mova_vikladannya' );
								if ($terms){?>
								<li>	
									Языки преподавания: <strong><?php echo join(', ', wp_list_pluck($terms, 'name'));?></strong>
								</li><?php } ?>
												</ul>
											</div>
											<div class="bio">
												<?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
											</div>
										</div>	
								<div class="right-area">
								<?php $terms = get_the_terms( $post->ID , 'tutors' );
								if ($terms){?>
								<div class="tut-city"><?php echo join(', ', wp_list_pluck($terms, 'name'));?></div>
								<?php } ?>
											<div class="buttons-wrap">
												<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
													<span class="button smaller tutpopup">Zarezerwuj lekcję</span>
												<?php else : ?>
													<span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронировать урок</span>
												<?php endif; ?>
											</div>
											<div class="price-wrap">
												<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
													<div class="price"><?php the_field('price_for_hour', $post->ID) ?> zl./god</div>
												<?php else : ?>
													<div class="price"><?php $terms = get_the_terms( $post->ID , 'tsina' );
											echo join(', ', wp_list_pluck($terms, 'name'));?> грн./час</div>
												<?php endif; ?>
										</div>
										</div>	
									</div>
								</span>
							</div>
	
						<?php endwhile; ?>
						<div class="pagination">
    <?php wp_reset_postdata();
	wp_reset_query();
        echo paginate_links( array(
            'base'         => get_permalink().'%_%',
            'total'        => $tutors->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => 'Предыдущая страница',
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Следующая страница', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
</div>
						
					<?php endif; ?>
				</div>
			</div>
<style>
.page-numbers:not(.current) {
	display: inline-block;
    border: 1px solid #777;
    border-radius: 3px;
    padding: 3px 7px;
    margin: 0 10px;
	transition: all 0.2s ease;
}
.page-numbers:hover {
	    transform: scale(1.1);
}
.page-tutors .tutors-listing .tutor-block .tutor-photo.tutor-place-photo {
       background-image: url("data:image/svg+xml,%3Csvg width='50' height='65' viewBox='0 0 50 65' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.23934 10.64L13.2593 14.17C11.6693 16.52 10.8393 19.22 10.8393 22.05C10.8393 29.79 17.1293 36.15 24.9393 36.15C32.7493 36.15 39.0393 29.86 39.0393 22.05C39.0393 19.28 38.2093 16.52 36.6893 14.24L43.7393 10.92V24.33L41.5993 28.89C41.4593 29.24 41.4593 29.58 41.6693 29.86C41.8793 30.14 42.2193 30.34 42.5693 30.34H46.6493C46.9993 30.34 47.3393 30.2 47.4793 29.86C47.6893 29.58 47.6893 29.24 47.5493 28.89L45.6793 24.33V10.02C45.6793 9.46998 45.6093 9.04998 44.6393 8.63998C44.4293 8.56998 25.4193 0.139976 25.4193 0.139976C25.1493 -2.38642e-05 24.8793 -2.38642e-05 24.5993 0.129976L5.23934 8.70998C4.89934 8.84998 4.61934 9.25998 4.61934 9.67998C4.61934 10.09 4.82934 10.44 5.23934 10.64ZM36.9093 22.05C36.9093 28.69 31.5193 34.08 24.8793 34.08C18.2393 34.08 12.8493 28.69 12.8493 22.05C12.8493 19.49 13.6793 17.07 15.1293 15L24.5293 19.22C24.6693 19.29 24.8093 19.29 24.9393 19.29C25.0793 19.29 25.2193 19.29 25.3493 19.22L34.6093 15.07C36.1493 17.14 36.9093 19.56 36.9093 22.05ZM44.1693 28.27L44.6493 27.23L45.0593 28.27H44.1693ZM25.0193 2.20998L41.8193 9.67998L25.0193 17.15L8.21934 9.67998L25.0193 2.20998Z' fill='url(%23paint0_linear_2006_2168)'/%3E%3Cpath d='M25.2893 38.64C11.8093 38.64 0.819336 49.63 0.819336 63.11C0.819336 63.66 1.29934 64.15 1.85934 64.15H48.7293C49.2793 64.15 49.7693 63.67 49.7693 63.11C49.7693 49.64 38.7693 38.64 25.2893 38.64ZM2.95934 62.08C3.50934 50.19 13.3293 40.72 25.3593 40.72C37.3893 40.72 47.1393 50.26 47.6893 62.08H2.95934Z' fill='url(%23paint1_linear_2006_2168)'/%3E%3Cdefs%3E%3ClinearGradient id='paint0_linear_2006_2168' x1='0.819336' y1='32.0918' x2='49.7693' y2='32.0918' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%23DA23FF'/%3E%3Cstop offset='1' stop-color='%239933EF'/%3E%3C/linearGradient%3E%3ClinearGradient id='paint1_linear_2006_2168' x1='0.819336' y1='32.0918' x2='49.7693' y2='32.0918' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%23DA23FF'/%3E%3Cstop offset='1' stop-color='%239933EF'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E%0A");
    background-size: 48px auto;

}
.perelinking a {
    color: #FF6943;
    text-decoration: underline;
}
.perelinking {display: flex;flex-flow: wrap;margin-bottom: 30px;}
.flexchild {flex: 1 0 calc(25% - 10px);padding-right: 10px;}
.link-per {margin-bottom: 5px;}
.page-tutors .page-tutors {display: none;}
a {color: #000;}
#error-page .wpc-posts-found p {color: red;font-size: 20px;}
#error-page .wpc-posts-found p::after {content: " - Сбросить все фильтры";}
#error-page .head, #error-page .wpc-filters-widget-top-container {display: none;}
@media only screen and (max-width: 1200px) {
	.flexchild {flex: unset;width: calc(50% - 20px);white-space: nowrap;}
}
@media only screen and (max-width: 690px) {
	.flexchild {flex: unset;width: calc(100% - 20px);white-space: normal;}
}
</style>
<script>
if ( jQuery( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/ru/tutors/");
		window.location.href = "https://www.mathema.me/ru/tutors/";
		jQuery(location).prop('href', 'https://www.mathema.me/ru/tutors');
	}
jQuery(document).ready(function($){
	if ( $( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/ru/tutors/");
		window.location.href = "https://www.mathema.me/ru/tutors/";
		$(location).prop('href', 'https://www.mathema.me/ru/tutors');
	}
});
</script>
			<?php 
			function rebuildlink($termtype,$termslug,$termname) {
				if(substr_count($_SERVER['REQUEST_URI'], '-') > 1) {
					$finalurl = '/ru/tutors/'.$termtype.$termslug.'/';
				} else {
					
				
				$additancor = "";
				$finalurl = "";
				if($termtype !== "misto-") {
					if(strpos($_SERVER['REQUEST_URI'], "misto-") !== false){//LINK TO NOT MISTO, MISTO IS IN URL
						$tmpposstart = strpos($_SERVER['REQUEST_URI'], "misto-");
						$tmpposend = strpos($_SERVER['REQUEST_URI'], "/", $tmpposstart + 1);
						$tmpname = substr($_SERVER['REQUEST_URI'], $tmpposstart + 6, $tmpposend - $tmpposstart - 6);
						$finalurl .= '/ru/tutors/misto-'.$tmpname.'/';
						$curtermname = get_term_by('slug', $tmpname, 'tutors');
						$additancor .= ', '. $curtermname->name;
					}
					else {//LINK TO NOT MISTO, MISTO ISN'T IN URL
						$finalurl .= '/ru/tutors/';
					}
				}
				else {
					//LINK TO MISTO, MISTO ISN'T IN URL
					$finalurl .= '/ru/tutors/misto-'.$termslug.'/';
				}
				if($termtype !== "klasi-") {
					if(strpos($_SERVER['REQUEST_URI'], "klasi-") !== false){//LINK TO NOT KLASY, KLASY IS IN URL
						$tmpposstart = strpos($_SERVER['REQUEST_URI'], "klasi-");
						$tmpposend = strpos($_SERVER['REQUEST_URI'], "/", $tmpposstart + 1);
						$tmpname = substr($_SERVER['REQUEST_URI'], $tmpposstart + 6, $tmpposend - $tmpposstart - 6);
						$finalurl .= 'klasi-'.$tmpname.'/';
						$curtermname = get_term_by('slug', $tmpname, 'klasi');
						$additancor .= ', '. $curtermname->name.' клас';
					}
					//else LINK TO NOT KLASY, KLASY ISN'T IN URL, skipping
				}
				else {
					//LINK TO KLASY, KLASY ISN'T IN URL
					$finalurl .= 'klasi-'.$termslug.'/';
					$additancor =' класс '.$additancor;
				}
				if($termtype !== "ispyty-") {
					if(strpos($_SERVER['REQUEST_URI'], "ispyty-") !== false){//LINK TO NOT ISPITY, ISPITY IS IN URL
						$tmpposstart = strpos($_SERVER['REQUEST_URI'], "ispyty-");
						$tmpposend = strpos($_SERVER['REQUEST_URI'], "/", $tmpposstart + 1);
						$tmpname = substr($_SERVER['REQUEST_URI'], $tmpposstart + 7, $tmpposend - $tmpposstart - 7);
						$finalurl .= 'ispyty-'.$tmpname.'/';
						$curtermname = get_term_by('slug', $tmpname, 'ispiti');
						$additancor .= ', '. $curtermname->name;
					}
					//else LINK TO NOT ISPITY, ISPITY ISN'T IN URL, skipping
				}
				else {
					//LINK TO ISPITY, ISPITY ISN'T IN URL
					$finalurl .= 'ispyty-'.$termslug.'/';
				}
				if($termtype !== "programy-") {
					if(strpos($_SERVER['REQUEST_URI'], "programy-") !== false){//LINK TO NOT PROGRAMY, PROGRAMY IS IN URL
						$tmpposstart = strpos($_SERVER['REQUEST_URI'], "programy-");
						$tmpposend = strpos($_SERVER['REQUEST_URI'], "/", $tmpposstart + 1);
						$tmpname = substr($_SERVER['REQUEST_URI'], $tmpposstart + 9, $tmpposend - $tmpposstart - 9);
						$finalurl .= 'programy-'.$tmpname.'/';
						$curtermname = get_term_by('slug', $tmpname, 'navchalni_programi');
						$additancor .= ', '. $curtermname->name;
					}
					//else LINK TO NOT PROGRAMY, PROGRAMY ISN'T IN URL, skipping
				}
				else {
					//LINK TO PROGRAMY, PROGRAMY ISN'T IN URL
					$finalurl .= 'programy-'.$termslug.'/';
				}
				}
				echo '<div class="link-per"><a href="'.$finalurl.'">Репетитор по математике '.$termname.$additancor.'</a></div>';
			}
			?>
	
	
	<div class="container">
				<div class="seo-block">
					<div class="col">
				
				<?php  if(substr_count($_SERVER['REQUEST_URI'], '/') < 7) { ?>
				<div class="perelinking">
					<div class="flexchild"><h3>Город:</h3>
					<?php $terms = get_terms([
						'taxonomy' => 'tutors'
					]);
					echo '<div>';
					if(strpos($_SERVER['REQUEST_URI'], "misto-") !== false){
					foreach ($terms as $term){
						if(strpos($_SERVER['REQUEST_URI'], $term->slug) == false){
							echo '<div class="link-per"><a href="/ru/tutors/misto-'.$term->slug.'">Репетитор по математике '.$term->name.'</a></div>';
						}	
					}
				} else { 
					foreach ($terms as $term){
						rebuildlink("misto-",$term->slug,$term->name);
					}
				} 
				echo '</div></div>'; ?>
				<div class="flexchild"><h3>Классы:</h3>
					<?php $terms = get_terms([
						'taxonomy' => 'klasi'
					]);
					echo '<div>';
					if(strpos($_SERVER['REQUEST_URI'], "klasi-") !== false){
					foreach ($terms as $term){
						if(strpos($_SERVER['REQUEST_URI'], $term->slug) == false){
							echo '<div class="link-per"><a href="/ru/tutors/klasi-'.$term->slug.'">Репетитор по математике '.$term->name.' клас</a></div>';
						}	
					}
				} else { 
					foreach ($terms as $term){
						rebuildlink("klasi-",$term->slug,$term->name);
					}
				} 
				echo '</div></div>'; ?>
				<div class="flexchild"><h3>Экзамены:</h3>
					<?php $terms = get_terms([
						'taxonomy' => 'ispiti'
					]);
					echo '<div>';
					if(strpos($_SERVER['REQUEST_URI'], "ispyty-") !== false){
					foreach ($terms as $term){
						if(strpos($_SERVER['REQUEST_URI'], $term->slug) == false){
							echo '<div class="link-per"><a href="/ru/tutors/ispyty-'.$term->slug.'">Репетитор по математике '.$term->name.'</a></div>';
						}	
					}
				} else { 
					foreach ($terms as $term){
						rebuildlink("ispyty-",$term->slug,$term->name);
					}
				} 
				echo '</div></div>'; ?>
				<div class="flexchild"><h3>Учебные программы:</h3>
					<?php $terms = get_terms([
						'taxonomy' => 'navchalni_programi'
					]);
					echo '<div>';
					if(strpos($_SERVER['REQUEST_URI'], "programy-") !== false){
					foreach ($terms as $term){
						if(strpos($_SERVER['REQUEST_URI'], $term->slug) == false){
							echo '<div class="link-per"><a href="/ru/tutors/programy-'.$term->slug.'">Репетитор по математике '.$term->name.'</a></div>';
						}	
					}
				} else { 
					foreach ($terms as $term){
						rebuildlink("programy-",$term->slug,$term->name);
					}
				} 
				echo '</div></div>'; ?>
				</div>
	
                <?php
				}
					if ($_SERVER['REQUEST_URI'] != "/tutors/"){
						if( function_exists( 'flrt_get_seo_data' ) ){echo flrt_get_seo_data( $key = 'text' ).'<div style="height: 20px;">';}
					} else { //echo do_shortcode('[fe_widget id="40077" show_selected="yes" show_count="no" horizontal="yes" columns="4"]');
						?>
						<?php the_field('tutors-seo-text'); ?>
					<?php } ?>
	</div>
</div>
			<div class="faq-section">
				<div class="container">
					<h2>Часто задаваемые вопросы</h2>
					<div class="faq faq-list">
						<?php if (have_rows('faq', 38714)) : while (have_rows('faq', 38714)) : the_row(); ?>
								<div class="item faq-item">
									<div class="icon">
										<div class="hor"></div>
										<div class="ver"></div>
									</div>
									<div class="question">
										<?php the_sub_field('questuion', 38714); ?>
									</div>
									<div class="answer">
										<?php the_sub_field('answer', 38714); ?>
									</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
				</div>
			</div>
</div>
</div>
		</div><!-- page name -->
	</div><!-- inner page -->
<?php } else { ?>


	<?php if (in_category(23) || in_category(48)) : ?>
	<div class="inner-page">
		<div class="page-wrap page-teachers">

			<div class="head-teachers">
				<div class="container">
					<div class="wrap">
						<div class="row">
							<div class="col">
								<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
								<div class="description">
									<?php
									$post   = get_post(2366);
									$output =  apply_filters('the_content', $post->post_content);
									echo $output;
									?>
									<span class="button button-tutor-selection modal-trigger"><?php the_field('cta', 2366); ?></span>
								</div>
        						<?php else : ?>
								<div class="description">
									<?php
									$post   = get_post(715);
									$output =  apply_filters('the_content', $post->post_content);
									echo $output;
									?>
									<span class="button button-tutor-selection modal-trigger"><?php the_field('cta', 715); ?></span>
								</div>
								<?php endif; ?>
							</div>
							<div class="col">
								<div class="teaser">
									<div class="video-thumb embed embed-video" onclick="playVideo(this)" data-video-url="https://www.youtube.com/watch?v=H3uG2wpx6Wo" style="background-image: url('https://www.mathema.me/wp-content/uploads/2021/12/222014897_960970068014724_7121586680416104351_n.jpg');">
										<iframe src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										<div class="play-button">
											<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
											Zobacz recenzję
											<?php else : ?>
											Подивитись вiдгук
											<?php endif; ?>
											<div class="icon margin-left">
						                        <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.7975 4.06678L0.5775 0.959902C0.51375 0.922402 0.448125 0.899902 0.373125 0.899902C0.16875 0.899902 0.00187497 1.06865 0.00187497 1.2749H0V7.7249H0.00187497C0.00187497 7.93115 0.16875 8.0999 0.373125 8.0999C0.45 8.0999 0.51375 8.07365 0.583125 8.03615L5.7975 4.93303C5.92125 4.8299 6 4.67428 6 4.4999C6 4.32553 5.92125 4.17178 5.7975 4.06678Z" fill="white" />
												</svg>
						                    </div><!-- icon -->
										</div><!-- play button -->
									</div>
								</div><!-- teser -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="teachers-section">
				<div class="container">
					<div class="row">
						<?php
						$args = array(
							'post_type' => 'post',
							'cat' => 23,
							'orderby'  => array(
								'date' => 'DESC',
								'menu_order' => 'DESC'
							)
						);
						$blog = new WP_Query($args);
						if ($blog->have_posts()) : ?>
							<?php while ($blog->have_posts()) : $blog->the_post(); ?>

								<div class="col">
									<div class="teacher-card">
										<a href="<?php the_permalink(); ?>">
											<div class="photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($post); ?>');"></div>
										</a>
										<div class="details">
											<h3><?php the_title(); ?></h3>
											<div class="price-wrap">
												<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
												<div class="price"><?php the_field('price_for_hour') ?> zl./god</div>
												<?php else : ?>
												<div class="price"><?php the_field('price_for_hour') ?> грн./год</div>
												<?php endif; ?>
											</div>
											<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
											<ul class="features" 
												style="
												display: flex;
												flex-wrap: wrap;
												">
												<li style="width: 50%;">
													<p>Edukacja:</p>
													<strong><?php the_field('education'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Staż pracy:</p>
													<strong><?php the_field('experience'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Prowadzone lekcje:</p>
													<strong><?php the_field('lessons_total'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Dla klas:</p>
													<strong><?php the_field('specialization'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Języki wykładowe:</p>
													<strong><?php the_field('tchr_category'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Języki wykładowe:</p>
													<strong><?php the_field('lanuages'); ?></strong>
												</li>
											</ul>
											<?php else : ?>
											<ul class="features" 
												style="
												display: flex;
												flex-wrap: wrap;
												">
												<li style="width: 50%;">
													<p>Освiта:</p>
													<strong><?php the_field('education'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Стаж:</p>
													<strong><?php the_field('experience'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Проведенно урокiв:</p>
													<strong><?php the_field('lessons_total'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Спецiалiзацiя:</p>
													<strong><?php the_field('specialization'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Категорiя:</p>
													<strong><?php the_field('tchr_category'); ?></strong>
												</li>
												<li style="width: 50%;">
													<p>Мови викладання:</p>
													<strong><?php the_field('lanuages'); ?></strong>
												</li>
											</ul>
											<?php endif; ?>

											<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
											<div class="buttons-wrap">
												<a href="<?php the_permalink(); ?>" class="button button-tutor-details smaller">Więcej</a>
												<span class="button button-tutor-booking modal-trigger smaller">Zarezerwuj lekcję</span>
											</div>
											<?php else : ?>
											<div class="buttons-wrap">
												<a href="<?php the_permalink(); ?>" class="button button-tutor-details smaller">Детальнiше</a>
												<span class="button button-tutor-booking modal-trigger smaller">Забронювати урок</span>
											</div>
											<?php endif; ?>
											
										</div>
									</div>
								</div>

							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<?php /* 

			<div class="container">
				<div class="pricing-list">
					<h2>Цiни на заняття з репетиторами</h2>
					<div class="row">
						<?php if (have_rows('teachers_pricing', 715)) : while (have_rows('teachers_pricing', 715)) : the_row(); ?>
								<div class="offer">
									<div class="offer-name"><?php the_sub_field('tchr_offer'); ?></div>
									<div class="offer-price"><?php the_sub_field('tchr_offr_price'); ?> грн./год</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
				</div>
			</div>
			*/ ?>

			<div class="container">
				<div class="seo-block">
					<div class="col">
						<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
						<?php the_field('seo_text', 2366); ?>
						<?php else : ?>
						<?php the_field('seo_text', 715); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="faq-section">
				<div class="container">
					<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
						<h2>Najczęściej zadawane pytania</h2>
						<div class="faq faq-list">
							<?php if (have_rows('faq_section', 2366)) : while (have_rows('faq_section', 2366)) : the_row(); ?>
								<div class="item faq-item">
									<div class="icon">
										<div class="hor"></div>
										<div class="ver"></div>
									</div>
									<div class="question">
										<?php the_sub_field('faq_question', 2366); ?>
									</div>
									<div class="answer">
										<?php the_sub_field('faq_answer', 2366); ?>
									</div>
								</div>
							<?php endwhile;
							else : endif; ?>
						</div>
					<?php else : ?>
						<h2><?php the_field('faq_title', 715); ?></h2>
						<div class="faq faq-list">
							<?php if (have_rows('faq', 715)) : while (have_rows('faq', 715)) : the_row(); ?>
									<div class="item faq-item">
										<div class="icon">
											<div class="hor"></div>
											<div class="ver"></div>
										</div>
										<div class="question">
											<?php the_sub_field('questuion', 715); ?>
										</div>
										<div class="answer">
											<?php the_sub_field('answer', 715); ?>
										</div>
									</div>
							<?php endwhile;
							else : endif; ?>
						</div>
					<?php endif; ?>
					
				</div>
			</div>

		</div><!-- page name -->
	</div><!-- inner page -->

<?php elseif (in_category(12) || in_category(29) || in_category(37) || in_category(496) || in_category(491) || in_category(492) || in_category(495)) : ?>
<style>
.post-cover {position: relative;}
.abs-title {position: absolute;top: 60px;left: 25px;width: 100%;}
.abs-title h2 {max-width: 45%;font-size: 24px;text-transform: uppercase;}
.abs-descri p {max-width: 40%;font-size: 14px;text-transform: uppercase;}

@media only screen and (max-width: 1400px) {
	body .abs-title h2 {font-size: 1.5vw;max-width: 40%;}
	body .abs-descri p {font-size: 0.7vw;max-width: 36%;}
	.abs-title {top: 4vw;left: 2vw;}
}
@media only screen and (max-width: 991px) {
	body .abs-title h2 {font-size: 4.5vw;max-width: 45%;}
	body .abs-descri p {font-size: 2.5vw;max-width: 40%;}
	.abs-title {top: 14vw;left: 5.5vw;}
}
</style>
<?php $counter = 0;/*BLOG БЛОГ*/?>

	<div class="inner-page">
		<div class="page-wrap page-blog">

			<div class="head-blog">
				<div class="container">
					<h1>
						<?php $cat = get_the_category();
						echo $cat[0]->cat_name; ?>
					</h1>
				</div>
			</div>

			<div class="posts-list">
				<div class="container">
					<div class="row">
						<?php
						$args = array(
							'post_type' => 'post',
							'cat' => 12,
							'posts_per_page' => 99,
							'orderby'  => array(
								'date' => 'DESC',
								'menu_order' => 'DESC'
							)
						);
						$blog = new WP_Query($args);

						if ($blog->have_posts()) : ?>
							<?php while ($blog->have_posts()) : $blog->the_post(); ?>
								<a href="<?php the_permalink(); ?>" class="col">
									<div class="block">
										<!-- <div class="post-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url($post); ?>');"></div> -->
										<div class="post-cover cover<?php echo $counter++;?>">
											<img src="<?php echo get_the_post_thumbnail_url($post); ?>" style="display: block; height: auto; width: 100%;">
											<?php if (get_field('blog_image_title') != "") {?>
												<div class="abs-title"><h2 <?php if (get_field('text_colour') != "") {?>style="color: <?php the_field('text_colour'); ?>;"<?php } ?>><?php the_field('blog_image_title');?></h2>
												<?php if (get_field('blog_image_description') != "") {?>
													<div class="abs-descri"><p <?php if (get_field('text_colour') != "") {?>style="color: <?php the_field('text_colour'); ?>;"<?php } ?>><?php the_field('blog_image_description');?></p></div>
												<?php } ?>
												</div>
											<?php } ?>
											<?php if (get_field('title_size_px') != "") {?>
												<style>
													.cover<?php echo ($counter - 1);?> .abs-title h2 {font-size: <?php echo (get_field('title_size_px') / 2.5); ?>px;}
													@media only screen and (max-width: 1400px) {
														body .cover<?php echo ($counter - 1);?> .abs-title h2 {font-size: <?php echo ((get_field('title_size_px') - 10) / 30); ?>vw;}
													}
													@media only screen and (max-width: 991px) {
														body .cover<?php echo ($counter - 1);?> .abs-title h2 {font-size: <?php echo ((get_field('title_size_px') - 10) / 8); ?>vw;}
													}
												</style>
											<?php } ?>
											<?php if (get_field('image_descr_size_px') != "") {?>
												<style>
													body .cover<?php echo ($counter - 1);?> .abs-descri p {font-size: <?php echo (get_field('image_descr_size_px') / 2.5); ?>px;}
													@media only screen and (max-width: 1400px) {
														body .cover<?php echo ($counter - 1);?> .abs-descri p {font-size: <?php echo ((get_field('image_descr_size_px')) / 30); ?>vw;}
													}
													@media only screen and (max-width: 991px) {
														body .cover<?php echo ($counter - 1);?> .abs-descri p {font-size: <?php echo (get_field('image_descr_size_px') / 8); ?>vw;line-height: 1.2em;}
													}
												</style>
											<?php } ?>
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
												<div class="post-category">
													<?php
														$category = get_the_category();
														echo $category[0]->name; 
													?>
												</div>
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

		</div><!-- page name -->
	</div><!-- inner page -->

<?php endif ?>
<?php } ?>

<?php get_footer(); ?>