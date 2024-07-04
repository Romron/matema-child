      <div class="video-intoduction">
         <div class="container">
             <div class="teaser">
                 <div class="video-thumb embed embed-video" onclick="playVideo(this)" data-video-url="<?php the_field('intro_teaser'); ?>" style="background-image: url('<?php the_field('intro_teaser_image'); ?>');">
                     <iframe src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     <div class="play-button">
						 
				
 <?php					switch (ICL_LANGUAGE_CODE) {
						 case 'ua':?>
							Подивитись
							 <?php break;
                        case 'pl':?>
							Zobacz
							<?php break;
                        case 'ru':?>
							Посмотреть
							<?php break;
                        case 'gb':?>
							Watch
							<?php break;
						case 'tr':?>
							Kol saati
							<?php break;
						case 'en':?>
							Watch
							<?php break;	
						default:?>
							Подивитись
						<?php }?>
						
						<svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M5.7975 4.06678L0.5775 0.959902C0.51375 0.922402 0.448125 0.899902 0.373125 0.899902C0.16875 0.899902 0.00187497 1.06865 0.00187497 1.2749H0V7.7249H0.00187497C0.00187497 7.93115 0.16875 8.0999 0.373125 8.0999C0.45 8.0999 0.51375 8.07365 0.583125 8.03615L5.7975 4.93303C5.92125 4.8299 6 4.67428 6 4.4999C6 4.32553 5.92125 4.17178 5.7975 4.06678Z" fill="white" />
                         </svg>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 
 <script>/*
if(jQuery('input[name="aff_sub"]').length>0){if(getCookie("aff_sub")){jQuery('input[name="aff_sub"]').attr('value',getCookie('aff_sub'));}}
if(jQuery('input[name="utm_source"]').length>0){if(getCookie("utm_source")){jQuery('input[name="utm_source"]').attr('value',getCookie("utm_source"));}}
if(jQuery('input[name="input_14"]').length>0){if(getCookie("aff_sub")){jQuery('input[name="input_14"]').attr('value',getCookie('aff_sub'));}}
if(jQuery('input[name="input_15"]').length>0){if(getCookie("aff_id")){jQuery('input[name="input_15"]').attr('value',getCookie("aff_id"));}}
if(jQuery('input[name="input_16"]').length>0){if(getCookie("utm_source")){jQuery('input[name="input_16"]').attr('value',getCookie("utm_source"));}}*/
var videoActive;function playVideo(element){if(videoActive){stopVideo();}
var videoUrl=element.dataset.videoUrl;var vParam=videoUrl.split('v=');var videoId=vParam[1].includes('&')?vParam[1].substring(0,vParam[1].indexOf('&')):vParam[1];var embedUrl='https://www.youtube.com/embed/'+
videoId+'?rel=0&controls=1&showinfo=0&autoplay=1&start=5';var figure=element.querySelector('figure');var iframe=element.querySelector('iframe');element.classList.add('active');iframe.src=embedUrl;videoActive=element;}
function stopVideo(){var figure=videoActive.querySelector('figure');var iframe=videoActive.querySelector('iframe');videoActive.classList.remove('active');iframe.src='';}</script>