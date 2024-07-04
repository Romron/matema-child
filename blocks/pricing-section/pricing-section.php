<?php

/**
 * Pricing Section Block Template
 */

if ($is_preview) {
    if (isset($block['data']['gutenberg_preview_image'])) {
        echo '<img src="' . get_theme_file_uri() . esc_url($block['data']['gutenberg_preview_image']) . '" style="max-width:100%; height:auto;">';
    }
} else {
?>
    <style>
        .pricing-section .plan {
            padding: 30px 20px;
        }

        .pricing-section .plan .price-usd {
            margin-bottom: -5px;
            font-size: 14px;
            font-weight: 400;
            line-height: 120%;
            letter-spacing: 0%;
            text-align: left;
        }

        .pricing-section .plan .price h2 {
            font-size: 52px;
        }

        .pricing-section .comment {
            margin-top: 11px;
            width: 553px;
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: 300;
            line-height: 120%;
            text-align: left;
        }

        .pricing-section {
            margin-bottom: 0;
            padding: 58px 0;
        }

        @media screen and (max-width: 991px) {
            .pricing-section .container {
                padding: 0 8px;
            }

            .pricing-section .row {
                display: flex !important;
            }

            .pricing-section .col {
                margin-bottom: 30px;
                width: 351px;
            }

            .pricing-section .plan .button {
                width: 100%;
            }

            .pricing-section .comment {
                margin-top: 0;
                width: 100%;
            }
        }

        @media screen and (max-width: 767px) {
            .pricing-section .col {
                margin-bottom: 40px;
                width: 100%;
            }
        }
    </style>

    <div class="pricing-section">

        <?php if (get_field('plans_head')) : ?>
            <div class="head">
                <!-- Переклад Дізнатись більше -->
                <div class="half-block">
                    <?php the_field('plans_head'); ?>
                    <?php
                    $button_text = '';
                    $button_link = '';
                    switch (ICL_LANGUAGE_CODE) {
                        case 'pl':
                            $button_text = 'Więcej informacji';
                            $button_link = get_page_link('2127');
                            break;
                        case 'gb':
                            $button_text = 'Learn More';
                            $button_link = get_page_link('11074');
                            break;
                        case 'en':
                            $button_text = 'Details';
                            $button_link = get_page_link('11074');
                            break;
                        case 'de':
                            $button_text = 'Mehr Infos';
                            $button_link = get_page_link('YOUR_DE_PAGE_ID_HERE');
                            break;
                        case 'fr':
                            $button_text = 'Plus d\'informations';
                            $button_link = get_page_link('YOUR_FR_PAGE_ID_HERE');
                            break;
                        case 'es':
                            $button_text = 'Más información';
                            $button_link = get_page_link('YOUR_ES_PAGE_ID_HERE');
                            break;
                        case 'it':
                            $button_text = 'Maggiori informazioni';
                            $button_link = get_page_link('YOUR_IT_PAGE_ID_HERE');
                            break;
                        case 'pt':
                            $button_text = 'Mais informações';
                            $button_link = get_page_link('YOUR_PT_PAGE_ID_HERE');
                            break;
                        case 'nl':
                            $button_text = 'Meer informatie';
                            $button_link = get_page_link('YOUR_NL_PAGE_ID_HERE');
                            break;
                        case 'cs':
                            $button_text = 'Více informací';
                            $button_link = get_page_link('YOUR_CS_PAGE_ID_HERE');
                            break;
                        case 'hu':
                            $button_text = 'További információk';
                            $button_link = get_page_link('YOUR_HU_PAGE_ID_HERE');
                            break;
                        case 'ro':
                            $button_text = 'Mai multe informații';
                            $button_link = get_page_link('YOUR_RO_PAGE_ID_HERE');
                            break;
                        case 'tr':
                            $button_text = 'Daha fazla bilgi';
                            $button_link = get_page_link('YOUR_TR_PAGE_ID_HERE');
                            break;
                        default:
                            $button_text = 'Бiльше iнформацii';
                            $button_link = get_page_link('1660');
                    }
                    ?>
                    <?php if (get_field('plans_head')) : ?>
                        <div class="buttons-wrap">
                            <a href="<?php echo esc_url($button_link); ?>" class="button">
                                <?php echo get_field('text_pricing_link') ?>
                                <div class="icon margin-left">
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <?php
            if (have_rows('plans')) :
                while (have_rows('plans')) :
                    the_row(); ?>
                    <div class="col">
                        <?php $show_arrow = get_sub_field('best_plan'); ?>
                        <div class="plan<?php echo !empty($show_arrow) ? ' best-plan-block' : ''; ?>">
                            <?php if (!empty($show_arrow)) : ?>
                                <?php
                                $language_code = ICL_LANGUAGE_CODE;
                                $best_plan_text = '';
                                switch ($language_code) {
                                    case 'pl':
                                        $best_plan_text = 'Najlepsza oferta';
                                        break;
                                    case 'en':
                                    case 'gb':
                                        $best_plan_text = 'Best plan';
                                        break;
                                    case 'de':
                                        $best_plan_text = 'Bestes Angebot';
                                        break;
                                    case 'fr':
                                        $best_plan_text = 'Meilleure offre';
                                        break;
                                    case 'es':
                                        $best_plan_text = 'Mejor oferta';
                                        break;
                                    case 'it':
                                        $best_plan_text = 'Migliore offerta';
                                        break;
                                    case 'pt':
                                        $best_plan_text = 'Melhor oferta';
                                        break;
                                    case 'nl':
                                        $best_plan_text = 'Beste aanbieding';
                                        break;
                                    case 'cs':
                                        $best_plan_text = 'Nejlepší nabídka';
                                        break;
                                    case 'hu':
                                        $best_plan_text = 'Legjobb ajánlat';
                                        break;
                                    case 'ro':
                                        $best_plan_text = 'Cea mai bună ofertă';
                                        break;
                                    case 'tr':
                                        $best_plan_text = 'En iyi teklif';
                                        break;
                                    default:
                                        $best_plan_text = 'Найкращий план';
                                        break;
                                }
                                ?>
                                <div class="best-plan">
                                    <?php echo $best_plan_text; ?>
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

                            <!-- Ціна в USD -->
                            <?php
                            $currency_exchange_rate = get_field('currency_exchange_rate');
                            $price_usd = get_sub_field('price_usd');
                            $price = 0;

                            if ($currency_exchange_rate && $price_usd) :
                                $price = round($price_usd * $currency_exchange_rate, -2);
                            ?>
                                <div class="price-usd">
                                    <?php
                                    echo esc_html("{$price_usd}$");
                                    ?>
                                </div>
                            <?php endif; ?>
                            <!-- Ціна в ГРН -->
                            <div class="price">
                                <?php switch (ICL_LANGUAGE_CODE):
                                    case 'pl': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>zl.</b></span>
                                        </h2>
                                    <?php break;
                                    case 'en':
                                    case 'gb': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>GPB</b></span>
                                        </h2>
                                    <?php break;
                                    case 'de': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    case 'fr': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    case 'es': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    case 'it': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    case 'pt': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    case 'nl': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    case 'cs': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    case 'hu': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    case 'ro': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    case 'tr': ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>EUR</b></span>
                                        </h2>
                                    <?php break;
                                    default: ?>
                                        <h2>
                                            <?php echo round($price); ?><span><b>грн</b></span>
                                        </h2>
                                <?php endswitch; ?>
                            </div>
                            <?php
                            $pay_link = get_sub_field('pay_link');
                            $pay_link_url = !empty($pay_link['url']) ? $pay_link['url'] : '';
                            $pay_link_target = !empty($pay_link['target']) ? $pay_link['target'] : '';
                            ?>
                            <a href="<?php echo esc_attr($pay_link_url); ?>" target="<?php echo esc_attr($pay_link_target); ?>">
                                <span class="button button-plan-selection button-package" id="<?php echo the_sub_field('cta_extra_class'); ?>">
                                    <?php the_sub_field('cta'); ?>
                                </span>
                            </a>
                        </div>
                    </div>
                <?php endwhile;
                if (get_field('comment')) : ?>
                    <div class="col comment">
                        <?php the_field('comment'); ?>
                    </div>
            <?php endif;
            endif; ?>
        </div>
    </div>
<?php } ?>