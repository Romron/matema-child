<?php

/**
 * Payment Process Illustration section
 */

if ($is_preview) {
    if (isset($block['data']['gutenberg_preview_image'])) {
        echo '<img src="' . get_theme_file_uri() . esc_url($block['data']['gutenberg_preview_image']) . '" style="max-width:100%; height:auto;">';
    }
} else {
?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap');

        .payment-process-illustration-section {
            padding-bottom: 25px;
        }

        .payment-process-illustration-section .title {
            color: rgb(93, 62, 206);
            font-family: "Rubik", sans-serif;
            font-size: 56px;
            font-weight: 600;
            line-height: 120%;
            text-align: center;
            text-transform: uppercase;
            margin-left: auto;
            margin-right: auto;
            max-width: 1001px;
        }

        .payment-process-illustration-section .subtitle {
            color: rgb(51, 58, 64);
            font-family: "Inter", sans-serif;
            font-size: 20px;
            font-weight: 500;
            line-height: 150%;
            text-align: center;
            margin-top: 14px;
            margin-right: auto;
            margin-left: auto;
            max-width: 526px;
        }

        .payment-process-illustration-section .image {
            margin-right: auto;
            margin-left: auto;
            margin-top: 21px;
            background-position: center;
            background-size: cover;
            border-radius: 6px;
            max-width: 913px;
            width: 100%;
            height: 652px;
            background-image: url('<?php echo the_field('illustration'); ?>');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media screen and (max-width: 991px) {
            .payment-process-illustration-section .title {
                font-size: 40px;
            }

            .payment-process-illustration-section .subtitle {
                margin-top: 20px;
            }

            .payment-process-illustration-section .image {
                max-width: 768px;
                margin-top: 29px;
            }
        }

        @media screen and (max-width: 767px) {
            .payment-process-illustration-section .title {
                font-size: 32px;
                text-align: left;
            }

            .payment-process-illustration-section .subtitle {
                font-size: 16px;
                text-align: left;
                margin-top: 16px;
            }

            .payment-process-illustration-section .image {
                max-width: 345px;
                height: 355px;
                margin-top: 4px;
            }
        }
    </style>
    <section class="payment-process-illustration-section">
        <h1 class="title">
            <?php the_field('title'); ?>
        </h1>
        <p class="subtitle">
            <?php the_field('subtitle'); ?>
        </p>
        <div class="image"></div>
    </section>
<?php } ?>