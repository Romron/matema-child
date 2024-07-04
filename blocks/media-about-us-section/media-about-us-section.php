<?php

/**
 * Media About US Block Template
 */
if ($is_preview) {
    if (isset($block['data']['gutenberg_preview_image'])) {
        echo '<img src="' . get_theme_file_uri() . esc_url($block['data']['gutenberg_preview_image']) . '" style="max-width:100%; height:auto;">';
    }
} else {
?>
    <style>
        .media-about-us {
            padding: 80px 0 40px;
        }
    </style>
    <div class="desktop-show">
        <div class="media-about-us">
            <div class="head">
                <?php if (get_field('media_title')) : ?>
                    <h2><?php echo (get_field('media_title')); ?></h2>
                <?php endif; ?>
            </div>
            <div class="container">
                <?php if (ICL_LANGUAGE_CODE == 'pl') :  ?>
                    <div class="row">
                        <?php if (have_rows('media_about_us', 1489)) : while (have_rows('media_about_us', 1489)) : the_row(); ?>
                                <div class="col">
                                    <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                                </div>
                        <?php endwhile;
                        else : endif; ?>
                    </div>
                <?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
                    <div class="row">
                        <?php if (have_rows('media_about_us', 13341)) : while (have_rows('media_about_us', 13341)) : the_row(); ?>
                                <div class="col">
                                    <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                                </div>
                        <?php endwhile;
                        else : endif; ?>
                    </div>
                <?php elseif (ICL_LANGUAGE_CODE == 'en') :  ?>
                    <div class="row">
                        <?php if (have_rows('media_about_us', 9656)) : while (have_rows('media_about_us', 9656)) : the_row(); ?>
                                <div class="col">
                                    <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                                </div>
                        <?php endwhile;
                        else : endif; ?>
                    </div>
                <?php else : ?>
                    <div class="row">
                        <?php if (have_rows('media_about_us', 7)) : while (have_rows('media_about_us', 7)) : the_row(); ?>
                                <div class="col">
                                    <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                                </div>
                        <?php endwhile;
                        else : endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="mobile-show">
        <div class="media-about-us">
            <div class="head">
                <?php if (get_field('media_title')) : ?>
                    <h2><?php echo (get_field('media_title')); ?></h2>
                <?php endif; ?>
            </div>

            <?php if (ICL_LANGUAGE_CODE == 'pl') :  ?>
                <div class="swiper mediaAboutUs">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('media_about_us', 1489)) : while (have_rows('media_about_us', 1489)) : the_row(); ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                                </div>
                        <?php endwhile;
                        else : endif; ?>
                    </div>
                </div>
            <?php elseif (ICL_LANGUAGE_CODE == 'gb') :  ?>
                <div class="swiper mediaAboutUs">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('media_about_us', 11008)) : while (have_rows('media_about_us', 11008)) : the_row(); ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                                </div>
                        <?php endwhile;
                        else : endif; ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="swiper mediaAboutUs">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('media_about_us', 7)) : while (have_rows('media_about_us', 7)) : the_row(); ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_sub_field('logo'); ?>" alt="media-logo" />
                                </div>
                        <?php endwhile;
                        else : endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php } ?>