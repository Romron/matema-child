<?php if ( have_rows( 'blok_shho_rozgortatsya' ) ) : ?>

<div class="switchblock-section">
    <div class="container">
	<?php if ( !is_page_template( 'page-switchblock.php' ) ) {?>
        <div class="two-blocks-flex">
         <div class="single-flex-block">
			<div class="two-blocks-img"><img src="/wp-content/uploads/2023/10/task-list.png" width="90" height="90" alt="task list" /> </div>
				<div class="two-blocks-text"><h4>42 теми</h4>
				для підготовки<br>
				до НМТ з математики
				</div>
		</div>
		 <div class="single-flex-block">
		   <div class="two-blocks-img"><img src="/wp-content/uploads/2023/10/clock.png" width="90" height="90" alt="clock" /> </div>
				<div class="two-blocks-text"><h4>63 години</h4>
				для проходження <br>
				всіх тем та тестів
				</div>
		</div>
		</div>
	<?php } ?>
        <div class="row">
        <div class="accordeon-bloc clear">
            <?php while ( have_rows( 'blok_shho_rozgortatsya' ) ) : the_row(); ?>
                
				<?php if (get_sub_field('zagolovok_zagalnogo_bloku_iz_zobrazhennyam')) {?>
					<div class="purple-tab">
						<div class="purple-backg"></div>
						<?php $image = get_sub_field('zobrazhennya_fioletovogo_bloku');
						if( $image ) {
							$alt = $image['alt'];
						?>
							<div class="pupr-img"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($alt); ?>" /></div>
						<?php } ?>
						<div class="pupr-title"><?php the_sub_field( 'zagolovok_zagalnogo_bloku_iz_zobrazhennyam' ); ?></div>
					</div>
				<?php } ?>
				<div class="tab">
					<input id="<?php the_sub_field( 'identifiant' );/*TO MAKE OPEN: checked*/ ?>" type="checkbox" name="tabs">
					<label for="<?php the_sub_field( 'identifiant' ); ?>"><?php the_sub_field( 'zagolovok_bloku' ); ?></label>
					<div class="tab-content">
					<?php $image = get_sub_field('youtube');
						if( $image ) {
							$alt = $image['alt'];
						?>
					<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
						<div class="video-intoduction">
						<div class="container">
							<div class="teaser">
                 <div class="video-thumb embed embed-video" onclick="playVideo1(this)" data-video-url="<?php the_sub_field('youtube_url'); ?>" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
                     <iframe src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     <div class="play-button">
                         <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M5.7975 4.06678L0.5775 0.959902C0.51375 0.922402 0.448125 0.899902 0.373125 0.899902C0.16875 0.899902 0.00187497 1.06865 0.00187497 1.2749H0V7.7249H0.00187497C0.00187497 7.93115 0.16875 8.0999 0.373125 8.0999C0.45 8.0999 0.51375 8.07365 0.583125 8.03615L5.7975 4.93303C5.92125 4.8299 6 4.67428 6 4.4999C6 4.32553 5.92125 4.17178 5.7975 4.06678Z" fill="white" />
                         </svg>
                         Посмотреть
                     </div>
                 </div>
             </div>
         </div>
     </div>
 <?php elseif (ICL_LANGUAGE_CODE == 'pl') :  ?>

    <div class="video-intoduction">
         <div class="container">
             <div class="teaser">
                 <div class="video-thumb embed embed-video" onclick="playVideo1(this)" data-video-url="<?php the_sub_field('youtube_url'); ?>" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
                     <iframe src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     <div class="play-button">
                         Zobacz
                         <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M5.7975 4.06678L0.5775 0.959902C0.51375 0.922402 0.448125 0.899902 0.373125 0.899902C0.16875 0.899902 0.00187497 1.06865 0.00187497 1.2749H0V7.7249H0.00187497C0.00187497 7.93115 0.16875 8.0999 0.373125 8.0999C0.45 8.0999 0.51375 8.07365 0.583125 8.03615L5.7975 4.93303C5.92125 4.8299 6 4.67428 6 4.4999C6 4.32553 5.92125 4.17178 5.7975 4.06678Z" fill="white" />
                         </svg>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 <?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>

    <div class="video-intoduction">
         <div class="container">
             <div class="teaser">
                 <div class="video-thumb embed embed-video" onclick="playVideo1(this)" data-video-url="<?php the_sub_field('youtube_url'); ?>" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
                     <iframe src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     <div class="play-button">
                         Watch
                         <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M5.7975 4.06678L0.5775 0.959902C0.51375 0.922402 0.448125 0.899902 0.373125 0.899902C0.16875 0.899902 0.00187497 1.06865 0.00187497 1.2749H0V7.7249H0.00187497C0.00187497 7.93115 0.16875 8.0999 0.373125 8.0999C0.45 8.0999 0.51375 8.07365 0.583125 8.03615L5.7975 4.93303C5.92125 4.8299 6 4.67428 6 4.4999C6 4.32553 5.92125 4.17178 5.7975 4.06678Z" fill="white" />
                         </svg>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 <?php else : ?>
    
     <div class="video-intoduction">
         <div class="container">
             <div class="teaser">
                 <div class="video-thumb embed embed-video" onclick="playVideo1(this)" data-video-url="<?php the_sub_field('youtube_url'); ?>" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
                     <iframe src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     <div class="play-button">
                         Подивитись
                         <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M5.7975 4.06678L0.5775 0.959902C0.51375 0.922402 0.448125 0.899902 0.373125 0.899902C0.16875 0.899902 0.00187497 1.06865 0.00187497 1.2749H0V7.7249H0.00187497C0.00187497 7.93115 0.16875 8.0999 0.373125 8.0999C0.45 8.0999 0.51375 8.07365 0.583125 8.03615L5.7975 4.93303C5.92125 4.8299 6 4.67428 6 4.4999C6 4.32553 5.92125 4.17178 5.7975 4.06678Z" fill="white" />
                         </svg>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 <?php endif; ?>
 <?php } ?>
					
					
					
					<p><?php the_sub_field( 'vmist' ); ?></p>
    </div>
