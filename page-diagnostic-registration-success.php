<?php

/**
 * Template Name: Диагностика - Подтверждение регистрации
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
}
?>

<?php get_footer(); ?>