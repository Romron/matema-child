<?php

/**
 * Packages NMT Block Template
 */
if ($is_preview) {
    if (isset($block['data']['gutenberg_preview_image'])) {
        echo '<img src="' . get_theme_file_uri() . esc_url($block['data']['gutenberg_preview_image']) . '" style="max-width:100%; height:auto;">';
    }
} else {
?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap');

        .packages-nmt-section {
            position: relative;
            margin: <?php echo !empty($args['margin']) ? $args['margin'] : '40px 0 50px' ?>;
            padding: 40px 72px 68px;
            border-radius: 10px;
            background: linear-gradient(137deg, rgba(251, 252, 187, 0.40) 0%, rgba(240, 140, 140, 0.40) 104.03%), #F7CC79;
        }

        .packages-nmt-section .girl {
            position: absolute;
            right: -88px;
            bottom: 0;
            width: 505px;
            height: 651px;
            background-image: url('<?php echo get_theme_file_uri() ?>/blocks/packages-nmt-section/assets/img/girl.png');
            background-repeat: no-repeat;
            background-position: 0 0;
            background-size: contain;
        }

        .packages-nmt-section .title {
            max-width: 605px;
            margin-bottom: 8px;
            color: #222;
            font-family: "Rubik", sans-serif;
            font-size: 40px;
            font-style: normal;
            font-weight: 600;
            line-height: 120%;
            text-transform: uppercase;
        }

        .packages-nmt-section .description {
            width: 526px;
            color: #333A40;
            font-family: "Inter", sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: 150%;
        }

        .packages-nmt-section .list {
            justify-content: start;
            margin-top: 40px;
        }

        .packages-nmt-section .row .col {
            width: 257px;
        }

        .packages-nmt-section .row .col+.col {
            margin-left: 18px;
        }

        .packages-nmt-section .plan {
            display: flex;
            flex-direction: column;
            padding: 30px 20px;
            min-height: 384px;
            height: 100%;
        }

        .packages-nmt-section .plan.best-plan-block {
            background-color: #222222;
        }

        .packages-nmt-section .plan .plan-description {
            margin-bottom: auto;
        }

        .packages-nmt-section .plan .notice {
            margin-top: auto;
            margin-bottom: -5px;
            font-size: 14px;
            font-weight: 400;
            line-height: 120%;
            letter-spacing: 0%;
            text-align: left;
        }

        .packages-nmt-section .plan .price h2 {
            font-size: 52px;
        }

        .packages-nmt-section .plan .price span {
            display: inline-block;
            margin-left: -10px;
            color: #FFF;
            font-family: "Rubik", sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 120%;
        }

        .packages-nmt-section .plan .button {
            margin-top: 2px;
        }

        .packages-nmt-section .plan.best-plan-block .button {
            background-color: #6536D6;
            color: #fff;
        }

        @media screen and (max-width: 991px) {
            .packages-nmt-section {
                padding-left: 52px;
                padding-right: 52px;
                padding-bottom: 48px;
            }

            .packages-nmt-section .title {
                max-width: 60%;
            }

            .packages-nmt-section .description {
                max-width: 60%;
            }

            .packages-nmt-section .row {
                display: flex !important;
                gap: 24px 18px;
                justify-content: space-between;
            }

            .packages-nmt-section .row .col {
                margin-bottom: 0;
                width: calc(50% - 9px);
            }

            .packages-nmt-section .row .col+.col {
                margin-left: 0;
            }

            .packages-nmt-section .plan .button {
                width: 100%;
            }

            .packages-nmt-section .girl {
                top: -62px;
                right: -53px;
                bottom: 0;
                width: 352px;
                height: 384px;
            }
        }

        @media screen and (max-width: 767px) {

            .packages-nmt-section {
                padding: 30px 16px;
            }

            .packages-nmt-section .title {
                max-width: 100%;
                font-size: 28px;
                text-align: center;
            }

            .packages-nmt-section .description {
                display: none;
            }

            .packages-nmt-section .list {
                margin-top: 30px;
            }

            .packages-nmt-section .row {
                gap: 40px;
            }

            .packages-nmt-section .row .col {
                width: 100%;
            }

            .packages-nmt-section .plan {
                min-height: 352px;
            }

            .packages-nmt-section .girl {
                display: none;
            }
        }
    </style>
    <section class="pricing-section packages-nmt-section">
        <h2 class="title">
            <?php the_field('packages_nmt_title') ?>
        </h2>
        <div class="description">
            <?php the_field('packages_nmt_description') ?>
        </div>
        <?php
        if (have_rows('packages_nmt_list')) : ?>
            <div class="row list">

                <?php while (have_rows('packages_nmt_list')) :
                    the_row();
                ?>
                    <div class="item col">
                        <?php $show_arrow = get_sub_field('best_plan'); ?>
                        <div class="plan<?php echo !empty($show_arrow) ? ' best-plan-block' : ''; ?>">
                            <?php if (!empty($show_arrow)) : ?>
                                <div class="best-plan">
                                    <?php the_sub_field('best_plan_text'); ?>
                                </div>
                            <?php endif; ?>
                            <h3>
                                <?php the_sub_field('name'); ?>
                            </h3>
                            <div class="plan-description">
                                <p>
                                    <?php the_sub_field('description'); ?>
                                </p>
                            </div>
                            <div class="notice">
                                <?php the_sub_field('notice'); ?>
                            </div>
                            <!-- Ціна в ГРН -->
                            <div class="price">
                                <h2>
                                    <?php the_sub_field('price'); ?>
                                    <span>
                                        <?php the_sub_field('currency'); ?>
                                    </span>
                                </h2>
                            </div>
                            <span class="button main-menu-popup button-plan-selection button-package popmake-66755" id="<?php echo the_sub_field('cta_extra_class'); ?>">
                                <?php the_sub_field('cta'); ?>
                            </span>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="girl"></div>
    </section>
<?php } ?>