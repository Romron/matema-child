<?php

/**
 * Template Name: ЗНО - Бескоштовна пiдготовка
 */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

	<div class="inner-page no-padding">
		<div class="page-wrap page-zno-free">

			<div class="page-hero">
				<div class="container">
					<div class="wrap">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>	
				</div>	
			</div>
				
						<div class="six-blocs show-flex">
							<h2>Як користуватися курсом?</h2>
							<div class="flex-parent">
								<div class="flex-child">
									<h4>Крок 1</h4>
									<p>Перейдіть <a href="https://www.mathema.me/kurs-pidhotovky-do-nmt-z-matematyky/">на сторінку курсу</a></p>
								</div>
								<div class="flex-child">
									<h4>Крок 2</h4>
									<p>Збережіть сторінку в закладках, щоб не загубити</p>
								</div>
								<div class="flex-child">
									<h4>Крок 3</h4>
									<p>Натисніть на назву теми</p>
								</div>
								<div class="flex-child">
									<h4>Крок 4</h4>
									<p>Подивіться запис лекції та законспектуйте основні тези</p>
								</div>
								<div class="flex-child">
									<h4>Крок 5</h4>
									<p>Натисніть “Пройти тест” і дізнайтеся чи засвоїли тему</p>
								</div>
								<div class="flex-child">
									<h4>Крок 6</h4>
									<p>Поверніться до початкової сторінки і перейдіть до наступної теми</p>
								</div>
							</div>
						</div>
						<div class="buttons-wrap">
							<a href="https://www.mathema.me/kurs-pidhotovky-do-nmt-z-matematyky/" class="button light-effect brown-button">
								Перейти до курсу
							</a>
						</div>
				
			
			<div class="video-intoduction">
				<div class="container">
					<div class="head">
						<h2>Як виглядає курс?</h2>
							<div class="flex-parent wider-flex">
								<div class="flex-child">
									<h3>42 відеолекції</h3>
									<p>Усі теми є в програмі ЗНО з математики від МОЗ. Лекції проводять професійні репетитори Mathema.</p>
								</div>
								<div class="flex-child">
									<h3>42 тести</h3>
									<p>Після закінчення кожної відеолекції учень може пройти тест, аби закріпити матеріал.</p>
								</div>
								<div class="flex-child">
									<h3>Результати тестів</h3>
									<p>Після завершення тестів учень дізнається чи вдало він його склав і зможе повернутися до лекцій.</p>
								</div>
							</div>	
					</div>
				</div>
			</div>
			<?php get_template_part('template-parts/introduction-section'); ?>


			<div class="why-us-section">
				<div class="container">
					<div class="head">
						<h2>Чим курс від Mathema відрізняється від інших?</h2>
					</div>
					<div class="row">
                         <div class="thetable">
							<table>
							<tr>
								<th></th>
								<th><img src="https://www.mathema.me/wp-content/uploads/2023/11/matema.png" width="81" height="28" alt="mathema" /></th>
								<th>Інші НМТ курси</th>
							</tr>
							<tr>
								<td>Відсутня реєстрація</td>
								<td><img src="https://www.mathema.me/wp-content/uploads/2023/11/yes.png" width="22" height="20" alt="yes" /></td>
								<td><img src="https://www.mathema.me/wp-content/uploads/2023/11/no.png" width="20" height="20" alt="no" /></td>
							</tr>
							<tr>
								<td>Повністю безкоштовний</td>
								<td><img src="https://www.mathema.me/wp-content/uploads/2023/11/yes.png" width="22" height="20" alt="yes" /></td>
								<td><img src="https://www.mathema.me/wp-content/uploads/2023/11/no.png" width="20" height="20" alt="no" /></td>
							</tr>
							<tr>
								<td>Готові тести до кожної теми</td>
								<td><img src="https://www.mathema.me/wp-content/uploads/2023/11/yes.png" width="22" height="20" alt="yes" /></td>
								<td><img src="https://www.mathema.me/wp-content/uploads/2023/11/no.png" width="20" height="20" alt="no" /></td>
							</tr>
							<tr>
								<td>Навчання доступне з будь-якого пристрою</td>
								<td><img src="https://www.mathema.me/wp-content/uploads/2023/11/yes.png" width="22" height="20" alt="yes" /></td>
								<td><img src="https://www.mathema.me/wp-content/uploads/2023/11/no.png" width="20" height="20" alt="no" /></td>
							</tr>
						 </table>
                    </div>
				</div>
				<div class="container">	
					<div class="head">
						<h2>НМТ та ЗНО — в чому різниця?</h2>
					</div>
					<div class="row">
                        <div class="thedifference"><p>До 2022 року випускники українських шкіл складали ЗНО. Це комплекс тестів з різних предметів, які складали окремо один від одного та оцінювали у <strong>200 балів</strong> за кожен. Ці бали враховували при вступі до ЗВО.<br>
							У 2022 Міністерство освіти вирішило обʼєднати усі предмети ЗНО і створити НМТ (Національний мультипредметний тест). У 2024 році НМТ включає <strong>три обовʼязкові предмети</strong>: математику, українську мову та історію України.<br>
							НМТ з математики включає <strong>20 завдань</strong>: 14 тестів, 4 – на встановлення відповідності, 2 – з короткою формою відповіді.</p>
						</div>
                    </div>
				</div>
			</div>
		</div>
			

			<div class="faq-section">
				<div class="container">
					<h2>
						<?php the_field('faq_title'); ?>
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

