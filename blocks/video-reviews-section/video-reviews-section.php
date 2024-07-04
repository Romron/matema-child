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
        .video-reviews {
            margin-bottom: 0;
            padding: 48px 0;
        }
    </style>
    <div class="video-reviews video-reviews-homepage">
        <div class="head">
            <?php if (get_field('video_title_text')) : ?>
                <h2><?php echo get_field('video_title_text') ?></h2>
            <?php endif; ?>
            <?php if (get_field('video_title_desc')) : ?>
                <p><?php echo get_field('video_title_desc') ?></p>
            <?php endif; ?>
        </div>

        <div class="row">
            <?php $counter = 1;
            if (have_rows('video_reviews', 548)) : while (have_rows('video_reviews', 548)) : the_row(); ?>
                    <div class="col">
                        <div class="video-card">
                            <video controls poster="<?php the_sub_field('video_poster'); ?>">
                                <source src="<?php the_sub_field('video_file'); ?>" type="video/mp4">
                            </video>
                            <div class="video-details">
                                <strong><?php the_sub_field('video_name'); ?></strong>
                                <p><?php the_sub_field('bonus_info'); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php if ($counter == 4) : break;
                    endif; ?>
            <?php $counter++;
                endwhile;
            endif; ?>
        </div>

        <div class="buttons-wrap">
            <a href="<?php echo get_page_link('548'); ?>" class="button">
                <div class="icon margin-left">
                    <?php the_field('text_link_video_review'); ?>
                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                    </svg>
                </div>
            </a>
        </div>
    </div>
<?php } ?>