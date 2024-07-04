<?php

/**
 * Template Name: Стать учителем
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-became-teacher">

			<div class="page-hero-section">
				<div class="container">
						<h1 style="text-align: center;"><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<div class="buttons-wrap" style="text-align: center;">
							<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
								<span class="button button-teacher-application"><?php the_field('hero_cta'); ?></span>
							<?php else : ?>
								<span class="button becomeatutor"><?php the_field('hero_cta'); ?></span>
							<?php endif; ?>
						</div>
				</div>
			</div>

			<div class="what-you-get">
				<div class="container">
					<h2>
						<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
							Gwarantujemy
						<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
							What’s in it for you?
						<?php else : ?>
							<?php if (get_field("chomu_vchiteli_matematiki_obirayut_mathema")) {the_field('chomu_vchiteli_matematiki_obirayut_mathema');} else { ?>Отримайте<?php } ?>
						<?php endif; ?>
					</h2>
					<div class="row">
						<?php if (have_rows('recive_features')) : while (have_rows('recive_features')) : the_row(); ?>
								<div class="col">
									<div class="block">
										<div class="horiz-flex">
											<div class="feat-icon">
												<img src="<?php the_sub_field('why-choose-ico'); ?>" alt="feature" width="40" height="40" />
											</div>
											<div class="feat-title">
												<h4><?php the_sub_field('why-us-title'); ?></h4>
											</div>
										</div>
										<p class="marg-left-20"><?php the_sub_field('feature'); ?></p>
									</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
				</div>
			</div>
			
			<div class="calculator-section">
				<div class="container">
							<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
								<h2>Kalkulator zarobków</h2>
								<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
								<h2>How much could you earn?</h2>
								<?php else : ?>
								<h2><?php if (get_field("kalkulyator_zagolovok")) {the_field('kalkulyator_zagolovok');} else { ?>Калькулятор доходу<?php } ?></h2>
							<?php endif; ?>	
					<div class="row space-between vertical-aligned">
						<div class="col">
							<?php if ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
								<p>Check our income calculator to see how much monthly income you can receive working with Mathema.</p>
							<?php else : ?>
								<p><?php if (get_field("tekst_kalkulyatora")) {the_field('tekst_kalkulyatora');} else { ?>Тут ви можете порахувати, який дохід на місяць<br>ви можете отримувати, співпрацюючи з МАТHЕМА<?php } ?></p>
							<?php endif; ?>
						</div>
						<div class="col">
							<div class="income-calculator">
								<div>
							<script>
								jQuery(document).ready(function($){
								
								var rad = document.calcForm.yourlevel;
								var prev = null;
								var $amount = $('.amount');
								var $table = $amount.closest('table');
								var $tax = $table.find(".tax");
								var $total = $table.find(".total");
								for (var i = 0; i < rad.length; i++) {
									rad[i].addEventListener('change', function() {
										if (this !== prev) {
											prev = this;
											$tax.val(this.value);
											if (parseFloat($amount.val()) > 0 ) {
												$total.text(parseFloat($amount.val()) * parseFloat($tax.val()) * 4);
											} else {
												$total.text("0");
											}
										}
									});
								}
								
								$(function() {
									$('.amount').on('input', function() {
										$amount = $(this);
										if (parseFloat($amount.val()) > 0 ) {
											$total.text(parseFloat($amount.val()) * parseFloat($tax.val()) * 4);
										} else {
											$total.text("0");
										}
									});
								});
								}); 
							</script>
<form name="calcForm">
  <table>
    <tr>
      <td>
	<fieldset>
    <legend></legend>
    <div>
      <div><input type="radio" id="yourlevel1" name="yourlevel" value="<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>40<?php else : ?>150<?php endif; ?>" />
      <label for="yourlevel1"><?php if (ICL_LANGUAGE_CODE == 'pl') : ?>Poziom 1<?php else : ?>Рівень 1<?php endif; ?></label></div>
       <div><input type="radio" id="yourlevel2" name="yourlevel" value="<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>45<?php else : ?>175<?php endif; ?>" />
      <label for="yourlevel2"><?php if (ICL_LANGUAGE_CODE == 'pl') : ?>Poziom 2<?php else : ?>Рівень 2<?php endif; ?></label></div>
       <div><input type="radio" id="yourlevel3" name="yourlevel" value="<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>50<?php else : ?>200<?php endif; ?>" />
      <label for="yourlevel3"><?php if (ICL_LANGUAGE_CODE == 'pl') : ?>Poziom 3<?php else : ?>Рівень 3<?php endif; ?></label></div>
	   <div><input type="radio" id="yourlevel4" name="yourlevel" value="<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>55<?php else : ?>250<?php endif; ?>" checked="checked" />
      <label for="yourlevel4"><?php if (ICL_LANGUAGE_CODE == 'pl') : ?>Poziom 4<?php else : ?>Рівень 4<?php endif; ?></label></div>
    </div>
  </fieldset>
	</td>
    </tr>
	<tr>
      <td>
	  <p class="howmany"><b><?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
									Ile godzin tygodniowo jesteś gotów poświęcić?
								<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
									How many hours a week do you want to teach?
								<?php else : ?>
									Скільки годин на тиждень ви готові викладати?
								<?php endif; ?></b></p>
          <p>
        <input type="text" name="amount" class="amount" placeholder="<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>Liczba godzin<?php else : ?>Кількість годин<?php endif; ?>">
		</p>
      </td>
    </tr>
	<tr>
      <td>
        <div style="display: none;">
            <input name="tax" type="text" class="tax" value="<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>55<?php else : ?>250<?php endif; ?>" readonly="readonly">
        </div>
        <div>
          <p>
            <span class="total hideborder">0</span> <?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
										zl
									<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
										GBP
									<?php else : ?>
										грн.
									<?php endif; ?>
          </p>
		   <p class="smalltext"><?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
										Twoje miesięczne wynagrodzenie
									<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
										will be your monthly income.
									<?php else : ?>
										складатиме ваш дохід на місяць
									<?php endif; ?></p>
        </div>
      </td>
    </tr>
  </table>
</form>
						</div>
							</div>
						</div>
					</div>
					<div class="buttons-wrap padding61" style="text-align: center;">
							<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
								<span class="button button-teacher-application"><?php the_field('calc_cta'); ?></span>
							<?php else : ?>
								<span class="button becomeatutor"><?php the_field('calc_cta'); ?></span>
							<?php endif; ?>
					</div>
					
				</div>
			</div>
			

			<?php if  ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
			<?php else : ?>
				<div class="introduction-section padding20">
					<div class="container">
								<h2 style="text-align: left;margin-bottom: 20px;"><?php the_field('perevagi_roboti_na_platformi_mathema'); ?></h2>
							<div class="row">
								<?php if (have_rows('why_choose')) : while (have_rows('why_choose')) : the_row(); ?>
											<div class="block">
										<div class="horiz-flex gap15">
											<div class="feat-icon">
												<img src="/wp-content/uploads/2023/12/image-632.png" alt="yes" width="39" height="40" />
											</div>
											<div class="feat-title">
												<h4><?php the_sub_field('name'); ?></h4>
												<p class=""><?php the_sub_field('description'); ?></p>
											</div>
										</div>
									</div>
								<?php endwhile;
								else : endif; ?>
							</div>
					</div>
				</div><!-- why us -->
			<?php endif; ?>

			<div class="introduction-section padding20">
				<div class="container">
						<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
							<h2>Co wyróżnia MATEMĘ od innych szkół?</h2>
						<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
							<h2>What sets Mathema apart<br>in the maths-teaching world?</h2>
						<?php else : ?>
							<h2><?php the_field('vid_vchitelya_mi_ochikumo'); ?></h2>
						<?php endif; ?>
					<div class="our-features">
					<div class="description">
						<?php if (have_rows('matema_features')) : while (have_rows('matema_features')) : the_row(); ?>
								<div class="colmn33">
									<div class="icon">
										<div><img alt="icon" src="<?php the_sub_field('expectat-icon'); ?>" width="35" height="35" alt="icon" class="lazyload"><noscript><img src="<?php the_sub_field('expectat-icon'); ?>" width="35" height="35" alt="icon" /></noscript></div>
									</div>
									<?php the_sub_field('feature'); ?>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
					</div>
				</div>
			</div>
			
			<div class="student-intoduction">
				<div class="container">
					<div class="head">
							<div class="flex-parent wider-flex">
								<div class="flex-child">
									<h2><?php the_field('vi_student_i_hochete_rozpochati_karru_repetitora'); ?></h2>
									<p class="maxwidth400"><?php the_field('tekst_dlya_studenta'); ?></p>
									<?php if (!get_field('cta_studenta_url')) { ?>
										<?php if (ICL_LANGUAGE_CODE == 'pl') { ?>
											<span class="button button-teacher-application"><?php the_field('cta_studenta'); ?></span>
										<?php } else { ?>
											<span class="button becomeatutor"><?php the_field('cta_studenta'); ?></span>
										<?php } ?>
									<?php } else { ?>
										<a href="<?php the_field('cta_studenta_url'); ?>" class="button"><?php the_field('cta_studenta'); ?></a>
									<?php } ?>	
								</div>
								
								<div class="flex-child">
									<img alt="icon" src="<?php the_field('zobrazhennya_bloku_studenta'); ?>" width="220" height="220" alt="student"><noscript><img src="<?php the_field('zobrazhennya_bloku_studenta'); ?>" width="220" height="220" alt="student" /></noscript>
								</div>
							</div>	
					</div>
				</div>
			</div>

			<div class="container">
				<div class="about-school">

					<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
						<h2>O szkole</h2>
					<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
						<h2>About Mathema</h2>
					<?php else : ?>
						<h2>Про нас</h2>
					<?php endif; ?>
					<?php the_field('about_school'); ?>
				</div>
			</div>
			
			<div class="container">
			<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
					<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
					<?php else : ?>
						<h2>Сюжет про Mathema на телеканалі 1+1</h2>
					<?php endif; ?>
					</div>
			<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>	<?php else : ?>	
			 <?php get_template_part('template-parts/video-introduction'); ?>
			 <?php endif; ?>

			<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
			<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
			<?php else : ?>
				<div class="what-you-get teacher-reviews">
				<div class="container">
					<h2><?php the_field('vidguki_vchiteliv_pro_nas'); ?></h2>
					<div class="row">
						<?php if (have_rows('vidguk_vchitelya')) : while (have_rows('vidguk_vchitelya')) : the_row(); ?>
								<div class="col">
									<div class="block">
										<div class="horiz-flex">
											<div class="photo margtop-14">
												<img src="<?php the_sub_field('foto_vchitelya'); ?>" alt="<?php the_sub_field('imya_vchitelya'); ?>" width="130" height="130" />
											</div>
											<div class="teacher-details">
												<h4><?php the_sub_field('imya_vchitelya'); ?></h4>
												<p><?php the_sub_field('provedeni_uroki'); ?></p>
												<p><?php the_sub_field('tekst_vidguku'); ?></p>
											</div>
										</div>
									</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
					<div class="pad39-51"><span class="button becomeatutor">Приєднатись до Mathema</span></div>
				</div>
			</div>
			<?php endif; ?>

			<div class="faq-section">
				<div class="container">
					<h2>
						<?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
							Często zadawane pytania
						<?php elseif ((ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'gb')) : ?>
							FAQ
						<?php else : ?>
							Поширені запитання
						<?php endif; ?>
					</h2>
					<div class="faq faq-list">
						<?php if (have_rows('faq')) : while (have_rows('faq')) : the_row(); ?>
								<div class="item faq-item">
									<div class="icon">
										<div class="hor"></div>
										<div class="ver"></div>
									</div>
									<div class="question">
										<?php the_sub_field('questuion'); ?>
									</div>
									<div class="answer">
										<?php the_sub_field('answer'); ?>
									</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
				</div>
			</div>


		</div><!-- page name -->
	</div><!-- inner page -->
<style>
.page-hero-section {margin-bottom: 40px;}
.inner-page .page-hero-section .buttons-wrap {margin-top: 40px;}
.inner-page .page-hero-section {margin-bottom: 110px;}
.page-hero-section .button {
	box-sizing: border-box;
    background-color: #6536D6;
    background-image: url("data:image/svg+xml,%3Csvg width='10' height='11' viewBox='0 0 10 11' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z' fill='white'%3E%3C/path%3E%3C/svg%3E");
    background-position: right 24px top 50%;
    background-repeat: no-repeat;
    border-radius: 40px;
    border: 0;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    line-height: 60px;
    letter-spacing: 0.2pt;
    padding: 0 24px;
    padding-right: 48px;
    text-align: center;
    transition: 0.2s ease;
	}
.page-became-teacher .what-you-get .row {flex-wrap: wrap;gap: 15px 20px;}
.page-became-teacher .what-you-get .col {width: calc(50% - 10px);flex-wrap: wrap;align-self: stretch;display: flex;}
.horiz-flex {display: flex;gap: 8px;align-items: center;}
.horiz-flex h4 {margin-bottom: 0;}
.marg-left-20 {margin-left: 20px;}
.page-became-teacher .calculator-section .income-calculator {padding: 40px 60px;border-radius: 5px;background: #68C8FF;}
.income-calculator table {width: 100%;}
fieldset {padding: 0;border: none;width: 100%;}
fieldset > div {display: flex;width: 100%;justify-content: space-between;}
fieldset > div > div {border-radius: 15px;border: 0.5px solid #211D4F;background: #FFF;padding: 11px 15px 10px;}
.calculator-section td {padding: 5px 20px;}
fieldset label,.income-calculator p {color: #211D4F;}
.howmany {color: #211D4F;padding: 23px 0 20px;}
.amount {padding: 15px 16px;border: 1px solid #FFF;}
p input {font-size: 18px;font-weight: 400;line-height: 24px;}
p .total.hideborder {color: #211D4F;font-size: 35px;font-weight: 700;line-height: 36px;}
.padding61 {padding: 61px 0;}
.horiz-flex.gap15 {gap: 15px;align-items: flex-start;margin-bottom: 20px;}
.horiz-flex.gap15 h4 {margin-bottom: 15px;}
.our-features .description {flex-wrap: wrap;display: flex;}
.colmn33 {width: 26.67%;margin-right: 9%;margin-bottom: 34px;}
.colmn33:nth-child(3n) {margin-right: 0;}
.introduction-section.padding20 {padding: 20px 0 40px;}
.introduction-section .our-features .description {max-width: 100%;}
.colmn33 .icon {margin-bottom: 12px;}
.introduction-section {background-color: #FBF9F6;}
.introduction-section .our-features .description .icon {padding: 2px;align-items: center;justify-content: center;}
.introduction-section .our-features .description .icon img {max-width: 100%;}
.student-intoduction {background: #1F3D64;padding: 61px 0 19px;}
.flex-parent.wider-flex {display: flex;gap: 10%;flex-wrap: wrap;justify-content: space-between;}
.student-intoduction h2, .student-intoduction p {color: #FFF;}
.student-intoduction .button {margin-bottom: 19px;}
.student-intoduction .flex-parent.wider-flex {flex-wrap: unset;}
.maxwidth400 {max-width: 400px;margin-bottom: 23px;}
.page-became-teacher .about-school {margin-top: 40px;max-width: 1280px;}
.margtop-14 {margin-top: 14px;}
.teacher-reviews {padding-top: 67px;}
.teacher-reviews .horiz-flex {align-items: start;}
.page-became-teacher .teacher-reviews .col .block p {margin-bottom: 12px;}
.teacher-reviews img {border-radius: 130px;}
.pad39-51 {width: 100%;text-align: center;padding: 39px 0 0;}
@media screen and (max-width: 1200px) {
	.page-became-teacher .calculator-section .income-calculator {padding: 20px 15px;}
}
@media screen and (max-width: 1072px) {
	fieldset > div {display: block;}
}
@media screen and (max-width: 991px) {
	.page-became-teacher .what-you-get .row {display: flex !important;}
	fieldset > div {display: flex;}
	.page-became-teacher .what-you-get.teacher-reviews .col {width: 100%;}
}
@media screen and (max-width: 767px) {
	.colmn33 {width: 100%;margin-right: 0;}
}
@media screen and (max-width: 600px) {
	.page-became-teacher .what-you-get .col {width: 100%;}
	fieldset > div {gap: 20px;flex-wrap: wrap;}
	fieldset > div > div {flex-basis: calc(50% - 50px);}
	body .slick-prev, body .slick-next {width: 28px;height: 28px;top: 45%;color: #6536D6;}
	body .slick-prev:before, body .slick-next:before {color: #6536D6;font-size: 28px;opacity: 1;}
	body .slick-prev {z-index: 20;}
	
}
@media screen and (max-width: 576px) {
	.page-became-teacher .what-you-get {margin-bottom: 34px;padding: 39px 12px 0;}
	.flex-parent.wider-flex {display: block;text-align: center;}
	.maxwidth400 {margin: auto;}
}
@media screen and (max-width: 480px) {
	.teacher-reviews .horiz-flex {flex-direction: column;text-align: center;}
	.margtop-14 {width: 100%;}
	.slick-slide img {margin: auto;width: 130px;}
}
@media screen and (max-width: 370px) {
	fieldset > div {display: block;}
}
</style>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/matema-child/assets/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/matema-child/assets/slick/slick-theme.css"/>
<script type="text/javascript" src="/wp-content/themes/matema-child/assets/slick/slick.min.js"></script>
<script>
  jQuery(document).ready(function($){
	  $(window).on('load', () => {
  const element = $('.teacher-reviews .row');
  const mediaQuery = window.matchMedia('(max-width: 576px)');

  const handleSwitchSlick = ((e) => {
    if (e.matches) {
      element.slick({
        slidesToShow: 1,
				  infinite: true,
					autoplay: true,
					arrows: true,
					speed: 300,
			      slidesToScroll: 1,
      });
    } else if (element.hasClass('slick-initialized')) {
      element.slick('unslick');
    }
  });

  mediaQuery.addListener(handleSwitchSlick);
  handleSwitchSlick(mediaQuery);
});
	  
	  
	$('.teacher-reviews .row').slick({
	  responsive: [
			  {
			    breakpoint: 5000,
			    settings: "unslick"
			  },
			  {
			    breakpoint: 576,
			    settings: {
			      slidesToShow: 1,
				  infinite: true,
					autoplay: true,
					arrows: true,
					speed: 300,
			      slidesToScroll: 1
			    }
			  }
			]
});

    }); 
</script>
<?php /*if(is_page(1269)) { ?>
<script>
  jQuery(document).ready(function($){
var myErl = document.getElementById('gform_submit_button_20');
myErl.addEventListener('click', function() {
    fbq('track', 'Lead');
}, false);
    }); 
</script>
<?php }*/ ?> 
<?php endwhile; ?>

<?php get_footer(); ?>