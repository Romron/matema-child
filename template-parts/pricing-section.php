<div class="pricing-section">
    <div class="container">

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
                    case 'tr':
                        $button_text = 'Daha fazla bilgi';
                        $button_link = get_page_link('109368');
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
                    default:
                        $button_text = 'Бiльше iнформацii';
                        $button_link = get_page_link('1660');
                }
                ?>
                <div class="buttons-wrap">
                    <a href="<?php echo esc_url($button_link); ?>" class="button">
                        <?php ECHO $button_text; ?>
                        <div class="icon margin-left">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (have_rows('plans')):
                while (have_rows('plans')):
                    the_row(); ?>
                    <div class="col">
                        <?php $show_arrow = get_sub_field('best_plan'); ?>
                        <?php if (!empty($show_arrow)): ?>
                            <div class="plan best-plan-block">
                            <?php else: ?>
                                <div class="plan">
                                <?php endif; ?>
                                <?php if (!empty($show_arrow)): ?>
                                    <?php
                                    $language_code = ICL_LANGUAGE_CODE;
                                    $best_plan_text = '';
                                    switch ($language_code) {
                                        case 'pl':
                                            $best_plan_text = 'Najlepsza oferta';
                                            break;
                                        case 'en':
											$best_plan_text = 'Best plan';
                                            break;
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
                                <!-- Ціна -->
                                <div class="price">
                                    <?php switch (ICL_LANGUAGE_CODE):
                                        case 'pl': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>zl./god</b></span>
                                            </h2>
                                            <?php break;
                                        case 'en':
                                        case 'gb': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>GPB/hour</b></span>
                                            </h2>
                                            <?php break;
                                        case 'de': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>EUR/Stunde</b></span>
                                            </h2>
                                            <?php break;
                                        case 'fr': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>EUR/heure</b></span>
                                            </h2>
                                            <?php break;
                                        case 'es': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>EUR/hora</b></span>
                                            </h2>
                                            <?php break;
                                        case 'it': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>EUR/ora</b></span>
                                            </h2>
                                            <?php break;
                                        case 'pt': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>EUR/hora</b></span>
                                            </h2>
                                            <?php break;
                                        case 'nl': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>EUR/uur</b></span>
                                            </h2>
                                            <?php break;
                                        case 'cs': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>EUR/hod</b></span>
                                            </h2>
                                            <?php break;
                                        case 'hu': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>EUR/óra</b></span>
                                            </h2>
                                            <?php break;
                                        case 'ro': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>EUR/oră</b></span>
                                            </h2>
                                            <?php break;
                                        case 'tr': ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>TRY/saat</b></span>
                                            </h2>
                                            <?php break;
                                        default: ?>
                                            <h2>
                                                <?php the_sub_field('price'); ?><span><b>грн./год.</b></span>
                                            </h2>
                                    <?php endswitch; ?>
                                </div>

                                <?php if (ICL_LANGUAGE_CODE == 'gb'): ?>
                                    <a href="<?php echo get_page_link('11079'); ?>"
                                        class="button button-plan-selection button-package"
                                        id="<?php echo the_sub_field('cta_extra_class'); ?>">
                                        <?php the_sub_field('cta'); ?>
                                        <div class="icon">
                                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>
                                <?php else: ?>
                                    <span class="button main-menu-popup button-plan-selection button-package"
                                        id="<?php echo the_sub_field('cta_extra_class'); ?>">
                                        <?php the_sub_field('cta'); ?>
                                        <div class="icon">
                                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; else: endif; ?>
            </div>
        </div>
    </div>