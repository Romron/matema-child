<?php

/**
 * Template Name: Новий квіз v.1
 */
get_header(); ?>
<style>
	html {
		margin-top: 0 !important;
		background: white;
	}

	html header,
	html footer {
		display: none;
	}

	body .inner-page {
		padding-top: 0;
		background: #fff;
	}

	@font-face {
		font-family: 'InterBold';
		/*700*/
		src: url('/wp-content/themes/matema-child/assets/fonts/InterBold.eot');
		src: url('/wp-content/themes/matema-child/assets/fonts/InterBold.eot') format('embedded-opentype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterBold.woff2') format('woff2'),
			url('/wp-content/themes/matema-child/assets/fonts/InterBold.woff') format('woff'),
			url('/wp-content/themes/matema-child/assets/fonts/InterBold.ttf') format('truetype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterBold.svg#InterBold') format('svg');
	}

	@font-face {
		font-family: 'InterExtraBold';
		/*800*/
		src: url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.eot');
		src: url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.eot') format('embedded-opentype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.woff2') format('woff2'),
			url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.woff') format('woff'),
			url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.ttf') format('truetype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterExtraBold.svg#InterExtraBold') format('svg');
	}

	@font-face {
		font-family: 'InterMedium';
		/*500*/
		src: url('/wp-content/themes/matema-child/assets/fonts/InterMedium.eot');
		src: url('/wp-content/themes/matema-child/assets/fonts/InterMedium.eot') format('embedded-opentype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterMedium.woff2') format('woff2'),
			url('/wp-content/themes/matema-child/assets/fonts/InterMedium.woff') format('woff'),
			url('/wp-content/themes/matema-child/assets/fonts/InterMedium.ttf') format('truetype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterMedium.svg#InterMedium') format('svg');
	}

	@font-face {
		font-family: 'InterRegular';
		/*400*/
		src: url('/wp-content/themes/matema-child/assets/fonts/InterRegular.eot');
		src: url('/wp-content/themes/matema-child/assets/fonts/InterRegular.eot') format('embedded-opentype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterRegular.woff2') format('woff2'),
			url('/wp-content/themes/matema-child/assets/fonts/InterRegular.woff') format('woff'),
			url('/wp-content/themes/matema-child/assets/fonts/InterRegular.ttf') format('truetype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterRegular.svg#InterRegular') format('svg');
	}

	@font-face {
		font-family: 'InterSemiBold';
		/*600*/
		src: url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.eot');
		src: url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.eot') format('embedded-opentype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.woff2') format('woff2'),
			url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.woff') format('woff'),
			url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.ttf') format('truetype'),
			url('/wp-content/themes/matema-child/assets/fonts/InterSemiBold.svg#InterSemiBold') format('svg');
	}

	.cent-cotnt {
		width: 100%;
		text-align: center;
		margin-bottom: 10px;
	}

	.cent-cotnt.absol-logo {
		position: absolute;
		top: 37px;
		margin-bottom: 0;
		width: 75px;
		left: calc(50% - 37px);
		z-index: 0;
	}

	.gform_wrapper.gravity-theme .gf_page_steps {
		margin-bottom: 37px;
	}

	.margbot68 {
		margin-bottom: 52px;
	}

	.margbot30 {
		margin-bottom: 30px;
	}

	h2 {
		font-size: 24px;
		font-weight: 600;
	}

	.page-diagnostic-registration .hero-description-wrap {
		margin: 0 auto 20px;
	}

	body .container .diagnostic-form {
		max-width: 492px;
		margin: 0 auto;
		padding: 16px 41px 72px;
		border: none;
	}

	h1,
	p,
	h2 {
		text-align: center;
		font-family: Inter;
	}

	p.first-desc {
		font-size: 18px;
		font-weight: 500;
		font-family: 'InterSemiBold';
	}

	h1 span,
	p span {
		color: rgba(101, 54, 214, 1);
	}

	.page-diagnostic-registration .diagnostic-form {
		margin-bottom: 30px;
		padding: 30px;
	}

	.gform_wrapper.gravity-theme h2 {
		text-align: center;
		font-family: 'InterSemiBold';
	}

	.first-quiz-screen .gfield_radio {
		display: flex;
		justify-content: center;
		gap: 20px;
		margin: auto;
		max-width: 335px;
		flex-wrap: wrap;
	}

	.first-quiz-screen .gfield_radio>div {
		border-radius: 50px;
		border: 1px solid var(--light-gray, #D0D0D0);
	}

	.width138 .gfield_radio>div {
		min-width: 138px;
	}

	.gform_wrapper.gravity-theme .width138 .gfield_radio .gfield-choice-input+label {
		justify-content: center;
	}

	.first-quiz-screen .gfield_radio>.gchoice label {
		padding: 12px 30px;
		flex-basis: (calc 33.33% - 14px);
		font-family: 'InterRegular';
	}

	.first-quiz-screen .gfield_radio>div:active {
		background: #6F3CE9;
		color: white;
	}

	.first-quiz-screen .gfield_radio>div:focus,
	.select-quiz-im .gfield_radio>div:focus,
	.select-quiz-im .gfield_radio>div:active {
		border: 1px solid #6F3CE9;
	}

	.gform_wrapper.gravity-theme .gf_step {
		margin: 8px 12px 8px 0;
	}

	body .gform_wrapper.gravity-theme .gfield-choice-input {
		display: none;
	}

	.gform_wrapper.gravity-theme .gf_step_number {
		border: none;
	}

	.gf_page_steps {
		display: block;
	}

	.gprogresspage_1 {
		display: none !important;
	}

	.gform_wrapper.gravity-theme #gform_36 .gf_step_active .gf_step_number,
	.gform_wrapper.gravity-theme .gf_step_active .gf_step_number {
		background: transparent;
		border-color: transparent;
	}

	.gform_wrapper.gravity-theme .gfield-choice-input+label {
		display: flex;
		gap: 10px;
		align-items: center;
	}

	.gform_wrapper.gravity-theme .gfield-choice-input+label div {
		font-family: 'InterMedium';
		font-size: 20px;
		font-weight: 500;
	}

	.select-quiz-im .gfield_radio .gchoice {
		border-radius: 10px;
		border: 1px solid #F1F5F9;
		background: #F1F5F9;
		margin-bottom: 16px;
	}

	.select-quiz-im .gfield_radio .gchoice label {
		padding: 26px 16px 19px;
	}

	.gform_wrapper.gravity-theme .gfield_required .gfield_required_text {
		display: none;
	}

	html body .gform_wrapper.gravity-theme .gfield_label,
	.like-usual-label h3.gsection_title {
		font-family: Inter;
		font-size: 15px;
		font-weight: 100;
		margin-bottom: 5px;
	}

	html body .gform_wrapper.gravity-theme .gfield_label {
		font-family: 'InterRegular';
		margin-left: 3px;
	}

	body .gform_wrapper.gravity-theme .gfield input.large {
		border-radius: 10px;
		border: 1px solid #6F3CE9;
	}

	body .gform_wrapper.gravity-theme .gfield .ginput_container_phone input.large {
		border-left: none;
		border-radius: 0 10px 10px 0;
	}

	html body .phone-flags .gfield_radio {
		border-radius: 10px 0 0 10px;
		border: 1px solid #6F3CE9;
		border-right: none;
		height: 50px;
	}

	.gform_wrapper.gravity-theme h2.margbot30 {
		margin-bottom: 32px;
	}

	.gform_wrapper.gravity-theme h2.margbot48 {
		margin-bottom: 48px;
	}

	.gform_next_button,
	.gform_button.button {
		width: 100%;
	}

	body h1 {
		margin-bottom: 10px;
		font-family: 'InterBold';
	}

	.gform_wrapper.gravity-theme h2 {
		margin-bottom: 15px;
	}

	.gform-body p {
		margin-bottom: 40px;
	}

	.margbot71 {
		margin-bottom: 71px;
	}

	.gform_confirmation_message {
		text-align: center;
	}

	.gform_confirmation_message_36 p {
		font-weight: 100;
		line-height: 1em;
		font-family: 'InterMedium';
		color: #4B4B4B;
	}

	.gform_confirmation_message h3 {
		padding-bottom: 29px;
		font-family: 'InterSemiBold';
	}

	.gform_confirmation_message img {
		margin-bottom: 9px;
	}

	.gform_wrapper.gravity-theme .gform_footer,
	.gform_wrapper.gravity-theme .gform_page_footer {
		padding: 0;
		margin: 4px 0 0;
	}

	.gform_wrapper.gravity-theme .gform_page_footer input+input {
		margin: 0;
		border-radius: 10px;
		border: 1px solid #6536D6;
		font-size: 20px;
		font-weight: 500;
		line-height: 1em !important;
		padding: 17px 6px;
		font-family: 'InterBold';
	}

	.gform_wrapper.gravity-theme .gform_page_footer input+input:hover {
		border: 1px solid transparent;
	}

	body .gform_wrapper.gravity-theme .gform_page_footer .gform_button.button {
		line-height: 1em !important;
	}

	html body .gform_wrapper.gravity-theme .gfield_label.marbot0 {
		margin-bottom: 0;
	}

	body .gform_wrapper.gravity-theme .gfield.gfield--width-third.one-third,
	body .gform_wrapper.gravity-theme .gfield.gfield--width-third.two-thirds {
		margin-top: -11px;
	}

	body .gform_wrapper.gravity-theme .gfield.gfield--width-third.two-thirds:focus-visible {
		outline: none;
	}

	.gform_wrapper.gravity-theme .gfield#field_36_9,
	.gform_wrapper.gravity-theme .gfield.quiz-name-field {
		padding-bottom: 16px;
	}

	.gf_progressbar_wrapper .button.gform_previous_button {
		display: block;
	}

	.progr-flex {
		display: flex;
		justify-content: space-between;
	}

	.prev-button {
		cursor: pointer;
	}

	body .gform_wrapper.gravity-theme .gf_progressbar_blue {
		background: #eee;
		height: 3px;
		position: relative;
	}

	body .gform_wrapper.gravity-theme .gf_progressbar_blue:before {
		content: "";
		height: 3px;
		width: 4px;
		position: absolute;
		left: 33.33%;
		background: #fff;
	}

	body .gform_wrapper.gravity-theme .gf_progressbar_blue:after {
		content: "";
		height: 3px;
		width: 4px;
		position: absolute;
		left: 66.67%;
		background: #fff;
		top: 0;
	}

	body .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_blue {
		background-color: #6536D6;
		height: 3px;
		border-radius: 10.5px;
		overflow: hidden;
	}

	body .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_blue span {
		display: none;
	}

	body .gform_wrapper.gravity-theme .gf_page_steps {
		border-bottom: none;
	}

	.gform_wrapper.gravity-theme .gf_progressbar_title {
		margin: 6px 0;
	}

	.prev-button div {
		padding: 6px;
	}

	body .gform_wrapper.gravity-theme .phone-flags .gfield-choice-input+label img {
		border-radius: 18px;
		box-shadow: 0 0 3px rgba(0, 0, 0, 0.6);
	}

	.gform_wrapper.gravity-theme .gform_validation_errors {
		margin-top: 38px;
	}

	@media (max-width: 991px) {
		body .container .diagnostic-form {
			padding: 10px 30px 87px;
		}

		.gform_wrapper.gravity-theme h2 {
			font-size: 22px;
		}

		.gform_confirmation_message h3 {
			font-size: 24px;
		}

		html body .phone-flags .gfield_radio {
			height: 50px;
		}

		.cent-cotnt.absol-logo {
			top: 32px;
		}
	}

	@media (max-width: 641px) {

		.gform_wrapper.gravity-theme .gform_page_footer .gform_button.button,
		.gform_wrapper.gravity-theme .gform_next_button {
			line-height: 50px !important;
		}

		html body .phone-flags .gfield_radio {
			height: 64px;
		}

		body .container .diagnostic-form {
			padding: 10px 0 87px
		}
	}

	@media (max-width: 440px) {
		.gform_wrapper.gravity-theme .gf_step {
			margin: 8px 0 0 0;
		}
	}
</style>
<?php  //DELETE ALL POLISH TUTORS
/*$allposts= get_posts( array('post_type'=>'tutor','numberposts'=>-1) );
	foreach ($allposts as $eachpost) {
$check = apply_filters( 'wpml_post_language_details', NULL, $eachpost->ID );
	$slide_language_code = substr( $check['locale'], 0, 2 );	
	if( $slide_language_code == "pl" ) {
		 wp_delete_post( $eachpost->ID, true );
	}
	}*/



if (have_posts()) while (have_posts()) : the_post(); ?>

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
						<?php echo do_shortcode('[gravityform id="' . get_field('nomer_formi_kviza') . '" title="false" description="false" ajax="false" tabindex="249"]'); ?>
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

	<!-- Step 6 | Start -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
	<style>
		.processing {
			display: none;
			margin-top: 63px;
			margin-right: auto;
			margin-left: auto;
			width: 350px;
			padding-bottom: 78px;
			border-bottom: 3px solid #F1F5F9;
			background-color: #fff;
		}

		.processing.visible {
			display: block;
		}

		.processing .loader {
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
			box-sizing: border-box;
			margin-right: auto;
			margin-left: auto;
			width: 116px;
			height: 116px;
		}

		.processing .loader svg {
			position: absolute;
		}

		.processing .loader .circle {
			cx: 150px;
			cy: 75px;
			r: 58px;
			fill: transparent;
			stroke: url(#linear-gradient);
			stroke-width: 6px;
		}

		.processing .loader .circle2 {
			cx: 46px;
			cy: 150px;
			r: 58px;
			fill: transparent;
			stroke: #6536D6;
			stroke-width: 6px;
			stroke-dasharray: 564px;
			transform: rotate(-90deg) translateX(-121px);
		}

		.processing .text {
			margin: 24px 0 0;
			font-family: 'InterMedium', sans-serif;
			font-weight: 500;
			font-size: 16px;
			line-height: 19.36px;
			text-align: center;
			color: #6F6B6B;
		}

		.reviews {
			display: none;
			padding-top: 25px;
			background-color: #fff;
		}

		.reviews.visible {
			display: block;
		}

		.reviews .title {
			margin-bottom: 0;
			font-family: 'InterExtrabold', sans-serif;
			font-size: 24px;
			line-height: 29px;
			text-align: center;
			color: #6536D6;
		}

		.reviews .subtitle {
			font-family: 'InterMedium', sans-serif;
			font-weight: 500;
			font-size: 16px;
			line-height: 19.36px;
			text-align: center;
			color: #334155;
		}

		.reviews .swiper {
			position: relative;
			display: flex;
			flex-direction: column;
			max-height: 100%;
			margin-top: 27px;
			width: 389px;
			background-color: #6536D6;
			padding: 16px 20px 56px;
		}

		.reviews .swiper::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			display: block;
			width: 75px;
			height: 218px;
			background-image: url('data:image/png;base64,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');
			background-repeat: no-repeat;
			background-position: 0 0;
			background-size: contain;
		}

		.reviews .swiper::after {
			content: '';
			position: absolute;
			right: 0;
			bottom: 0;
			display: block;
			width: 210px;
			height: 351px;
			background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANIAAAFfCAYAAAA7wJLwAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAxeSURBVHgB7d07dhzHFcbxr3sGkJ1hB5rQmbADtVYgegWEVkD4HBFkRjqT5YD0CkivQHTkkHDkkPQKDK/AdkQSGEyraroHGADz6HfX4/87R5ohhUMx+c69dau6OhGAnU6zTzP7OdV0lihffr/9nHxdfAKROs3yI+nz0aEOjnMtjmw4imDY30+Oi58qArMPQULQbFgOdDUzX4/XgmJCkhxVDUkVBAlBWAUm0SIr2y0bllmXYdmFIME7ds1i2zHp2lSZ9JuiDRsmMNsQJDjNVpqp5sfpMjSTb81vZeafIzmGIMEpttocaJKlSkylWYbmWB4gSBjVbXDSstqM26I1RZAwKNuqHeraDARyE5zkka/BuY8goXc/Zlem4ujbpGjVMgWIIKFzqwHBRPre/PJEDg4HukaQ0IlyH+eRGRI8VjEgCD486wgSGivWO19OzFjaVp5MESNIqOVe5cmEJYKESuzAYLIMT24mbXG1bVUQJGy1Nm07FeHZiSDhDtY9zRAkLBWtWzzj6q4RpIhRfbpDkCJUBGj+hLVPdwhSRMr27YWoPp0jSBE4y+aPEuVPRIB6Q5ACRfs2LIIUGAI0DoIUCAI0LoLkOQLkBoLkKQLkFoLkGQLkJoLkkWfZpRlhJy9FgJxDkDxQPsLwJpSLQkJEkBzGSQR/ECQH2XXQV7p+ZSrQieAFguQQBgn+IkiOYB3kN4I0sufZp1muqQkQ6yCfpcJozrKrFyZEH0SIvEdFGkE5jTPDBD/etID9CNKAimnc3I6zT4WgEKSBMEwIG0HqGVUoDgSpR1SheBCkHlCF4kOQOvY0uzxOlf5CFYoL+0gdso85pEo+EKL4UJE6wOkEEKSWyjvjbIg4ZBoxWrsWnmVXr0yIzHqIEMWOitRA2crZAHHEB0tToRa7N5RLVCHcQWtXgz2tPZHeixDhHlq7CsoNVluFMgEb0NrtUayHrm0VmgnYgtZuBzvaLh68Y4MVuxGkLex6iNE2qmKNtIHdHxIHTlEDQVpTDhXseoj9IdQyEZbsUGGi5J/m6+8E1MQaScWjD7kO3jNUQFPRB8lO5lIlhAitRB0k+/wQkzl0Idog2fG2mbW8FtCBKKd2xR6RXgroSHRBIkToQ1RBepbN3/DOIfQhmiARIvQpiiARIvQt+CARIgwh6CARIgwl2CARIgwpyCARIgwtuJMNxbNEhAjDCipIxbEfHsjD8IJp7TixgDEFESRChLF5H6SzbP44Uf5WwIi8DlLxUi/7PiJgXN4OG+wdC8Wb8YDxeVmRittPuWMB7vDuFiF7ZZb5S/9d3PYDh3jX2pVvC+feOTjFqyCx4QpXebNGsjf+cFkJXOVFkMpXTdoxN9dmwUnOt3a3EzpCBHc5HyRTid4w5obrnA5SOVzIBDjO2TXS0+zyJFXyRoAHnAwSJxfgGydbO0IE3zgXpGJdRIjgF6daO9ZF8JUzQWJdBJ8509qxXwSfOREk9ovgu9Fbu/Ic3b8FeGz0ilSeowO8NmqQGHUjFKO1drR0CMloFYmWDiEZJUi0dAjN4K0dLR1CNHhFWmjKpY4IzqBBsmfpEq7SQoAGa+04S4eQDVaRTIgYMCBYg1QkBgwI3SAViT0jhK73INkBAy0dQtdra8eAAbHotSKZPaPHhAgx6K0iMWBATHqrSMW4G4hDLxWJaoTY9FKRiotMgHh0HqQfs6tMXGSCyHQeJPMHvhIQmU6DxOluxKrTIKVKmdQhSp0FiaNAiFlnQaIaIWadBKmY1FGNEK9OgjSRqEaIWuuTDWZtdJwq+SAgYq0rklkbPREQuVYViTN1QKFVReKEN1BoXJHKamTXRkcCIte4Il1rkokQAUuNg8QGLHCrUZDOsvkjNmCBW42ClCh/LAA3ag8bGHkDD9WuSAulJwJwR+0gJZrQ1gH31AoSp7yBzWoFaaKEagRsUHnYwJAB2K5yRSpPMgDYoHKQUto6YKtKrR1tHbBbpYpEWwfsVilItHXAbntbO9o6YL+9FYm2Dtgv3f8DtHXAPjtbO9o6oJqdFYm2Dqgm3f0fk+8FYK99a6RMAPbaGqTyFZbcEgRUsDVIE+WPBKCSrUHKlXwrAJVsHH8z9gbq2ViRFjrghcpADRuDZMoUY2+gho1BypVTkYAaHqyRWB8B9T2oSKyPgPoeBCnRIhOAWjaskZJvBKCWTcOGTABquROk8nwdgJrSu7+4ZtAANHAnSIkmnK8DGrgTpFyaCUBt9yqSaO2ABm6C9DS7JERAQzdBSpTOBKCRtSBxogFoam2NxIkGoKmbIOVcdAI0ttbaMbEDmloGiYkd0M4ySEzsgHbK1m4+E4DGqEhAB8qKxOgbaGMZJEbfQDtla8epb6CN1T4SFQloIbX32AlAK+lc05kAtJKmSmjrgJbSXAuCBLSUJspnAtCKCRKtHdCWae1yggS0ZCpS+rUAtJIKQGsECeiACVIyE4BWqEhABwgS0AETJDZkgbaoSEAHCBLQAYIEdIAgAR0gSEAHCBLQAYIEdIAgAR2wQfqfALRiD60SJKAlWjugAwQJ6IC9s4HWDmgpTRg2AK0xtQM6YG9a/b8AtGIviKQiAS0xbAA6YIKUXAhAK+wjAR2gIgEdSKeaXwhAK+ln/YZhA9BS+vp8Of4mTEALy2FDLl0IQGPLICUECWilHH/n/xGAxsrWbnEhAI2VFWl6IQCNpcW/rj4KQGPLILGXBLSzDFKxl8RRIaCptUOrOe0d0NB6kBiBAw3dBGkhUZGAhtafRyJIQEM3QbrSwYUANHITJDu5y6lKQCP3HjVf/EsAarsXJEbgQBN3gpQrPReA2u4EiYED0MydIDFwAJp5cK9dovwfAlDLgyBxwgGo70GQzDrpnQDU8iBIPFIB1Lfl7u/F3wSgso1BYp0E1LMxSKyTgHo2Bon9JKCere9HYj8JqG5HkBLaO6CirUH6rKlt7bimC6hga5DK172cC8BeO98hm+uadRJQwc4gXeqrtwKw184g0d4B1aT7fsC0dxwXAvbYGyTaO2C/vUGivQP22xski/YO2K1SkGjvgN0qBYn2DtitUpAs2jtgu8pBKts7zt4BG1QOEu0dsF3lIFmJ9BcBeCBRTc+yq/+ajyMBuFGrIlm5FlQl4J7aQbrU4WsBuKN2kBg6AA/VDpJlFlZ/FIAbtYcNKwwdgFuNKpLF0AG41ThI5dCBkw6AWgSpGDrkfxWA5kGyEl0zCgfUMkg/nf/2QozCgXZBshiFAy3G3+vMKPy9+cgERKp1RbKoSohdJxXJoiohZp1UJIuqhJh1VpEsqhJi1VlFsqhKiFWnFcmiKiFGnVYki6qEGHVekSyqEmLTeUWyqEqITS9B+un84DznZDgi0kuQij/4+qV4XgmR6C1I9mQ4T9EiFr0FyeIpWsSi1yDZp2jNWonBA4LXy/j7PsbhCF2vFWmFcThCN0iQ7DhcvMkCARskSNYXTV+KwQMCNViQGDwgZIMMG9YxeECIBqtIK4nmP4gWD4EZPEiceECIBm/tVs6yqw/mf34sIACDV6QVM3j4QUAgRgvSn88PP5oWjykegjBaa7dCi4cQjFaRVsoWjykevDZ6kIoWj41a+G301m6FjVr4bPSKtMJGLXzmTJCKjdqEkTi85EyQrJ/Pp+/E4xbwkDNrpHWMxOEbpyrSSqr578V6CR5xMkisl+AbJ4NksV6CT5xcI61jfwk+cLYirXzR1KyXkgsBDnM+SPauh4UWDB/gNOeDZNnzeInyPwhwlBdBsn46P3zLRZNwlfPDhvvOsksTqOSxAId4U5FWLnVwmksfBTjEuyDZ4UNx8oFJHtzhXWu38jz7NMs1/WC+HgkYmXcVacUeI1oo/06MxeEAb4NkMRaHK7wOkmXH4jlhwsi8D5L18/nha/aYMCZvhw2bPM+uXprR+AsBAwsqSNaz7Mq+Sf2JgAEFFySL0w8YWpBBsggThhRskCzChKEEHSSLMGEIwQfJIkzoWxRBsggT+hRNkCzChL4EcbKhqp/PD084AYE+RFWRVjgBga5FGSSLMKFL0QbJMmumU7NmeiWgpaiDZJ1l80eJ8jfiSVu0EH2QrKfZ5XGq9BcpnwlogCCVijsgDt4TJjQR1fh7F3sHRKKr77jqC01QkTbgmSbURUXa4E/nB6ds3KIOKtIOTPRQFUHagyEEqqC122M1hDBf3wnYgopUA8eKsA1BqqlYN+kVrR7WEaQGWDfhPoLUAq0eVghSS8+zy5Nc6QuqU9x+BbcOefvQUaUxAAAAAElFTkSuQmCC');
			background-repeat: no-repeat;
			background-position: 0 0;
			background-size: contain;
		}

		.reviews .swiper-horizontal>.swiper-pagination-bullets,
		.swiper-pagination-bullets.swiper-pagination-horizontal,
		.swiper-pagination-custom,
		.swiper-pagination-fraction {
			position: static;
			margin-top: 33px;
		}

		.reviews .swiper-pagination-bullet {
			width: 10px;
			height: 10px;
			background: rgba(255, 255, 255, 0.5);
		}

		.reviews .swiper-pagination-bullet-active {
			width: 60px;
			height: 10px;
			background-color: #fff;
			border-radius: 20px;
		}

		.reviews .item {
			width: 100% !important;
			background-color: #fff;
			padding: 15px 22px 34px;
		}

		.reviews .header {
			display: flex;
			justify-content: space-between;
		}

		.reviews .client-name {
			font-family: 'InterExtrabold', sans-serif;
			font-weight: 800;
			font-size: 16px;
			line-height: 19.36px;
		}

		.reviews .text {
			margin-top: 20px;
		}

		.reviews .text h2,
		.reviews .text p {
			text-align: left;
		}

		.reviews .text h2 {
			font-family: 'InterSemiBold', sans-serif;
			font-size: 16px;
			line-height: 19.36px;
		}

		.reviews .text p {
			font-family: 'InterMedium', sans-serif;
			font-weight: 500;
			font-size: 14px;
			line-height: 17px;
		}

		.reviews .rating {
			width: 80px;
			height: 15px;
		}

		.reviews .rating .rect {
			width: 15px;
			height: 15px;
		}
	</style>
	<div class="processing">
		<div class="loader">
			<svg>
				<linearGradient id="linear-gradient">
					<stop offset="100%" stop-color="#E0E5EA" />
				</linearGradient>
				<circle class="circle"></circle>
				<circle class="circle2" style="stroke-dashoffset: 564px"></circle>
			</svg>
			<span class="number">0</span>%
		</div>
		<p class="text">Оброблюємо ваші відповіді...</p>
	</div>
	<?php
	$page_on_front = get_option('page_on_front');
	?>
	<div class="reviews">
		<p class="title">10 тисяч батьків</p>
		<p class="subtitle">вже обрали онлайн-школу mathema.me для своїх дітей</p>
		<?php
		if (have_rows('trust_feed', $page_on_front)) :
		?>
			<div class="swiper">
				<div class="swiper-wrapper list">
					<?php
					$counter = 0;
					while (have_rows('trust_feed', $page_on_front)) : the_row();
						if ($counter > 2) break;
						$counter++;
					?>
						<div class="swiper-slide item">
							<div class="header">
								<p class="client-name">
									<?php
									echo esc_html(get_sub_field('trust_name'));
									?>
								</p>
								<div class="rating-date">
									<div class="rating">
										<svg viewBox="0 0 512 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											<g id="Trustpilot_ratings_5star-RGB" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<g fill-rule="nonzero">
													<rect id="Rectangle-path" fill="#00B67A" x="0" y="0" width="96" height="96"></rect>
													<rect id="Rectangle-path" fill="#00B67A" x="104" y="0" width="96" height="96"></rect>
													<rect id="Rectangle-path" fill="#00B67A" x="208" y="0" width="96" height="96"></rect>
													<rect id="Rectangle-path" fill="#00B67A" x="312" y="0" width="96" height="96"></rect>
													<rect id="Rectangle-path" fill="#00B67A" x="416" y="0" width="96" height="96"></rect>
													<path d="M48,64.7 L62.6,61 L68.7,79.8 L48,64.7 Z M81.6,40.4 L55.9,40.4 L48,16.2 L40.1,40.4 L14.4,40.4 L35.2,55.4 L27.3,79.6 L48.1,64.6 L60.9,55.4 L81.6,40.4 L81.6,40.4 L81.6,40.4 L81.6,40.4 Z" id="Shape" fill="#FFFFFF"></path>
													<path d="M152,64.7 L166.6,61 L172.7,79.8 L152,64.7 Z M185.6,40.4 L159.9,40.4 L152,16.2 L144.1,40.4 L118.4,40.4 L139.2,55.4 L131.3,79.6 L152.1,64.6 L164.9,55.4 L185.6,40.4 L185.6,40.4 L185.6,40.4 L185.6,40.4 Z" id="Shape" fill="#FFFFFF"></path>
													<path d="M256,64.7 L270.6,61 L276.7,79.8 L256,64.7 Z M289.6,40.4 L263.9,40.4 L256,16.2 L248.1,40.4 L222.4,40.4 L243.2,55.4 L235.3,79.6 L256.1,64.6 L268.9,55.4 L289.6,40.4 L289.6,40.4 L289.6,40.4 L289.6,40.4 Z" id="Shape" fill="#FFFFFF"></path>
													<path d="M360,64.7 L374.6,61 L380.7,79.8 L360,64.7 Z M393.6,40.4 L367.9,40.4 L360,16.2 L352.1,40.4 L326.4,40.4 L347.2,55.4 L339.3,79.6 L360.1,64.6 L372.9,55.4 L393.6,40.4 L393.6,40.4 L393.6,40.4 L393.6,40.4 Z" id="Shape" fill="#FFFFFF"></path>
													<path d="M464,64.7 L478.6,61 L484.7,79.8 L464,64.7 Z M497.6,40.4 L471.9,40.4 L464,16.2 L456.1,40.4 L430.4,40.4 L451.2,55.4 L443.3,79.6 L464.1,64.6 L476.9,55.4 L497.6,40.4 L497.6,40.4 L497.6,40.4 L497.6,40.4 Z" id="Shape" fill="#FFFFFF"></path>
												</g>
											</g>
										</svg>
									</div>
								</div>
							</div>
							<div class="text">
								<?php
								echo wp_kses_post(get_sub_field('trust_feed'));
								?>
							</div>
						</div>
					<?php
					endwhile;
					?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		<?php
		endif;
		?>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function() {
			jQuery(document).on('gform_page_loaded', function(event, form_id, current_page) {
				if (current_page == 6) {
					const elProcessingWrapper = document.querySelector('.processing-wrapper');
					const elProcessing = document.querySelector('.processing');
					const elReviews = document.querySelector('.reviews');

					const elProcessingClone = elProcessing.cloneNode(true);
					const elReviewsClone = elReviews.cloneNode(true);

					elProcessingWrapper.appendChild(elProcessingClone);
					elProcessingWrapper.appendChild(elReviewsClone);

					elProcessingClone.classList.add('visible');
					elReviewsClone.classList.add('visible');

					new Swiper('.reviews .swiper', {
						loop: true,
						autoplay: {
							delay: 5000,
						},
						spaceBetween: 22,
						pagination: {
							el: '.reviews .swiper-pagination',
						},
					});

					const elCircle2 = document.querySelector('.processing .loader .circle2');
					const elLoaderNumber = document.querySelector('.processing .loader .number');

					const styleStrokeOffset = elCircle2.style.strokeDashoffset;

					const step = 0.37;
					const delay = 10;
					const duration = 1000;

					let start;
					let i = 0;
					let strokeOffset = styleStrokeOffset.split('px')[0];
					let loaderNumber = elLoaderNumber.textContent;

					let t = setTimeout(function run() {
						if (i > duration) {
							clearTimeout(t);
							goToNextFormPage();
							return;
						}

						start = Date.now();
						strokeOffset = strokeOffset - step;
						elCircle2.style.strokeDashoffset = strokeOffset + 'px';

						if (i % 10 == 0) {
							elLoaderNumber.textContent = loaderNumber++;
						}

						t = setTimeout(run, delay);
						i++;
					}, delay);
				} else if (current_page == 7) {
					const elLeaveContactsBtn = document.getElementById('leave-contacts');

					elLeaveContactsBtn.addEventListener('click', function(e) {
						e.preventDefault();

						const elNextToFormPageBtn = document.getElementById('gform_next_button_46_39');
						elNextToFormPageBtn.click();
					});
				}
			});
		});

		function goToNextFormPage() {
			const elNextToFormPageBtn = document.getElementById('gform_next_button_46_36');
			elNextToFormPageBtn.click();
		}
	</script>
	<!-- Step 6 | End -->

<?php endwhile; ?>
<?php get_footer(); ?>