<div class="desktop-show">
    <div class="media-about-us">
        <div class="head">

            <?php if(get_field('media_title')): ?>
                <h2><?php echo (get_field('media_title')); ?></h2>
            <?php endif; ?>
        </div>
        <div class="container">
		<div class="row">
            <?php switch (ICL_LANGUAGE_CODE) {
                        case 'ua':  ?>
                    <?php if (have_rows('media_about_us', 7)) {
						while (have_rows('media_about_us', 7)) : the_row(); ?>
                        <div class="col">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
					}
                    break;
						case 'pl':  ?>
                    <?php if (have_rows('media_about_us', 1489)) {
						while (have_rows('media_about_us', 1489)) : the_row(); ?>
                        <div class="col">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
					}
                    break;
                  case 'en': ?>
                    <?php if (have_rows('media_about_us', 9656)) {
						while (have_rows('media_about_us', 9656)) : the_row(); ?>
                        <div class="col">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
					}
					break;
                   case 'gb':  ?>
                    <?php if (have_rows('media_about_us', 13341)) { 
					while (have_rows('media_about_us', 13341)) : the_row(); ?>
                        <div class="col">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
					}
                    break;
                   case 'tr':  ?>
                    <?php if (have_rows('media_about_us', 109077)) {
						while (have_rows('media_about_us', 109077)) : the_row(); ?>
                        <div class="col">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
					}
					 break;
            default: ?>
                    <?php if (have_rows('media_about_us', 7)) {
						while (have_rows('media_about_us', 7)) : the_row(); ?>
                        <div class="col">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
					}  
                }?>
				
				</div>
        </div>
    </div>
</div>

<div class="mobile-show">
    <div class="media-about-us">
        <div class="head">
            <?php if(get_field('media_title')){ ?>
                <h2><?php echo (get_field('media_title')); ?></h2>
            <?php } ?>
        </div>
		<div class="swiper mediaAboutUs">
                <div class="swiper-wrapper">
		<?php switch (ICL_LANGUAGE_CODE) {
                        case 'ua':  ?>
                    <?php if (have_rows('media_about_us', 7)) { 
						while (have_rows('media_about_us', 7)) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
                    } ?>				
					<?php break;
						case 'pl':  ?>
                    <?php if (have_rows('media_about_us', 1489)) {
						while (have_rows('media_about_us', 1489)) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
                    } 
					break; 
					case 'gb':  ?>
                    <?php if (have_rows('media_about_us', 13341)) {
						while (have_rows('media_about_us', 13341)) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
                    } 
					break;
					case 'en':  ?>
                    <?php if (have_rows('media_about_us', 9656)) {
						while (have_rows('media_about_us', 9656)) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
                    } 
					break;
                   case 'tr':  ?>
				   <?php if (have_rows('media_about_us', 109077)) {
						while (have_rows('media_about_us', 109077)) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
                    } 
					break;
					default: ?>
                    <?php if (have_rows('media_about_us', 7)) {
						while (have_rows('media_about_us', 7)) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                        </div>
                    <?php endwhile;
                    } ?>
        <?php } ?>
		 </div>
        </div>	
    </div>
</div>