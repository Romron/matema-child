<?php

/**
 * Why Dollars section
 */

if ($is_preview) {
    if (isset($block['data']['gutenberg_preview_image'])) {
        echo '<img src="' . get_theme_file_uri() . esc_url($block['data']['gutenberg_preview_image']) . '" style="max-width:100%; height:auto;">';
    }
} else {
?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap');

        .why-dollars-section {
            padding: 58px 0 80px;
        }

        .why-dollars-section .title {
            color: rgb(0, 0, 0);
            font-family: "Rubik", sans-serif;
            font-size: 30px;
            font-weight: 500;
            line-height: 120%;
            letter-spacing: 0%;
            text-align: center;
            margin-bottom: 0;
        }

        .why-dollars-section .content {
            display: flex;
            justify-content: space-between;
            margin-top: 68px;
        }

        .why-dollars-section .image {
            flex-shrink: 0;
            background-image: url('<?php the_field('image'); ?>');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 0 0;
            width: 562px;
            height: 459px;
        }

        .why-dollars-section .list {
            display: flex;
            flex-direction: column;
            row-gap: 20px;
            max-width: 672px;
            list-style: none;
        }

        .why-dollars-section .item {
            border-radius: 10px;
            background: rgb(239, 238, 230);
            padding: 40px;
            color: rgb(51, 58, 64);
            font-family: "Inter", sans-serif;
            font-size: 20px;
            font-weight: 500;
            line-height: 150%;
        }

        @media screen and (max-width: 991px) {
            .why-dollars-section .image {
                display: none;
            }

            .why-dollars-section .content {
                justify-content: center;
                margin-top: 24px;
            }

            .why-dollars-section .list {
                align-items: center;
            }
        }

        @media screen and (max-width: 767px) {
            .why-dollars-section .title {
                font-size: 28px;
            }

            .why-dollars-section .content {
                margin-top: 21px;
            }

            .why-dollars-section .item {
                font-size: 14px;
                padding: 20px;
            }
        }
    </style>
    <section class="why-dollars-section">
        <h4 class="title">
            <?php the_field('title') ?>
        </h4>
        <div class="content">
            <div class="image"></div>
            <?php if (have_rows('explanations')) : ?>
                <ul class="list">
                    <?php
                    while (have_rows('explanations')) :
                        the_row();
                    ?>
                        <li class="item">
                            <?php the_sub_field('explanation'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
<?php } ?>