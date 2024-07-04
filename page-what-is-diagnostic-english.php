<?php

/**
 * Template Name: Что такое урок-диагностика - Английский
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page">
		<div class="page-wrap page-what-is-diagnostic">

			<div class="page-hero-section">
				<div class="container">
					<div class="wrap hero-description-wrap">
						<?php the_content(); ?>

						<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
						<div class="lesson-price">
							<p><strong>19 GBP</strong><small>cost of a trial lesson</small></p>
						</div>
						<div class="buttons-wrap">
							<a href="<?php echo get_page_link('11079'); ?>" class="button ">Order a test lesson</a>
						</div>
						<?php break;
                         case 'tr': ?>
						<div class="lesson-price">
							<p><strong>190 TRY</strong><small> deneme dersi ücreti</small></p>
						</div>
						<div class="buttons-wrap">
							<a href="" class="button main-menu-popup">Deneme dersi ayırt</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="lesson-goals">
				<div class="container">
					<div class="row space-between">
						<div class="col">
							<div class="block">
								<div class="icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 5C19.89 4.65 18.67 4.5 17.5 4.5C15.55 4.5 13.45 4.9 12 6C10.55 4.9 8.45 4.5 6.5 4.5C4.55 4.5 2.45 4.9 1 6V20.65C1 20.9 1.25 21.15 1.5 21.15C1.6 21.15 1.65 21.1 1.75 21.1C3.1 20.45 5.05 20 6.5 20C8.45 20 10.55 20.4 12 21.5C13.35 20.65 15.8 20 17.5 20C19.15 20 20.85 20.3 22.25 21.05C22.35 21.1 22.4 21.1 22.5 21.1C22.75 21.1 23 20.85 23 20.6V6C22.4 5.55 21.75 5.25 21 5ZM3 18.5V7C4.1 6.65 5.3 6.5 6.5 6.5C7.84 6.5 9.63 6.91 11 7.49V18.99C9.63 18.41 7.84 18 6.5 18C5.3 18 4.1 18.15 3 18.5ZM21 18.5C19.9 18.15 18.7 18 17.5 18C16.16 18 14.37 18.41 13 18.99V7.49C14.37 6.9 16.16 6.5 17.5 6.5C18.7 6.5 19.9 6.65 21 7V18.5Z" fill="#6536D6" />
										<path opacity="0.3" d="M11 7.49C9.63 6.91 7.84 6.5 6.5 6.5C5.3 6.5 4.1 6.65 3 7V18.5C4.1 18.15 5.3 18 6.5 18C7.84 18 9.63 18.41 11 18.99V7.49Z" fill="#6536D6" />
										<path d="M17.5 10.5C18.38 10.5 19.23 10.59 20 10.76V9.24C19.21 9.09 18.36 9 17.5 9C16.22 9 15.04 9.16 14 9.47V11.04C14.99 10.69 16.18 10.5 17.5 10.5Z" fill="#6536D6" />
										<path d="M17.5 13.16C18.38 13.16 19.23 13.25 20 13.42V11.9C19.21 11.75 18.36 11.66 17.5 11.66C16.22 11.66 15.04 11.82 14 12.13V13.7C14.99 13.36 16.18 13.16 17.5 13.16Z" fill="#6536D6" />
										<path d="M17.5 15.83C18.38 15.83 19.23 15.92 20 16.09V14.57C19.21 14.42 18.36 14.33 17.5 14.33C16.22 14.33 15.04 14.49 14 14.8V16.37C14.99 16.02 16.18 15.83 17.5 15.83Z" fill="#6536D6" />
									</svg>
								</div>
								<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<h3>What will be covered in the test lesson</h3>
								<ul class="no-default">
									<li>We tailor our test lesson to fit your child’s maths needs. We’ll work with you to identify  maths topics where they need extra support.</li>
									<li>Not sure what maths topics your child needs help with? Don’t worry. Their teacher will test their current abilities overall.</li>
								</ul>
						<?php break;
                         case 'tr': ?>
							<h3>Test dersinde neler işlenecek</h3>
								<ul class="no-default">
									<li>Çocuğunuzun matematik ihtiyaçlarına uygun bir test dersi düzenliyoruz. Hangi matematik konularında ekstra destek gerektiğini belirlemek için sizinle birlikte çalışacağız.</li>
									<li>Çocuğunuzun hangi matematik konularında yardıma ihtiyacı olduğundan emin değil misiniz? Endişelenmeyin. Öğretmeni genel olarak mevcut yeteneklerini test edecek.</li>
								</ul>
						<?php } ?>
							</div>
						</div>
						<div class="col">
							<div class="block">
								<div class="icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19.07 4.93L17.66 6.34C19.1 7.79 20 9.79 20 12C20 16.42 16.42 20 12 20C7.58 20 4 16.42 4 12C4 7.92 7.05 4.56 11 4.07V6.09C8.16 6.57 6 9.03 6 12C6 15.31 8.69 18 12 18C15.31 18 18 15.31 18 12C18 10.34 17.33 8.84 16.24 7.76L14.83 9.17C15.55 9.9 16 10.9 16 12C16 14.21 14.21 16 12 16C9.79 16 8 14.21 8 12C8 10.14 9.28 8.59 11 8.14V10.28C10.4 10.63 10 11.26 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 11.26 13.6 10.62 13 10.28V2H12C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 9.24 20.88 6.74 19.07 4.93Z" fill="#EC1C2E" />
									</svg>
								</div>
								<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<h3>What are the objectives of the test lesson</h3>
								<ul class="no-default">
									<li>You and your child will be introduced to their new teacher and their teaching methods.</li>
									<li>The teacher will share their plan of how further lessons will be structured.</li>
								</ul>
						<?php break;
                         case 'tr': ?>
							<h3>Test dersinin amaçları nelerdir</h3>
								<ul class="no-default">
									<li>Siz ve çocuğunuz yeni öğretmenleri ve öğretim yöntemleri ile tanışacaksınız.</li>
									<li>Öğretmen, ileriki derslerin nasıl yapılandırılacağına dair planını paylaşacak.</li>
								</ul>
						<?php } ?>	
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="lesson-will-show">
				<div class="container">
					<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<div class="head">
						<h2>Get an honest assessment of your child’s<br>maths knowledge with our test lesson</h2>
					</div>
					<div class="row space-between">
						<div class="col">
							<p>Receive a comprehensive review of your child's maths knowledge to see if distance learning may have affected their understanding.</p>
						</div>
						<div class="col">
							<p>Learn specific topics that your child will need to master to move forward with the school curriculum.</p>
						</div>
						<div class="col">
							<p>Develop an individualised study plan to address any knowledge gaps before the start of the next school year.</p>
						</div>
						<div class="col">
							<p>Show your child that studying maths can be fun, engaging, and stress-free. </p>
						</div>
					</div>
						<?php break;
                         case 'tr': ?>
							<div class="head">
						<h2>Test dersimizle çocuğunuzun matematik bilgisine dair dürüst bir değerlendirme alın.</h2>
					</div>
					<div class="row space-between">
						<div class="col">
							<p>Uzaktan öğrenmenin çocuğunuzun anlayışını etkileyip etkilemediğini görmek için çocuğunuzun matematik bilgisine dair kapsamlı bir değerlendirme alın.</p>
						</div>
						<div class="col">
							<p>Okul müfredatı ile ilerlemek için çocuğunuzun hakim olması gereken belirli konuları öğrenin.</p>
						</div>
						<div class="col">
							<p>Bir sonraki okul yılı başlamadan önce herhangi bir bilgi boşluğunu gidermek için bireyselleştirilmiş bir çalışma planı geliştirin.</p>
						</div>
						<div class="col">
							<p>Çocuğunuza matematik öğrenmenin eğlenceli, çekici ve stresiz olabileceğini gösterin. </p>
						</div>
					</div>
						<?php } ?>
					
				</div>
			</div>

			<div class="after-lesson">
				<div class="container">
					<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<h3>After the lesson, you will receive a detailed report<br>from the teacher via Email, including:</h3>
						<?php break;
                         case 'tr': ?>
							<h3>Ders sonrasında, öğretmenden aşağıdakileri içeren detaylı bir rapor alacaksınız:</h3>
						<?php } ?>	
					<div class="row space-between vertical-aligned">
						<div class="col">
							<div class="lesson-advices">
								<ul class="no-default">
									<li>
										<div class="icon">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M12 15.4L8.24 17.67L9.24 13.39L5.92 10.51L10.3 10.13L12 6.1L13.71 10.14L18.09 10.52L14.77 13.4L15.77 17.68L12 15.4Z" fill="white" />
												<path d="M22 9.24L14.81 8.62L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27L18.18 21L16.55 13.97L22 9.24ZM12 15.4L8.24 17.67L9.24 13.39L5.92 10.51L10.3 10.13L12 6.1L13.71 10.14L18.09 10.52L14.77 13.4L15.77 17.68L12 15.4Z" fill="#FBB231" />
											</svg>

										</div>
										<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<p>An assessment of your child’s maths strengths</p>
						<?php break;
                         case 'tr': ?>
							<p>Çocuğunuzun matematikteki güçlü yönlerinin değerlendirilmesi</p>
						<?php } ?>	
										
									</li>
									<li>
										<div class="icon">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4ZM15.5 8C16.33 8 17 8.67 17 9.5C17 10.33 16.33 11 15.5 11C14.67 11 14 10.33 14 9.5C14 8.67 14.67 8 15.5 8ZM8.5 8C9.33 8 10 8.67 10 9.5C10 10.33 9.33 11 8.5 11C7.67 11 7 10.33 7 9.5C7 8.67 7.67 8 8.5 8ZM15.45 17.5C14.75 16.31 13.48 15.5 12 15.5C10.52 15.5 9.24 16.31 8.55 17.5H6.88C7.68 15.45 9.67 14 12 14C14.33 14 16.32 15.45 17.12 17.5H15.45V17.5Z" fill="white" />
												<path d="M15.5 11C16.3284 11 17 10.3284 17 9.5C17 8.67157 16.3284 8 15.5 8C14.6716 8 14 8.67157 14 9.5C14 10.3284 14.6716 11 15.5 11Z" fill="#EC1C2E" />
												<path d="M8.5 11C9.32843 11 10 10.3284 10 9.5C10 8.67157 9.32843 8 8.5 8C7.67157 8 7 8.67157 7 9.5C7 10.3284 7.67157 11 8.5 11Z" fill="#EC1C2E" />
												<path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20ZM12 14C9.67 14 7.68 15.45 6.88 17.5H8.55C9.24 16.31 10.52 15.5 12 15.5C13.48 15.5 14.75 16.31 15.45 17.5H17.12C16.32 15.45 14.33 14 12 14V14Z" fill="#EC1C2E" />
											</svg>
										</div>
										<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<p>Knowledge gaps that need attention</p>
						<?php break;
                         case 'tr': ?>
							<p>Dikkat edilmesi gereken bilgi eksiklikleri</p>
						<?php } ?>	
										
									</li>
									<li>
										<div class="icon">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g opacity="0.3">
													<path opacity="0.3" d="M6.71 18.71C6.43 18.99 4.54 19.47 4.54 19.47C4.54 19.47 5.01 17.59 5.3 17.3C5.47 17.11 5.72 17 6 17C6.55 17 7 17.45 7 18C7 18.28 6.89 18.53 6.71 18.71ZM7.41 10.83L5.5 10.01L7.47 8.03999L8.91 8.32999C8.34 9.15999 7.83 10.03 7.41 10.83ZM13.99 18.5L13.17 16.59C13.97 16.17 14.84 15.66 15.66 15.09L15.95 16.53L13.99 18.5ZM19.99 4.00999C19.99 4.00999 16.44 3.31999 11.76 7.99999C10.44 9.31999 9.36 11.38 9.03 12.04L11.96 14.97C12.61 14.65 14.67 13.57 16 12.24C20.68 7.55999 19.99 4.00999 19.99 4.00999ZM15 11C13.9 11 13 10.1 13 8.99999C13 7.89999 13.9 6.99999 15 6.99999C16.1 6.99999 17 7.89999 17 8.99999C17 10.1 16.1 11 15 11Z" fill="white" />
												</g>
												<path d="M6 15C5.17 15 4.42 15.34 3.88 15.88C2.7 17.06 2 22 2 22C2 22 6.94 21.3 8.12 20.12C8.66 19.58 9 18.83 9 18C9 16.34 7.66 15 6 15ZM6.71 18.71C6.43 18.99 4.54 19.47 4.54 19.47C4.54 19.47 5.01 17.59 5.3 17.3C5.47 17.11 5.72 17 6 17C6.55 17 7 17.45 7 18C7 18.28 6.89 18.53 6.71 18.71ZM17.42 13.65C23.78 7.28999 21.66 2.33999 21.66 2.33999C21.66 2.33999 16.71 0.219994 10.35 6.57999L7.86 6.07999C7.21 5.94999 6.53 6.15999 6.05 6.62999L2 10.69L7 12.83L11.17 17L13.31 22L17.36 17.95C17.83 17.48 18.04 16.8 17.91 16.14L17.42 13.65ZM7.41 10.83L5.5 10.01L7.47 8.03999L8.91 8.32999C8.34 9.15999 7.83 10.03 7.41 10.83ZM13.99 18.5L13.17 16.59C13.97 16.17 14.84 15.66 15.66 15.09L15.95 16.53L13.99 18.5ZM16 12.24C14.68 13.56 12.62 14.64 11.96 14.97L9.03 12.04C9.35 11.39 10.43 9.32999 11.76 7.99999C16.44 3.31999 19.99 4.00999 19.99 4.00999C19.99 4.00999 20.68 7.55999 16 12.24ZM15 11C16.1 11 17 10.1 17 8.99999C17 7.89999 16.1 6.99999 15 6.99999C13.9 6.99999 13 7.89999 13 8.99999C13 10.1 13.9 11 15 11Z" fill="#6536D6" />
											</svg>
										</div>
										<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<p>Their teacher’s expert guidance on your child’s education</p>
						<?php break;
                         case 'tr': ?>
							<p>Çocuğunuzun eğitimi hakkında öğretmenlerinin uzman rehberliği</p>
						<?php } ?>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="result-image">
								<?php if (ICL_LANGUAGE_CODE == 'gb') :  ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/diagnostic_result_eng.jpg" alt="diagn" />
								<?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/diagnostic_result_eng.jpg" alt="diagn" />
								<?php else :  ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/vader-is-bad.jpg" alt="diagn" />
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="popular-questions">
				<div class="container">
					<div class="row space-between">
						<div class="col">
							<div class="block">
								<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<h3>Can parents be present at the lesson?</h3>
								<ul class="no-default">
									<li>Yes - we encourage it. As a school, we want you to have confidence in your child’s new teacher.</li>
								</ul>
						<?php break;
                         case 'tr': ?>
							<h3>Ders sırasında ebeveynler bulunabilir mi?</h3>
								<ul class="no-default">
									<li>Evet - bunu teşvik ediyoruz. Bir okul olarak, çocuğunuzun yeni öğretmenine güven duymanızı istiyoruz.</li>
								</ul>
						<?php } ?>	
								
							</div>
						</div>
						<div class="col">
							<div class="block">
								<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<h3>Is there a cost for this test lesson?</h3>
								<ul class="no-default">
									<li>Yes, it costs GBP 19.</li>
								</ul>
						<?php break;
                         case 'tr': ?>
							<h3>Bu test dersi için bir ücret var mı?</h3>
								<ul class="no-default">
									<li>Evet, 190 TRY tutarındadır.</li>
								</ul>
						<?php } ?>	
								
							</div>
						</div>
						<div class="col">
							<div class="block">
								<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<h3>Why do other schools offer the first lesson for free?</h3>
								<ul class="no-default">
									<li>While other schools may use the first lesson as a sales pitch, we believe in providing a valuable, standalone learning experience. </li>
									<li>Our sales are handled by dedicated managers, while our teachers are solely dedicated to teaching their students.</li>
								</ul>
						<?php break;
                         case 'tr': ?>
							<h3>Diğer okullar ilk dersi neden ücretsiz sunuyor?</h3>
								<ul class="no-default">
									<li>Diğer okullar ilk dersi bir satış teklifi olarak kullanabilirken, biz değerli ve bağımsız bir öğrenme deneyimi sunmaya inanıyoruz.</li>
									<li>Satış işlemlerimiz özel müdürler tarafından yürütülürken, öğretmenlerimiz yalnızca öğrencilerine öğretmeye adanmıştır.</li>
								</ul>
						<?php } ?>	
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="cta-section">
					<?php switch (ICL_LANGUAGE_CODE) {
						 case 'gb':
                         case 'en':	?>
							<h2>Say goodbye to your child’s maths-phobia<br>with the personal attention of our teachers </h2>
					<strong>Let’s identify where your child needs maths support,<br>and set up a plan to build their confidence. </strong><br>
					<a href="<?php echo get_page_link('11079'); ?>" class="button">Book a test lesson</a>
						<?php break;
                         case 'tr': ?>
							<h2>Öğretmenlerimizin kişisel ilgisiyle çocuğunuzun matematik fobisine veda edin.</h2>
					<strong>Haydi çocuğunuzun matematikte desteğe ihtiyaç duyduğu alanları belirleyelim ve onların özgüvenini artırmak için bir plan oluşturalım.</strong><br>
					<a href="" class="button main-menu-popup">Deneme dersi ayırt</a>
						<?php } ?>	
				</div>
			</div>

		</div><!-- page name -->
	</div><!-- inner page -->

<?php endwhile; ?>

<?php get_footer(); ?>