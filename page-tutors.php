<?php

/**
 * Template Name: Репетиторы
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
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
					/*$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;*/
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
					switch (ICL_LANGUAGE_CODE) {
                        case 'uk':
							echo do_shortcode('[fe_widget id="18227" show_selected="yes" show_count="yes" horizontal="yes" columns="4"]');
							break;
						case 'pl':
							echo do_shortcode('[fe_widget id="49761" show_selected="yes" show_count="yes" horizontal="yes" columns="4"]');
						break;
						case 'en':
							break;
						case 'ru':
							echo do_shortcode('[fe_widget id="46661" show_selected="yes" show_count="yes" horizontal="yes" columns="4"]');
							break;
						default:
							echo do_shortcode('[fe_widget id="18227" show_selected="yes" show_count="yes" horizontal="yes" columns="4"]');
						}
					/*echo do_shortcode('[fe_sort id="2"]');*/				
					if ($tutors->have_posts()) : 
                        $tutor_ids = [];
                        $i = 0;
                        ?>
						<?php while ($tutors->have_posts()) : $tutors->the_post();
						$tutor_categories = get_the_terms($post->ID, 'tutors'); 
						$post_id = get_the_ID();
						$featured_image_url = get_the_post_thumbnail_url($post_id);

                        if ($i <= 10) {
                            $tutor_ids[] = $post_id;
                        }
                        $i++;
						?>
						<script>
	function PopupFunction(el) {	
		var tutname = jQuery(el).closest('.row').find('h4');
		jQuery('.tutpopname').text(tutname.text());
		tutname = jQuery(el).closest('.row').find('.tutid');
		<?php switch (ICL_LANGUAGE_CODE) {
                        case 'uk':
						?> jQuery('input#input_6_7').val(tutname.text()); <?php
							break;
						case 'pl': 
						?> jQuery('input#input_30_16').val(tutname.text()); <?php
							break;
						case 'en':
						?> jQuery('input#input_62_7').val(tutname.text()); <?php
							break;
						case 'ru':
						?> jQuery('input#input_28_7').val(tutname.text()); <?php
							break;
						default:
						?> jQuery('input#input_6_7').val(tutname.text()); <?php
						} ?>
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
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.00232 0.000366211C10.1241 0.000366211 12.1589 0.843221 13.6592 2.34351C15.1595 3.8438 16.0023 5.87863 16.0023 8.00037C16.0023 10.1221 15.1595 12.1569 13.6592 13.6572C12.1589 15.1575 10.1241 16.0004 8.00232 16.0004C5.88059 16.0004 3.84576 15.1575 2.34547 13.6572C0.845174 12.1569
                                     0.00231934 10.1221 0.00231934 8.00037C0.00231934 5.87863 0.845174 3.8438 2.34547 2.34351C3.84576 0.843221 5.88059 0.000366211 8.00232 0.000366211ZM11.8573 3.34037L6.71732 9.27037L4.14732 6.87037L2.80732 8.12037L6.04732 12.6604H7.38732L13.1973 4.28037L11.8573 3.34037Z" fill="#057A55" />
                                            </svg>
													<h4><?php the_title(); ?></h4>
												</div>
											</a>
										<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" hide="if_empty,bars,summary"]');?>	
										</div>	
										<div class="tutor-info-wrap">
											<div class="details">
												<ul>
													<li style="display: none;">
									<span data-nosnippet>ID:
									<strong class="tutid"><?php the_field('tut_id'); ?></strong></span>
								</li>
								<?php $terms = get_the_terms( $post->ID , 'klasi' );
								if ($terms){?>
								<li>	
									<strong><?php switch (ICL_LANGUAGE_CODE) {
										case 'uk':
											?>Класи: <?php
											break;
										case 'pl':
											?>Klasy: <?php
											break;
										case 'en':
											?>Classes: <?php
											break;
										case 'ru':
											?>Классы: <?php
											break;
										default:
											?>Класи: <?php
										} ?></strong><?php 
									$klasses = join(', ', wp_list_pluck($terms, 'name'));
															$klasses = str_replace(", для дорослих", "",$klasses );
															$klasses = str_replace(", для студентів", "",$klasses );
															$klasses = str_replace(", підготовка до школи", "",$klasses );
															$klasses = str_replace("для дорослих, ", "",$klasses );
															$klasses = str_replace("підготовка до школи, ", "",$klasses );
															$klasses = str_replace("для студентів, ", "",$klasses );
															echo $klasses;
									?>
								</li><?php } ?>
								<?php $terms = get_the_terms( $post->ID , 'ispiti' );
								if ($terms){?>
								<li>	
									<strong><?php switch (ICL_LANGUAGE_CODE) {
										case 'uk':
											?>Іспити: <?php
											break;
										case 'pl':
											?>Egzaminy: <?php
											break;
										case 'en':
											?>Exams: <?php
											break;
										case 'ru':
											?>Экзамены: <?php
											break;
										default:
											?>Іспити: <?php
										} ?></strong><?php echo join(', ', wp_list_pluck($terms, 'name'));?>
								</li><?php } ?>
								<?php $terms = get_the_terms( $post->ID , 'repetitorskii_stazh' );
								if ($terms){ ?>
								<li>	
									<strong><?php switch (ICL_LANGUAGE_CODE) {
										case 'uk':
											?>Стаж:<?php 
											break;
										case 'pl':
											?>Staż:<?php 
											break;
										case 'en':
											?>Experience:<?php 
											break;
										case 'ru':
											?>Стаж:<?php 
											break;
										default:
											?>Стаж:<?php 
										} ?> </strong><?php echo join(', ', wp_list_pluck($terms, 'name'));?>
								</li><?php } ?>
								<?php if(get_field('kilkist_urokiv') && (get_field('kilkist_urokiv') != "") && (get_field('kilkist_urokiv') != " ")){?>
								<li>	
									<strong><?php switch (ICL_LANGUAGE_CODE) {
										case 'uk':
											?>Кількість проведених уроків: <?php 
											break;
										case 'pl':
											?>Liczba przeprowadzonych lekcji: <?php 
											break;
										case 'en':
											?>Number of lessons taught:<?php 
											break;
										case 'ru':
											?>Количество проведенных уроков: <?php 
											break;
										default:
											?>Кількість проведених уроків: <?php 
										} ?></strong>
									<?php the_field('kilkist_urokiv');?>
								</li><?php } ?>
								<?php /*$zava = get_field('zavantazhenist');
								if($zava && ($zava != "") && ($zava != " ")){?>
								<li>
                                                            <?php if (($zava == "Висока завантаженість") || ($zava == "Wysokie obciążenie")) { ?>
                                                                <span class="zava-high">
                                                                <?php } else if (($zava == "Недоступний для бронювання") || ($zava == "Niedostępny dla rezerwacji")) { ?>
                                                                    <span class="zava-med">
                                                                    <?php } else { ?>
                                                                        <span class="zava-low">
                                                                        <?php } ?>
                                                                        <?php echo $zava; ?>
                                                                        </span>
								</li><?php }*/ ?>
												</ul>
											</div>
											<div class="bio">
											<?php $the_content = apply_filters('the_content', get_the_content());
													if ( !empty($the_content) ) {?>
													<?php echo wp_trim_words( $the_content, 25, '...' ); ?>
												<?php } else {?>
													<?php $terms = get_the_terms( $post->ID , 'hobi' );
														if ($terms){
															?><strong><?php switch (ICL_LANGUAGE_CODE) {
																case 'uk':
																	?>Хобі: <?php
																	break;
																case 'pl':
																	?>Hobby: <?php
																	break;
																case 'en':
																	?>Hobby: <?php
																	break;
																case 'ru':
																	?>Хобби: <?php
																	break;
																default:
																	?>Хобі:<?php
															} ?></strong>
															<?php echo join(', ', wp_list_pluck($terms, 'name'));?>
													<?php } ?>
												<?php } ?>
											</div>
										</div>	
								<div class="right-area">
								<?php $terms = get_the_terms( $post->ID , 'tutors' );
								if ($terms){?>
								<div class="tut-city"><?php echo join(', ', wp_list_pluck($terms, 'name'));?></div>
								<?php } ?>
											<div class="buttons-wrap">
												<?php switch (ICL_LANGUAGE_CODE) {
													case 'uk': ?>
														<span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронювати урок</span>
														<?php break;
													case 'pl': ?>
														<span class="button smaller tutpopup" onclick="PopupFunction(this);">Zarezerwuj lekcję</span>
														<?php break;
													case 'en': ?>
														<span class="button smaller tutpopup" onclick="PopupFunction(this);">Book lesson</span>
														<?php break;
													case 'ru': ?>
														<span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронировать урок</span>
														<?php break;
													default: ?>
														<span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронювати урок</span>
													<?php } ?>

											</div>
											<div class="price-wrap">
												<?php  switch (ICL_LANGUAGE_CODE) {
                        case 'uk': ?>
													<div class="price"><?php $terms = get_the_terms( $post->ID , 'tsina' );
														echo join(', ', wp_list_pluck($terms, 'name'));?> грн./год</div>
							<?php break;
						case 'pl': ?>
													<div class="price"><?php $terms = get_the_terms( $post->ID , 'tsina' );
														echo join(', ', wp_list_pluck($terms, 'name'));?> zl./god</div>
							<?php break;
						case 'en': ?>
													<div class="price"><?php $terms = get_the_terms( $post->ID , 'tsina' );
														echo join(', ', wp_list_pluck($terms, 'name'));?> GBP/hour</div>
							<?php break;
						case 'ru': ?>
													<div class="price"><?php $terms = get_the_terms( $post->ID , 'tsina' );
														echo join(', ', wp_list_pluck($terms, 'name'));?> грн./час</div>
							<?php break;
						default: ?>
													<div class="price"><?php $terms = get_the_terms( $post->ID , 'tsina' );
														echo join(', ', wp_list_pluck($terms, 'name'));?> грн./год</div>
												<?php } ?>
										</div>
										</div>	
									</div>
								</span>
							</div>
	
						<?php endwhile; ?>
						<div class="pagination">
    <?php wp_reset_postdata();
	wp_reset_query();
	
	switch (ICL_LANGUAGE_CODE) {
                        case 'uk':
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
            'prev_text'    => 'Попередня сторінка',
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Наступна сторінка', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
						break;
						case 'pl':
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
            'prev_text'    => 'Poprzednia strona',
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Następna strona', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
						break;
						case 'en':
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
            'prev_text'    => 'Previous page',
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Next page', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
						break;
						case 'ru':
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
						break;
						default:
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
            'prev_text'    => 'Попередня сторінка',
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Наступна сторінка', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
						} 
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
.page-numbers:hover {transform: scale(1.1);}
.tutor-photo.tutor-place-photo {
       background-image: url("data:image/svg+xml,%3Csvg width='50' height='65' viewBox='0 0 50 65' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.23934 10.64L13.2593 14.17C11.6693 16.52 10.8393 19.22 10.8393 22.05C10.8393 29.79 17.1293 36.15 24.9393 36.15C32.7493 36.15 39.0393 29.86 39.0393 22.05C39.0393 19.28 38.2093 16.52 36.6893 14.24L43.7393 10.92V24.33L41.5993 28.89C41.4593 29.24 41.4593 29.58 41.6693 29.86C41.8793 30.14 42.2193 30.34 42.5693 30.34H46.6493C46.9993 30.34 47.3393 30.2 47.4793 29.86C47.6893 29.58 47.6893 29.24 47.5493 28.89L45.6793 24.33V10.02C45.6793 9.46998 45.6093 9.04998 44.6393 8.63998C44.4293 8.56998 25.4193 0.139976 25.4193 0.139976C25.1493 -2.38642e-05 24.8793 -2.38642e-05 24.5993 0.129976L5.23934 8.70998C4.89934 8.84998 4.61934 9.25998 4.61934 9.67998C4.61934 10.09 4.82934 10.44 5.23934 10.64ZM36.9093 22.05C36.9093 28.69 31.5193 34.08 24.8793 34.08C18.2393 34.08 12.8493 28.69 12.8493 22.05C12.8493 19.49 13.6793 17.07 15.1293 15L24.5293 19.22C24.6693 19.29 24.8093 19.29 24.9393 19.29C25.0793 19.29 25.2193 19.29 25.3493 19.22L34.6093 15.07C36.1493 17.14 36.9093 19.56 36.9093 22.05ZM44.1693 28.27L44.6493 27.23L45.0593 28.27H44.1693ZM25.0193 2.20998L41.8193 9.67998L25.0193 17.15L8.21934 9.67998L25.0193 2.20998Z' fill='url(%23paint0_linear_2006_2168)'/%3E%3Cpath d='M25.2893 38.64C11.8093 38.64 0.819336 49.63 0.819336 63.11C0.819336 63.66 1.29934 64.15 1.85934 64.15H48.7293C49.2793 64.15 49.7693 63.67 49.7693 63.11C49.7693 49.64 38.7693 38.64 25.2893 38.64ZM2.95934 62.08C3.50934 50.19 13.3293 40.72 25.3593 40.72C37.3893 40.72 47.1393 50.26 47.6893 62.08H2.95934Z' fill='url(%23paint1_linear_2006_2168)'/%3E%3Cdefs%3E%3ClinearGradient id='paint0_linear_2006_2168' x1='0.819336' y1='32.0918' x2='49.7693' y2='32.0918' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%23DA23FF'/%3E%3Cstop offset='1' stop-color='%239933EF'/%3E%3C/linearGradient%3E%3ClinearGradient id='paint1_linear_2006_2168' x1='0.819336' y1='32.0918' x2='49.7693' y2='32.0918' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%23DA23FF'/%3E%3Cstop offset='1' stop-color='%239933EF'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E%0A");
    background-size: 48px auto;
	background-color: #EEEEEE;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 50%;
    height: 160px;
    width: 160px;
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
#error-page .wpc-posts-found p::after {content: " - Скидаємо усі фільтри";}
#error-page .head, #error-page .wpc-filters-widget-top-container {display: none;}
.tutor-head {display: flex;justify-content: center;align-items: center;gap: 1px;margin-bottom: 5px;}
.left-tut-wrap h4 {margin: 0 0 0 6px;}
.left-tut-wrap .glsr-summary-rating {font-size: 15px;}
.page-tutors .tutors-listing .tutor-block .tutor-info-wrap .details li strong {font-size: 16px;line-height: 20px;font-weight: 500;}
.page-tutors .tutors-listing .tutor-block .tutor-info-wrap .details li {font-size: 16px;line-height: 20px;}
.page-tutors .tutors-listing .tutor-block .row {align-items: center;}
body .page-tutors .tutors-listing .tutor-block .tutor-info-wrap .details ul {margin: 0 0 14px;}
.right-area .button.smaller {line-height: 52px;font-size: 18px;font-weight: 500;padding: 0 25px;}
.price-wrap .price {margin-top: 11px;}
.zava-high {color: #FF1C1C;}
    .zava-med {color: #757575;}
    .zava-low {color: #057A55;}
	.page-tutors .tutors-listing .tutor-block {padding: 22px 25px 22px 41px;}
	.seo-block h2 {margin-top: 40px;}
.wpc-horizontal-layout.wpc-horizontal-cols-4 .wpc-filters-section.wpc-filter-layout-checkboxes {display: none;}
	
@media only screen and (max-width: 1200px) {
	.flexchild {flex: unset;width: calc(50% - 20px);white-space: nowrap;}
}
@media only screen and (max-width: 690px) {
	.flexchild {flex: unset;width: calc(100% - 20px);white-space: normal;}
}
</style>
<?php switch (ICL_LANGUAGE_CODE) {
                        case 'uk':
						?><script>
if ( jQuery( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/tutors/");
		window.location.href = "https://www.mathema.me/tutors/";
		jQuery(location).prop('href', 'https://www.mathema.me/tutors');
	}
jQuery(document).ready(function($){
	if ( $( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/tutors/");
		window.location.href = "https://www.mathema.me/tutors/";
		$(location).prop('href', 'https://www.mathema.me/tutors');
	}
});
</script><?php
						break;
						case 'pl':
?><script>
if ( jQuery( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/pl/tutors/");
		window.location.href = "https://www.mathema.me/pl/tutors/";
		jQuery(location).prop('href', 'https://www.mathema.me/pl/tutors');
	}
jQuery(document).ready(function($){
	if ( $( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/pl/tutors/");
		window.location.href = "https://www.mathema.me/pl/tutors/";
		$(location).prop('href', 'https://www.mathema.me/pl/tutors');
	}
});
</script><?php						
						break;
						case 'en':
?><script>
if ( jQuery( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/en/tutors/");
		window.location.href = "https://www.mathema.me/en/tutors/";
		jQuery(location).prop('href', 'https://www.mathema.me/en/tutors');
	}
jQuery(document).ready(function($){
	if ( $( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/en/tutors/");
		window.location.href = "https://www.mathema.me/en/tutors/";
		$(location).prop('href', 'https://www.mathema.me/en/tutors');
	}
});
</script><?php						
						break;
						case 'ru':
						?><script>
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
</script><?php
						break;
						default:
						?><script>
if ( jQuery( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/tutors/");
		window.location.href = "https://www.mathema.me/tutors/";
		jQuery(location).prop('href', 'https://www.mathema.me/tutors');
	}
jQuery(document).ready(function($){
	if ( $( "#error-page" ).length ) { 
		window.location.replace("https://www.mathema.me/tutors/");
		window.location.href = "https://www.mathema.me/tutors/";
		$(location).prop('href', 'https://www.mathema.me/tutors');
	}
});
</script><?php
						} ?>
	
	
	<div class="container">
				<div class="seo-block">
					<div class="col">
				
				<?php if(ICL_LANGUAGE_CODE == 'en') {} elseif(substr_count($_SERVER['REQUEST_URI'], '/') < 7) { ?>
				<div class="perelinking">
					<div class="flexchild"><h3><?php if (ICL_LANGUAGE_CODE == 'ru') { ?>Город:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Miasto:<?php } else { ?>Місто:<?php } ?></h3>
					<?php $terms = get_terms([
						'taxonomy' => 'tutors'
					]);
					echo '<div>';
					/*if(strpos($_SERVER['REQUEST_URI'], "city-") !== false){*/
					foreach ($terms as $term){
						if(strpos($_SERVER['REQUEST_URI'], $term->slug) == false){
							if (ICL_LANGUAGE_CODE == 'ru') {
								echo '<div class="link-per"><a href="/ru/tutors/city-'.$term->slug.'">Репетитор по математике '.$term->name.'</a></div>';
							} elseif (ICL_LANGUAGE_CODE == 'pl') {
								echo '<div class="link-per"><a href="/pl/tutors/city-'.$term->slug.'">Korepetytor matematyki '.$term->name.'</a></div>';
							} else {
								echo '<div class="link-per"><a href="/tutors/city-'.$term->slug.'">Репетитор з математики '.$term->name.'</a></div>';
							}
						}	
					}
				/*} else { 
					foreach ($terms as $term){
						rebuildlink("city-",$term->slug,$term->name);
					}
				} */
				echo '</div></div>'; ?>
				<div class="flexchild"><h3><?php if (ICL_LANGUAGE_CODE == 'ru') { ?>Классы:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Klasy:<?php } else { ?>Класи:<?php } ?></h3>
					<?php $terms = get_terms(['taxonomy' => 'klasi']);
					echo '<div>';
					/*if(strpos($_SERVER['REQUEST_URI'], "grade-") !== false){*/
					foreach ($terms as $term){
						if(strpos($_SERVER['REQUEST_URI'], $term->slug) == false){
							if (ICL_LANGUAGE_CODE == 'ru') {
								echo '<div class="link-per"><a href="/ru/tutors/grade-'.$term->slug.'">Репетитор по математике '.$term->name.' класс</a></div>';
							} elseif (ICL_LANGUAGE_CODE == 'pl') {
								echo '<div class="link-per"><a href="/pl/tutors/grade-'.$term->slug.'">Korepetytor matematyki '.$term->name.' klas</a></div>';
							} else {
								echo '<div class="link-per"><a href="/tutors/grade-'.$term->slug.'">Репетитор з математики '.$term->name.' клас</a></div>';
							}
						}	
					}
				/*} else { 
					foreach ($terms as $term){
						rebuildlink("grade-",$term->slug,$term->name);
					}
				} */
				echo '</div></div>'; ?>
				<div class="flexchild"><h3><?php if (ICL_LANGUAGE_CODE == 'ru') { ?>Экзамены:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Egzaminy:<?php } else { ?>Іспити:<?php } ?></h3>
					<?php $terms = get_terms([
						'taxonomy' => 'ispiti'
					]);
					echo '<div>';
					/*if(strpos($_SERVER['REQUEST_URI'], "exam-") !== false){*/
					foreach ($terms as $term){
						if(strpos($_SERVER['REQUEST_URI'], $term->slug) == false){
							if (ICL_LANGUAGE_CODE == 'ru') {
								echo '<div class="link-per"><a href="/ru/tutors/exam-'.$term->slug.'">Репетитор по математике '.$term->name.'</a></div>';
							} elseif (ICL_LANGUAGE_CODE == 'pl') {
								echo '<div class="link-per"><a href="/pl/tutors/exam-'.$term->slug.'">Korepetytor matematyki '.$term->name.'</a></div>';
							} else {	
								echo '<div class="link-per"><a href="/tutors/exam-'.$term->slug.'">Репетитор з математики '.$term->name.'</a></div>';
							}
						}	
					}
				/*} else { 
					foreach ($terms as $term){
						rebuildlink("exam-",$term->slug,$term->name);
					}
				} */
				echo '</div></div>'; ?>
				<div class="flexchild"><h3><?php if (ICL_LANGUAGE_CODE == 'ru') { ?>Учебные программы:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Programy nauczania:<?php } else { ?>Навчальні програми:<?php } ?></h3>
					<?php $terms = get_terms([
						'taxonomy' => 'navchalni_programi'
					]);
					echo '<div>';
					/*if(strpos($_SERVER['REQUEST_URI'], "curriculum-") !== false){*/
					foreach ($terms as $term){
						if(strpos($_SERVER['REQUEST_URI'], $term->slug) == false){
							if (ICL_LANGUAGE_CODE == 'ru') {
								echo '<div class="link-per"><a href="/ru/tutors/curriculum-'.$term->slug.'">Репетитор по математике '.$term->name.'</a></div>';
							} elseif (ICL_LANGUAGE_CODE == 'pl') {
								echo '<div class="link-per"><a href="/pl/tutors/curriculum-'.$term->slug.'">Korepetytor matematyki '.$term->name.'</a></div>';
							} else {
								echo '<div class="link-per"><a href="/tutors/curriculum-'.$term->slug.'">Репетитор з математики '.$term->name.'</a></div>';
							}
						}	
					}
				/*} else { 
					foreach ($terms as $term){
						rebuildlink("curriculum-",$term->slug,$term->name);
					}
				} */
				echo '</div></div>'; ?>
				</div>
	
                <?php
				}
						if( function_exists( 'flrt_get_seo_data' ) ){
							if( flrt_is_filter_request() ){
								echo flrt_get_seo_data( $key = 'text' ).'<div style="height: 20px;">';
							} else {
								the_field('tutors-seo-text'); 
							}
						}
						else { 
							the_field('tutors-seo-text'); 
						 } ?>		
	</div>
</div>		
		
  <?php if ((ICL_LANGUAGE_CODE != 'pl') && (ICL_LANGUAGE_CODE != 'en')) { ?>
	<div class="tut-reviews teachers-section">
	<?php switch (ICL_LANGUAGE_CODE) {
                        case 'uk':
							?><h2>Відгуки клієнтів про репетиторів</h2><?php
						break;
						case 'pl':
							?><h2>Opinie klientów o korepetytorach</h2><?php
						break;
						case 'en':
							/*?><h2>Customer reviews about tutors</h2><?php*/
						break;
						case 'ru':
							?><h2>Отзывы клиентов про репетиторов</h2><?php
						break;
						default:
							?><h2>Відгуки клієнтів про репетиторів</h2><?php
						} ?>
	<?php 
                        if ($_SERVER['REQUEST_URI'] != "/tutors/"){
						$tutor_ids_str = implode(',', $tutor_ids);
						echo do_shortcode('[site_reviews_summary assigned_posts="'.$tutor_ids_str.'" hide="if_empty,rating,stars"]');
						echo do_shortcode('[site_reviews assigned_posts="'.$tutor_ids_str.'" display="6" rating="4" schema="true" fallback="Відгуків ще немає."]');
					} else {
						echo do_shortcode('[site_reviews_summary hide="if_empty,rating,stars"]');
						echo do_shortcode('[site_reviews display="6" rating="4" schema="true" fallback="Відгуків ще немає."]');
					}
    ?> 
	</div>
  <?php } ?>
			<div class="faq-section">
				<div class="container">
						<h2><?php 
						switch (ICL_LANGUAGE_CODE) {
                        case 'uk':
							?>Поширені запитання<?php
						break;
						case 'pl':
						  ?>Często zadawane pytania<?php
						break;
						case 'en':
							?>Frequently asked questions<?php
						break;
						case 'ru':
							 ?>Часто задаваемые вопросы<?php
						break;
						default:
							?>Поширені запитання<?php
						} ?></h2>
					<div class="faq faq-list">
						<?php 
						switch (ICL_LANGUAGE_CODE) {
                        case 'uk':
							if (have_rows('faq', 715)) : while (have_rows('faq', 715)) : the_row(); ?>
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
							else : endif;
						break;
						case 'pl':
						  if (have_rows('faq', 2366)) : while (have_rows('faq', 2366)) : the_row(); ?>
								<div class="item faq-item">
									<div class="icon">
										<div class="hor"></div>
										<div class="ver"></div>
									</div>
									<div class="question">
										<?php the_sub_field('questuion', 2366); ?>
									</div>
									<div class="answer">
										<?php the_sub_field('answer', 2366); ?>
									</div>
								</div>
						<?php endwhile;
						else : endif;
						break;
						case 'en':
							if (have_rows('faq', 131159)) : while (have_rows('faq', 131159)) : the_row(); ?>
								<div class="item faq-item">
									<div class="icon">
										<div class="hor"></div>
										<div class="ver"></div>
									</div>
									<div class="question">
										<?php the_sub_field('questuion', 131159); ?>
									</div>
									<div class="answer">
										<?php the_sub_field('answer', 131159); ?>
									</div>
								</div>
							<?php endwhile;
							else : endif;
						break;
						case 'ru':
							 if (have_rows('faq', 38714)) : while (have_rows('faq', 38714)) : the_row(); ?>
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
						else : endif;
						break;
						default:
							if (have_rows('faq', 715)) : while (have_rows('faq', 715)) : the_row(); ?>
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
							else : endif;
						} ?>
						
					</div>
				</div>
			</div>
</div>
</div>		
		
			
			
	

</div>
</div>
</div>
		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>
<?php
			function rebuildlink($termtype,$termslug,$termname) {
				$finalurl = '/tutors/'.$termtype.$termslug.'/';
				$linecount = 6;
				$additancor = "";
				if (ICL_LANGUAGE_CODE == 'ru') {
						$finalurl = '/ru/tutors/'.$termtype.$termslug.'/';
					} elseif (ICL_LANGUAGE_CODE == 'pl') {
						$finalurl = '/pl/tutors/'.$termtype.$termslug.'/';
					} 
				if(substr_count($_SERVER['REQUEST_URI'], '/') <= $linecount) {
				$finalurl = "";
				if($termtype !== "city-") {
					if(strpos($_SERVER['REQUEST_URI'], "city-") !== false){//LINK TO NOT city, city IS IN URL
						$tmpposstart = strpos($_SERVER['REQUEST_URI'], "city-");
						$tmpposend = strpos($_SERVER['REQUEST_URI'], "/", $tmpposstart + 1);
						$tmpname = substr($_SERVER['REQUEST_URI'], $tmpposstart + 5, $tmpposend - $tmpposstart - 5);
						if (ICL_LANGUAGE_CODE == 'ru') {
							$finalurl .= '/ru/tutors/city-'.$tmpname.'/';
						} elseif (ICL_LANGUAGE_CODE == 'pl') {
							$finalurl .= '/pl/tutors/city-'.$tmpname.'/';						
						} else {
							$finalurl .= '/tutors/city-'.$tmpname.'/';
						}
						$curtermname = get_term_by('slug', $tmpname, 'tutors');
						$additancor .= ', '. $curtermname->name;
					}
					else {//LINK TO NOT city, city ISN'T IN URL
						if (ICL_LANGUAGE_CODE == 'ru') {
							$finalurl .= '/ru/tutors/';
						} elseif (ICL_LANGUAGE_CODE == 'pl') {
							$finalurl .= '/pl/tutors/';
						} else {	
							$finalurl .= '/tutors/';
						}
					}
				}
				else {
					//LINK TO city, city- ISN'T IN URL
					if (ICL_LANGUAGE_CODE == 'ru') {
						$finalurl .= '/ru/tutors/city-'.$termslug.'/';
					} elseif (ICL_LANGUAGE_CODE == 'pl') {
						$finalurl .= '/pl/tutors/city-'.$termslug.'/';
					} else {
						$finalurl .= '/tutors/city-'.$termslug.'/';
					}
				}
				if($termtype !== "grade-") {
					if(strpos($_SERVER['REQUEST_URI'], "grade-") !== false){//LINK TO NOT KLASY, KLASY IS IN URL
						$tmpposstart = strpos($_SERVER['REQUEST_URI'], "grade-");
						$tmpposend = strpos($_SERVER['REQUEST_URI'], "/", $tmpposstart + 1);
						$tmpname = substr($_SERVER['REQUEST_URI'], $tmpposstart + 6, $tmpposend - $tmpposstart - 6);
						$finalurl .= 'grade-'.$tmpname.'/';
						$curtermname = get_term_by('slug', $tmpname, 'klasi');
						if (ICL_LANGUAGE_CODE == 'ru') {
							$additancor .= ', '. $curtermname->name.' класс';
						} elseif (ICL_LANGUAGE_CODE == 'pl') {
							$additancor .= ', '. $curtermname->name.' klasa';
						} else {
							$additancor .= ', '. $curtermname->name.' клас';
						}
						
					}
					//else LINK TO NOT KLASY, KLASY ISN'T IN URL, skipping
				}
				else {
					//LINK TO KLASY, KLASY ISN'T IN URL
					if (ICL_LANGUAGE_CODE == 'ru') {
						$additancor =' класс '.$additancor;
					} elseif (ICL_LANGUAGE_CODE == 'pl') {
						$additancor =' klasa '.$additancor;
					} else {
						$additancor =' клас'.$additancor;
					}
					$finalurl .= 'grade-'.$termslug.'/';
					
				}
				if($termtype !== "exam-") {
					if(strpos($_SERVER['REQUEST_URI'], "exam-") !== false){//LINK TO NOT ISPITY, ISPITY IS IN URL
						$tmpposstart = strpos($_SERVER['REQUEST_URI'], "exam-");
						$tmpposend = strpos($_SERVER['REQUEST_URI'], "/", $tmpposstart + 1);
						$tmpname = substr($_SERVER['REQUEST_URI'], $tmpposstart + 5, $tmpposend - $tmpposstart - 5);
						$finalurl .= 'exam-'.$tmpname.'/';
						$curtermname = get_term_by('slug', $tmpname, 'ispiti');
						$additancor .= ', '. $curtermname->name;
					}
					//else LINK TO NOT ISPITY, ISPITY ISN'T IN URL, skipping
				}
				else {
					//LINK TO ISPITY, ISPITY ISN'T IN URL
					$finalurl .= 'exam-'.$termslug.'/';
				}
				if($termtype !== "curriculum-") {
					if(strpos($_SERVER['REQUEST_URI'], "curriculum-") !== false){//LINK TO NOT curriculum, curriculum IS IN URL
						$tmpposstart = strpos($_SERVER['REQUEST_URI'], "curriculum-");
						$tmpposend = strpos($_SERVER['REQUEST_URI'], "/", $tmpposstart + 1);
						$tmpname = substr($_SERVER['REQUEST_URI'], $tmpposstart + 11, $tmpposend - $tmpposstart - 11);
						$finalurl .= 'curriculum-'.$tmpname.'/';
						$curtermname = get_term_by('slug', $tmpname, 'navchalni_programi');
						$additancor .= ', '. $curtermname->name;
					}
					//else LINK TO NOT curriculum, curriculum ISN'T IN URL, skipping
				}
				else {
					//LINK TO curriculum, curriculum ISN'T IN URL
					$finalurl .= 'curriculum-'.$termslug.'/';
				}
				}
				if (ICL_LANGUAGE_CODE == 'ru') {
						echo '<div class="link-per"><a href="'.$finalurl.'">Репетитор по математике '.$termname.$additancor.'</a></div>';
					} elseif (ICL_LANGUAGE_CODE == 'pl') {
						echo '<div class="link-per"><a href="'.$finalurl.'">Korepetytor matematyki '.$termname.$additancor.'</a></div>';
					} else {
						echo '<div class="link-per"><a href="'.$finalurl.'">Репетитор з математики '.$termname.$additancor.'</a></div>';
					}
			}?>
<?php get_footer(); ?>