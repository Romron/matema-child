<?php

/**
 * Template Name: Оплата абонементів
 */
get_header(); ?>

<div class="main-page">
    <div class="start-section">
        <div class="container">
                <?php the_content(); ?>
                <div class="trustpilot-widget">
                    <?php
                    $trustpilot_url = '';
                    $trustpilot_text = '';

                    switch (ICL_LANGUAGE_CODE) {
                        case 'pl':
                            $trustpilot_url = 'https://pl.trustpilot.com/review/mathema.me';
                            break;

                        case 'en':
							break;
                        case 'gb':
                            $trustpilot_url = 'https://www.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'de':
                            $trustpilot_url = 'https://de.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'fr':
                            $trustpilot_url = 'https://fr.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'es':
                            $trustpilot_url = 'https://es.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'it':
                            $trustpilot_url = 'https://it.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'pt':
                            $trustpilot_url = 'https://pt.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'nl':
                            $trustpilot_url = 'https://nl.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'cs':
                            $trustpilot_url = 'https://cs.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'hu':
                            $trustpilot_url = 'https://hu.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'ro':
                            $trustpilot_url = 'https://ro.trustpilot.com/review/mathema.me?utm_medium=trustbox&utm_source=MicroReviewCount';
                            break;

                        case 'tr':
							$trustpilot_url = 'https://trustpilot.com/review/mathema.me';
                            break;
                        default:
                            $trustpilot_url = 'https://trustpilot.com/review/mathema.me';
                            break;
                    }
                    ?>
                    <?php if (get_field('text_for_trustpilot')) : ?>
                        <a href="<?php echo $trustpilot_url; ?>" target="_blank" rel="noopener noreferrer" class="trustpilot-link">
                            <?php echo (get_field('text_for_trustpilot')); ?>
                            <div class="" style="text-align: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1132.8 278.2" width="120">
                                    <path d="M297.7 98.6h114.7V120h-45.1v120.3h-24.8V120h-44.9V98.6zm109.8 39.1h21.2v19.8h.4c.7-2.8 2-5.5 3.9-8.1 1.9-2.6 4.2-5.1 6.9-7.2 2.7-2.2 5.7-3.9 9-5.3 3.3-1.3 6.7-2 10.1-2 2.6 0 4.5.1 5.5.2s2 .3 3.1.4v21.8c-1.6-.3-3.2-.5-4.9-.7-1.7-.2-3.3-.3-4.9-.3-3.8 0-7.4.8-10.8 2.3-3.4 1.5-6.3 3.8-8.8 6.7-2.5 3-4.5 6.6-6 11s-2.2 9.4-2.2 15.1v48.8h-22.6V137.7zm164 102.6h-22.2V226h-.4c-2.8 5.2-6.9 9.3-12.4 12.4-5.5 3.1-11.1 4.7-16.8 4.7-13.5 0-23.3-3.3-29.3-10s-9-16.8-9-30.3v-65.1H504v62.9c0 9 1.7 15.4 5.2 19.1 3.4 3.7 8.3 5.6 14.5 5.6 4.8 0 8.7-.7 11.9-2.2 3.2-1.5 5.8-3.4 7.7-5.9 2-2.4 3.4-5.4 4.3-8.8.9-3.4 1.3-7.1 1.3-11.1v-59.5h22.6v102.5zm38.5-32.9c.7 6.6 3.2 11.2 7.5 13.9 4.4 2.6 9.6 4 15.7 4 2.1 0 4.5-.2 7.2-.5s5.3-1 7.6-1.9c2.4-.9 4.3-2.3 5.9-4.1 1.5-1.8 2.2-4.1 2.1-7-.1-2.9-1.2-5.3-3.2-7.1-2-1.9-4.5-3.3-7.6-4.5-3.1-1.1-6.6-2.1-10.6-2.9-4-.8-8-1.7-12.1-2.6-4.2-.9-8.3-2.1-12.2-3.4-3.9-1.3-7.4-3.1-10.5-5.4-3.1-2.2-5.6-5.1-7.4-8.6-1.9-3.5-2.8-7.8-2.8-13 0-5.6 1.4-10.2 4.1-14 2.7-3.8 6.2-6.8 10.3-9.1 4.2-2.3 8.8-3.9 13.9-4.9 5.1-.9 10-1.4 14.6-1.4 5.3 0 10.4.6 15.2 1.7 4.8 1.1 9.2 2.9 13.1 5.5 3.9 2.5 7.1 5.8 9.7 9.8 2.6 4 4.2 8.9 4.9 14.6h-23.6c-1.1-5.4-3.5-9.1-7.4-10.9-3.9-1.9-8.4-2.8-13.4-2.8-1.6 0-3.5.1-5.7.4-2.2.3-4.2.8-6.2 1.5-1.9.7-3.5 1.8-4.9 3.2-1.3 1.4-2 3.2-2 5.5 0 2.8 1 5 2.9 6.7 1.9 1.7 4.4 3.1 7.5 4.3 3.1 1.1 6.6 2.1 10.6 2.9 4 .8 8.1 1.7 12.3 2.6 4.1.9 8.1 2.1 12.1 3.4 4 1.3 7.5 3.1 10.6 5.4 3.1 2.3 5.6 5.1 7.5 8.5 1.9 3.4 2.9 7.7 2.9 12.7 0 6.1-1.4 11.2-4.2 15.5-2.8 4.2-6.4 7.7-10.8 10.3-4.4 2.6-9.4 4.6-14.8 5.8-5.4 1.2-10.8 1.8-16.1 1.8-6.5 0-12.5-.7-18-2.2-5.5-1.5-10.3-3.7-14.3-6.6-4-3-7.2-6.7-9.5-11.1-2.3-4.4-3.5-9.7-3.7-15.8H610zm74.6-69.7h17.1v-30.8h22.6v30.8h20.4v16.9h-20.4v54.8c0 2.4.1 4.4.3 6.2.2 1.7.7 3.2 1.4 4.4.7 1.2 1.8 2.1 3.3 2.7 1.5.6 3.4.9 6 .9 1.6 0 3.2 0 4.8-.1 1.6-.1 3.2-.3 4.8-.7v17.5c-2.5.3-5 .5-7.3.8-2.4.3-4.8.4-7.3.4-6 0-10.8-.6-14.4-1.7-3.6-1.1-6.5-2.8-8.5-5-2.1-2.2-3.4-4.9-4.2-8.2-.7-3.3-1.2-7.1-1.3-11.3v-60.5h-17.1v-17.1zm76.1 0h21.4v13.9h.4c3.2-6 7.6-10.2 13.3-12.8 5.7-2.6 11.8-3.9 18.5-3.9 8.1 0 15.1 1.4 21.1 4.3 6 2.8 11 6.7 15 11.7 4 5 6.9 10.8 8.9 17.4 2 6.6 3 13.7 3 21.2 0 6.9-.9 13.6-2.7 20-1.8 6.5-4.5 12.2-8.1 17.2-3.6 5-8.2 8.9-13.8 11.9-5.6 3-12.1 4.5-19.7 4.5-3.3 0-6.6-.3-9.9-.9-3.3-.6-6.5-1.6-9.5-2.9-3-1.3-5.9-3-8.4-5.1-2.6-2.1-4.7-4.5-6.5-7.2h-.4v51.2h-22.6V137.7zm79 51.4c0-4.6-.6-9.1-1.8-13.5-1.2-4.4-3-8.2-5.4-11.6-2.4-3.4-5.4-6.1-8.9-8.1-3.6-2-7.7-3.1-12.3-3.1-9.5 0-16.7 3.3-21.5 9.9-4.8 6.6-7.2 15.4-7.2 26.4 0 5.2.6 10 1.9 14.4 1.3 4.4 3.1 8.2 5.7 11.4 2.5 3.2 5.5 5.7 9 7.5 3.5 1.9 7.6 2.8 12.2 2.8 5.2 0 9.5-1.1 13.1-3.2 3.6-2.1 6.5-4.9 8.8-8.2 2.3-3.4 4-7.2 5-11.5.9-4.3 1.4-8.7 1.4-13.2zm39.9-90.5h22.6V120h-22.6V98.6zm0 39.1h22.6v102.6h-22.6V137.7zm42.8-39.1H945v141.7h-22.6V98.6zm91.9 144.5c-8.2 0-15.5-1.4-21.9-4.1-6.4-2.7-11.8-6.5-16.3-11.2-4.4-4.8-7.8-10.5-10.1-17.1-2.3-6.6-3.5-13.9-3.5-21.8 0-7.8 1.2-15 3.5-21.6 2.3-6.6 5.7-12.3 10.1-17.1 4.4-4.8 9.9-8.5 16.3-11.2 6.4-2.7 13.7-4.1 21.9-4.1s15.5 1.4 21.9 4.1c6.4 2.7 11.8 6.5 16.3 11.2 4.4 4.8 7.8 10.5 10.1 17.1 2.3 6.6 3.5 13.8 3.5 21.6 0 7.9-1.2 15.2-3.5 21.8-2.3 6.6-5.7 12.3-10.1 17.1-4.4 4.8-9.9 8.5-16.3 11.2-6.4 2.7-13.7 4.1-21.9 4.1zm0-17.9c5 0 9.4-1.1 13.1-3.2 3.7-2.1 6.7-4.9 9.1-8.3 2.4-3.4 4.1-7.3 5.3-11.6 1.1-4.3 1.7-8.7 1.7-13.2 0-4.4-.6-8.7-1.7-13.1s-2.9-8.2-5.3-11.6c-2.4-3.4-5.4-6.1-9.1-8.2-3.7-2.1-8.1-3.2-13.1-3.2s-9.4 1.1-13.1 3.2c-3.7 2.1-6.7 4.9-9.1 8.2-2.4 3.4-4.1 7.2-5.3 11.6-1.1 4.4-1.7 8.7-1.7 13.1 0 4.5.6 8.9 1.7 13.2 1.1 4.3 2.9 8.2 5.3 11.6 2.4 3.4 5.4 6.2 9.1 8.3 3.7 2.2 8.1 3.2 13.1 3.2zm58.4-87.5h17.1v-30.8h22.6v30.8h20.4v16.9h-20.4v54.8c0 2.4.1 4.4.3 6.2.2 1.7.7 3.2 1.4 4.4.7 1.2 1.8 2.1 3.3 2.7 1.5.6 3.4.9 6 .9 1.6 0 3.2 0 4.8-.1 1.6-.1 3.2-.3 4.8-.7v17.5c-2.5.3-5 .5-7.3.8-2.4.3-4.8.4-7.3.4-6 0-10.8-.6-14.4-1.7-3.6-1.1-6.5-2.8-8.5-5-2.1-2.2-3.4-4.9-4.2-8.2-.7-3.3-1.2-7.1-1.3-11.3v-60.5h-17.1v-17.1z" fill="#191919"></path>
                                    <path fill="#00b67a" d="M271.3 98.6H167.7L135.7 0l-32.1 98.6L0 98.5l83.9 61L51.8 258l83.9-60.9 83.8 60.9-32-98.5 83.8-60.9z">
                                    </path>
                                    <path fill="#005128" d="M194.7 181.8l-7.2-22.3-51.8 37.6z"></path>
                                </svg>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
        </div>
        <style>
            .trustpilot-link {
                display: inline-block;
                text-align: center;
                position: relative;
                padding: 20px;
            }

            .trustpilot-logo {
                position: absolute;
                left: 50%;
                bottom: 0;
                transform: translateX(-50%);
            }
			.start-section .container .container {padding: 0;}
        </style>
        <?php if (get_field('cta_button')) : ?>

            <div class="" style="text-align: center; padding-bottom: 30px">
                <?php if (get_field('add_link_class_poppup')) : ?>
                    <span class="button homepage-book-lesson <?php echo esc_attr(get_field('add_link_class_poppup')); ?> light-effect">
                        <?php echo get_field('cta_button'); ?>
                        <div class="icon margin-left">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                            </svg>
                        </div>
                    </span>
                <?php else : ?>
                    <a href="<?php echo esc_url(get_field('link_button_lesson_one')); ?>" class="button homepage-book-lesson light-effect">
                        <?php echo get_field('cta_button'); ?>
                        <div class="icon margin-left">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                            </svg>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

        <?php endif; ?>
    </div>

    <?php

   

    $pricing_block_state = get_field('pricing_block_state');
    if ($pricing_block_state === true) {
        get_template_part('template-parts/pricing-section');
    }

    $packages_nmt_list = get_field('packages_nmt_list');
    if ($packages_nmt_list) {
        switch (ICL_LANGUAGE_CODE) {
                        case 'en':
							break;
                        case 'gb':
                            break;
						case 'tr':
                            break;	
						default:
							get_template_part('template-parts/packages-nmt-section', null, ['margin' => '-20px 0 100px']);
		}					
    }

    $nmt_block_state = get_field('nmt_block_state');
    if ($nmt_block_state === true) {
        get_template_part('template-parts/nmt-timer');
    }


    // Language-specific template parts
    switch (ICL_LANGUAGE_CODE) {
        case 'pl':
            // Include any template parts specific to English language
        case 'en':
            // Include any template parts specific to English language
            break;
        case 'gb':
            // Include any template parts specific to Great Britain
            break;
        case 'de':
            // Include any template parts specific to German language
            break;
        case 'fr':
            // Include any template parts specific to French language
            break;
        case 'es':
            // Include any template parts specific to Spanish language
            break;
        case 'it':
            // Include any template parts specific to Italian language
            break;
        case 'pt':
            // Include any template parts specific to Portuguese language
            break;
        case 'nl':
            // Include any template parts specific to Dutch language
            break;
        case 'cs':
            // Include any template parts specific to Czech language
            break;
        case 'hu':
            // Include any template parts specific to Hungarian language
            break;
        case 'ro':
            // Include any template parts specific to Romanian language
            break;
        case 'tr':
            // Include any template parts specific to Turkish language
            break;
        default:

           

            $tutors_block_state = get_field('tutors_block_state');
            if ($tutors_block_state === true) {
                get_template_part('template-parts/teachers-section');
            }
            break;
    }

    get_footer();
    ?>