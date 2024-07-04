<?php

/**
 * Template Name: Новий квіз
 */
get_header(); ?>
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
	p.first-desc {font-size: 18px;font-weight: 500;font-family: 'InterSemiBold';}
	h1 span, p span {color: rgba(101, 54, 214, 1);}
	.page-diagnostic-registration .diagnostic-form {margin-bottom: 30px;padding: 30px;}
	.gform_wrapper.gravity-theme h2 {text-align: center;font-family: 'InterSemiBold';}
	.first-quiz-screen .gfield_radio {display: flex;justify-content: center;gap: 20px;margin: auto;max-width: 335px;flex-wrap: wrap;}
	.first-quiz-screen .gfield_radio > div {border-radius: 50px;border: 1px solid var(--light-gray, #D0D0D0);}
	.width138 .gfield_radio > div {min-width: 138px;}
	.gform_wrapper.gravity-theme .width138 .gfield_radio .gfield-choice-input+label {justify-content: center;}
	.first-quiz-screen .gfield_radio > .gchoice label {padding: 12px 30px;flex-basis: (calc 33.33% - 14px);font-family: 'InterRegular';}
	.first-quiz-screen .gfield_radio > div:active {background: #6F3CE9;color: white;}
	.first-quiz-screen .gfield_radio > div:focus, .select-quiz-im .gfield_radio > div:focus, .select-quiz-im .gfield_radio > div:active {border: 1px solid #6F3CE9;}
	.gform_wrapper.gravity-theme .gf_step {margin: 8px 12px 8px 0;}
	body .gform_wrapper.gravity-theme .gfield-choice-input {display: none;}
	.gform_wrapper.gravity-theme .gf_step_number {border: none;}
	.gf_page_steps {display: block;}
	.gprogresspage_1 {display: none!important;}
	.gform_wrapper.gravity-theme #gform_36 .gf_step_active .gf_step_number,
	.gform_wrapper.gravity-theme .gf_step_active .gf_step_number	{background: transparent;border-color: transparent;}
	.gform_wrapper.gravity-theme .gfield-choice-input+label {display: flex;gap: 10px;align-items: center;}
	.gform_wrapper.gravity-theme .gfield-choice-input+label div {font-family: 'InterMedium';font-size: 20px;font-weight: 500;}
	.select-quiz-im .gfield_radio .gchoice {border-radius: 10px;border: 1px solid #F1F5F9;background: #F1F5F9;margin-bottom: 16px;}
	.select-quiz-im .gfield_radio .gchoice label {padding: 26px 16px 19px;}
	.gform_wrapper.gravity-theme .gfield_required .gfield_required_text {display: none;}
	html body .gform_wrapper.gravity-theme .gfield_label, .like-usual-label h3.gsection_title {font-family: Inter;font-size: 15px;font-weight: 100;margin-bottom: 5px;}
	html body .gform_wrapper.gravity-theme .gfield_label {font-family: 'InterRegular';margin-left: 3px;}
	body .gform_wrapper.gravity-theme .gfield input.large {border-radius: 10px;border: 1px solid #6F3CE9;}
	body .gform_wrapper.gravity-theme .gfield .ginput_container_phone input.large {border-left: none;border-radius: 0 10px 10px 0;}
	html body .phone-flags .gfield_radio {border-radius: 10px 0 0 10px;border: 1px solid #6F3CE9;border-right: none;height: 50px;}
	.gform_wrapper.gravity-theme h2.margbot30 {margin-bottom: 32px;}
	.gform_wrapper.gravity-theme h2.margbot48 {margin-bottom: 48px;}
	.gform_next_button, .gform_button.button {width: 100%;}
	body h1 {margin-bottom: 10px;font-family: 'InterBold';}
	.gform_wrapper.gravity-theme h2 {margin-bottom: 15px;}
	.gform-body p {margin-bottom: 40px;}
	.margbot71 {margin-bottom: 71px;}
	.gform_confirmation_message {text-align: center;}
	.gform_confirmation_message_36 p {font-weight: 100;line-height: 1em;font-family: 'InterMedium';color: #4B4B4B;}
	.gform_confirmation_message h3 {padding-bottom: 29px;font-family: 'InterSemiBold';}
	.gform_confirmation_message img {margin-bottom: 9px;}
	.gform_wrapper.gravity-theme .gform_footer, .gform_wrapper.gravity-theme .gform_page_footer {padding: 0;margin: 4px 0 0;}
	.gform_wrapper.gravity-theme .gform_page_footer input+input {
		margin: 0;
		border-radius: 10px;
		border: 1px solid #6536D6;
		font-size: 20px;
		font-weight: 500;
		line-height: 1em!important;
		padding: 17px 6px;
		font-family: 'InterBold';
		}
	.gform_wrapper.gravity-theme .gform_page_footer input+input:hover {border: 1px solid transparent;}	
	body .gform_wrapper.gravity-theme .gform_page_footer .gform_button.button {line-height: 1em!important;}
	html body .gform_wrapper.gravity-theme .gfield_label.marbot0 {margin-bottom: 0;}
	body .gform_wrapper.gravity-theme .gfield.gfield--width-third.one-third, body .gform_wrapper.gravity-theme .gfield.gfield--width-third.two-thirds {margin-top: -11px;}
	body .gform_wrapper.gravity-theme .gfield.gfield--width-third.two-thirds:focus-visible {outline: none;}
	.gform_wrapper.gravity-theme .gfield#field_36_9, .gform_wrapper.gravity-theme .gfield.quiz-name-field {padding-bottom: 16px;}
	.gf_progressbar_wrapper .button.gform_previous_button {display: block;}
	.progr-flex {display: flex;justify-content: space-between;}
	.prev-button {cursor: pointer;}
	body .gform_wrapper.gravity-theme .gf_progressbar_blue {background: #eee;height: 3px;position: relative;}
	body .gform_wrapper.gravity-theme .gf_progressbar_blue:before {content: "";height: 3px;width: 4px;position: absolute;left: 33.33%;background: #fff;}
	body .gform_wrapper.gravity-theme .gf_progressbar_blue:after {content: "";height: 3px;width: 4px;position: absolute;left: 66.67%;background: #fff;top: 0;}
	body .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_blue {background-color:#6536D6;height: 3px;border-radius: 10.5px;overflow: hidden;}
	body .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_blue span {display: none;}
	body .gform_wrapper.gravity-theme .gf_page_steps {border-bottom: none;}
	.gform_wrapper.gravity-theme .gf_progressbar_title {margin: 6px 0;}
	.prev-button div {padding: 6px;}
	body .gform_wrapper.gravity-theme .phone-flags .gfield-choice-input+label img {border-radius: 18px;box-shadow: 0 0 3px rgba(0,0,0,0.6);}
	@media (max-width: 991px) {
		body .container .diagnostic-form {padding: 10px 30px 87px;}
		.gform_wrapper.gravity-theme h2 {font-size: 22px;}
		.gform_confirmation_message h3 {font-size: 24px;}
		html body .phone-flags .gfield_radio {height: 50px;}
		.cent-cotnt.absol-logo {top: 32px;}
	}
	@media (max-width: 641px) {
	 .gform_wrapper.gravity-theme .gform_page_footer .gform_button.button,
		.gform_wrapper.gravity-theme .gform_next_button {line-height: 50px!important;}
		html body .phone-flags .gfield_radio {height: 64px;}
		body .container .diagnostic-form {padding: 10px 0 87px}
	}
	@media (max-width: 440px) {
		.gform_wrapper.gravity-theme .gf_step {margin: 8px 0 0 0;}
	}
</style>
<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-diagnostic-registration">

			<div class="page-hero-section" style="margin-bottom: 0">
				<div class="container">
					<div class="wrap hero-description-wrap">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			

			<div class="content">
				<div class="container">
					<div class="diagnostic-form">
						<?php echo do_shortcode('[gravityform id="'.get_field('nomer_formi_kviza').'" title="false" description="false" ajax="true" tabindex="249"]'); ?>
					</div>
				</div>
			</div>
			<?php if (ICL_LANGUAGE_CODE == 'pl') { ?>
			<div id="diagnostic-loader">
				<h1>Twoje zgłoszenie jest przetwarzane!</h1>
				<p>Proszę czekać.</p>
			</div>
			<?php } else { ?>
			<div id="diagnostic-loader">
				<h1>Ваша заявка опрацьовується!</h1>
				<p>Будь ласка, зачекайте.</p>
			</div>
			<?php } ?>
		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>
<?php get_footer(); ?>