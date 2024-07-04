<?php
/**
 * Template Name: Успіх квізу
 */ 
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="inner-page">
	<div class="inner-page">
		<div class="page-wrap page-diagnostic-registration">

			<div class="page-hero-section" style="margin-bottom: 0">
				<div class="container">
					<div class="wrap hero-description-wrap">
					</div>
				</div>
			</div>

			

			<div class="content">
				<div class="container">
					<div class="diagnostic-form gform_confirmation_message gform_confirmation_message_36">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div><!-- page name -->
	</div><!-- inner page -->
<?php endwhile; ?>
<style>
		html {margin-top: 0!important;background: white;}
	html header, html footer {display: none;}
	body .inner-page {padding-top: 0;background: #fff;}
	@font-face {
    font-family: 'InterBold';/*700*/
    src: url('/wp-content/themes/matema-child/assets/fonts/InterBold.eot');
    src: url('/wp-content/themes/matema-child/assets/fonts/InterBold.eot') format('embedded-opentype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterBold.woff2') format('woff2'),
         url('/wp-content/themes/matema-child/assets/fonts/InterBold.woff') format('woff'),
         url('/wp-content/themes/matema-child/assets/fonts/InterBold.ttf') format('truetype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterBold.svg#InterBold') format('svg');
	}
	@font-face {
    font-family: 'InterExtraBold';/*800*/
    src: url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.eot');
    src: url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.eot') format('embedded-opentype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.woff2') format('woff2'),
         url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.woff') format('woff'),
         url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.ttf') format('truetype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.svg#InterExtraBold') format('svg');
	}
	@font-face {
    font-family: 'InterMedium';/*500*/
    src: url('/wp-content/themes/matema-child/assets/fonts/InterMedium.eot');
    src: url('/wp-content/themes/matema-child/assets/fonts/InterMedium.eot') format('embedded-opentype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterMedium.woff2') format('woff2'),
         url('/wp-content/themes/matema-child/assets/fonts/InterMedium.woff') format('woff'),
         url('/wp-content/themes/matema-child/assets/fonts/InterMedium.ttf') format('truetype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterMedium.svg#InterMedium') format('svg');
}
@font-face {
    font-family: 'InterRegular';/*400*/
    src: url('/wp-content/themes/matema-child/assets/fonts/InterRegular.eot');
    src: url('/wp-content/themes/matema-child/assets/fonts/InterRegular.eot') format('embedded-opentype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterRegular.woff2') format('woff2'),
         url('/wp-content/themes/matema-child/assets/fonts/InterRegular.woff') format('woff'),
         url('/wp-content/themes/matema-child/assets/fonts/InterRegular.ttf') format('truetype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterRegular.svg#InterRegular') format('svg');
}
@font-face {
    font-family: 'InterSemiBold';/*600*/
    src: url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.eot');
    src: url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.eot') format('embedded-opentype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.woff2') format('woff2'),
         url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.woff') format('woff'),
         url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.ttf') format('truetype'),
         url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.svg#InterSemiBold') format('svg');
}
	.cent-cotnt {width: 100%;text-align: center;margin-bottom: 10px;}
	.cent-cotnt.absol-logo {position: absolute;top: 37px;margin-bottom: 0;width: 75px;left: calc(50% - 37px);z-index: 0;}
	.gform_wrapper.gravity-theme .gf_page_steps {margin-bottom: 37px;}
	.margbot68 {margin-bottom: 52px;}
	.margbot30 {margin-bottom: 30px;}
	h2 {font-size: 24px;font-weight: 600;}
	.page-diagnostic-registration .hero-description-wrap {margin: 0 auto 20px;}
	body .container .diagnostic-form {max-width: 492px;margin: 0 auto;padding: 16px 41px 72px;border: none;}
	h1, p, h2 {text-align: center;font-family: Inter;}
	h1 span, p span {color: rgba(101, 54, 214, 1);}
	.page-diagnostic-registration .diagnostic-form {margin-bottom: 30px;padding: 30px;}
	body h1 {margin-bottom: 10px;font-family: 'InterBold';}
	.gform_wrapper.gravity-theme h2 {margin-bottom: 15px;}
	.gform-body p {margin-bottom: 40px;}
	.margbot71 {margin-bottom: 71px;}
	.gform_confirmation_message {text-align: center;}
	.gform_confirmation_message_36 p {font-weight: 100;line-height: 1em;font-family: 'InterMedium';color: #4B4B4B;}
	.gform_confirmation_message h3 {padding-bottom: 29px;font-family: 'InterSemiBold';}
	.gform_confirmation_message img {margin-bottom: 9px;}
	@media (max-width: 991px) {
		body .container .diagnostic-form {padding: 10px 30px 87px;}
		.gform_confirmation_message h3 {font-size: 24px;}
	}
	@media (max-width: 641px) {
		body .container .diagnostic-form {padding: 10px 0 87px}
	}
	</style>
<?php get_footer(); ?>