</div>
            <?php endwhile; ?>
        </div>
		<style>
		.accordeon-bloc input {
    position: absolute;
    opacity: 0;
    z-index: -1;
}
.accordeon-bloc .tab {margin-bottom: 30px;padding: 10px 20px 0;background-color: white;border-radius: 30px;}
.accordeon-bloc .tab-content {padding-top: 10px;}
.accordeon-bloc .tab label {font-size: 20px;font-weight: 600;}
.accordeon-bloc .tab label:before {color: #6536D6; content: "\203A";margin-right: 6px;display: inline-block;font-size: 26px;transition: all .35s;}
.accordeon-bloc .tab-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height .35s;
}

/* :checked */
.accordeon-bloc .tab input:checked ~ .tab-content {max-height: 1000em;padding-bottom: 30px;padding-left: 17px;}
.accordeon-bloc .tab input:checked ~ label:before {transform: rotate(90deg);}
.switchblock-section .row {display: block;min-width: 100%;}
.switchblock-section iframe {margin: auto;display: block;}
.purple-tab {display: flex;position: relative;max-height: 67px;z-index: 0;margin: 60px 0 45px;}
.pupr-title {font-weight: 700;font-size: 36px;color: rgb(0, 0, 0);}
.switchblock-section .pupr-img, .pupr-title {z-index: 1;margin: 10px 0 16px 30px;}
.switchblock-section .pupr-img img {max-height: 125px;width: auto;height: 125px;margin-top: -38px;}
.purple-backg {overflow: hidden;background-color: rgb(159, 149, 214);border-radius: 60px;width: 100%;height: 100%;position: absolute;}
.two-blocks-flex, .single-flex-block {display: flex;align-items: center;}
.two-blocks-flex {gap: 15vw;justify-content: center;}
.two-blocks-img {margin-right: 5px;}
.two-blocks-text {max-width: 250px;font-weight: 400;font-size: 20px;}
.two-blocks-text h4 {font-weight: 700;font-size: 32px;}
.video-intoduction {max-width: 70%;margin: auto;}
@media (max-width: 920px) {
	.two-blocks-flex {gap: 20px;}
	.two-blocks-text {font-size: 16px;}
	.two-blocks-text h4 {font-size: 26px;}
	.video-intoduction {max-width: 80%;}
}
@media (max-width: 880px) {	
	.pupr-title {font-size: 26px;margin: 22px 0 16px 20px;}
	.video-intoduction .container {padding: 0;}
	.video-intoduction {max-width: 100%;}
}
@media (max-width: 650px) {
	.two-blocks-flex {flex-direction: column;}
}
@media (max-width: 540px) {	
	.switchblock-section .pupr-img, .pupr-title {margin: 5px 0 0 15px;}
	.switchblock-section .pupr-img img {max-height: 70px;margin-top: -20px;}
	.pupr-title {font-size: 20px;margin: 12px 0 10px 15px;}
	.purple-tab {max-height: 48px;margin: 50px 0 25px;}
}
@media (max-width: 360px) {	
	.switchblock-section .pupr-img {display: none;}
}
		</style>		   
 <script>
var videoActive;function playVideo1(element){if(videoActive){stopVideo();}
var videoUrl=element.dataset.videoUrl;var vParam=videoUrl.split('v=');var videoId=vParam[1].includes('&')?vParam[1].substring(0,vParam[1].indexOf('&')):vParam[1];var embedUrl='https://www.youtube.com/embed/'+
videoId+'?rel=0&controls=1&showinfo=0&autoplay=1&start=0';var figure=element.querySelector('figure');var iframe=element.querySelector('iframe');element.classList.add('active');iframe.src=embedUrl;videoActive=element;}</script>
        </div>
    </div>
</div>
<?php endif; ?>