<?php endwhile; ?>
<style>
.page-zno-free .page-hero {max-width: 747px;}
.six-blocs {max-width: 950px;margin: auto;}
.six-blocs h2 {text-align: left;margin: 40px 20px 30px;font-weight: 600;}
.six-blocs p a {color: white;}
.flex-parent {display: flex;flex-wrap: wrap;justify-content: center;gap: 20px 50px;text-align: center;}
.inner-page p {margin-bottom: 20px;}
.flex-child {flex-basis: 23.5%;background-color: #0070F0;padding: 20px 20px 10px;border-radius: 20px;color: white;}
.flex-child h4 {font-weight: 600;}
.page-zno-free .button.brown-button {background-color: #FFCA6A;color: #112136;margin: 25px 0 20px;}
.page-zno-free .video-intoduction {background-color: #211D4F;padding: 50px 20px;margin-bottom: 0;}
.wider-flex.flex-parent {text-align: left;}
.wider-flex .flex-child {flex-basis: calc(31.5% - 50px);background-color: #6E43D9;}
.why-us-section {background-color: #FBF9F6;padding: 50px 0 80px;}
.page-zno-free .why-us-section .row {margin: 0;}
.why-us-section h2 {max-width: 100%;}
.why-us-section table, .why-us-section .thetable {width: 100%;margin-bottom: 40px;}
.why-us-section th, .why-us-section td {text-align: center;vertical-align: middle;padding: 10px 25px;}
.why-us-section td {background-color: white;}
.page-zno-free .why-us-section strong {display: inline;}
.why-us-section td:first-child {text-align: left;}
@media only screen and (max-width: 1330px) {
	.wider-flex .flex-child {flex-basis: calc(31.5% - 57px);}
	.why-us-section {padding: 50px 20px 80px;}
}
@media only screen and (max-width: 970px) {
	.wider-flex .flex-child {flex-basis: calc(31.5% - 60px);}
}
@media only screen and (max-width: 830px) {
	.flex-parent {gap: 20px;}
}
@media only screen and (max-width: 720px) {
	.flex-child, .wider-flex .flex-child {flex-basis: calc(50% - 50px);}
	.flex-parent {padding: 0 20px;}
	.wider-flex.flex-parent {padding: 0;}
}
@media only screen and (max-width: 510px) {
	.flex-child, .wider-flex .flex-child {flex-basis: 100%;}
	.why-us-section th, .why-us-section td {padding: 7px 5px;}
}
</style>
<?php get_footer(); ?>