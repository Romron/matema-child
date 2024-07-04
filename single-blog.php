<?php

get_header(); ?>
<style>
    .inner-page {
        display: none;
    }

    .inner-page.no-padding {
        display: block;
    }

    .post-cover {
        position: relative;
    }

    .abs-title {
        position: absolute;
        top: 150px;
        left: 80px;
    }

    .abs-title h2 {
        max-width: 60%;
        font-size: 70px;
        text-transform: uppercase;
    }

    .abs-descri p {
        max-width: 50%;
        font-size: 36px;
        text-transform: uppercase;
    }

    @media only screen and (max-width: 1400px) {
        .abs-title h2 {
            font-size: 4vw;
            max-width: 50%;
        }

        .abs-descri p {
            font-size: 2vw;
            max-width: 40%;
        }

        .abs-title {
            top: 14vw;
            left: 5.5vw;
        }
    }
</style>
<?php if (have_posts())
    while (have_posts()):
        the_post(); ?>
        <?php
        $user_id = $post->post_author;
        ?>
        <div class="inner-page no-padding">
            <div class="page-blog-current-post">
                <div class="container">
                    <div class="head">
                        <div class="breadcrumbs-section">
                            <?php echo do_shortcode('[rank_math_breadcrumb]'); ?>
                        </div>
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                        <div class="meta-info">
                            <div class="date">
                                <p class="published">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.3337 1.875H15.625V0.625C15.625 0.279375 15.3456 0 15 0C14.6544 0 14.375 0.279375 14.375 0.625V1.875H10.625V0.625C10.625 0.279375 10.345 0 10 0C9.655 0 9.375 0.279375 9.375 0.625V1.875H5.625V0.625C5.625 0.279375 5.345 0 5 0C4.655 0 4.375 0.279375 4.375 0.625V1.875H1.66688C0.74625 1.875 0 2.62062 0 3.54125V18.3331C0 19.2538 0.74625 20 1.66688 20H18.3337C19.2544 20 20 19.2538 20 18.3331V3.54125C20 2.62062 19.2544 1.875 18.3337 1.875ZM18.75 18.3331C18.75 18.5631 18.5631 18.75 18.3337 18.75H1.66688C1.43688 18.75 1.25 18.5631 1.25 18.3331V3.54125C1.25 3.31187 1.43688 3.125 1.66688 3.125H4.375V4.375C4.375 4.72062 4.655 5 5 5C5.345 5 5.625 4.72062 5.625 4.375V3.125H9.375V4.375C9.375 4.72062 9.655 5 10 5C10.345 5 10.625 4.72062 10.625 4.375V3.125H14.375V4.375C14.375 4.72062 14.6544 5 15 5C15.3456 5 15.625 4.72062 15.625 4.375V3.125H18.3337C18.5631 3.125 18.75 3.31187 18.75 3.54125V18.3331Z"
                                            fill="#8B8B8B" />
                                        <path d="M6.875 7.5H4.375V9.375H6.875V7.5Z" fill="#8B8B8B" />
                                        <path d="M6.875 10.625H4.375V12.5H6.875V10.625Z" fill="#8B8B8B" />
                                        <path d="M6.875 13.75H4.375V15.625H6.875V13.75Z" fill="#8B8B8B" />
                                        <path d="M11.25 13.75H8.75V15.625H11.25V13.75Z" fill="#8B8B8B" />
                                        <path d="M11.25 10.625H8.75V12.5H11.25V10.625Z" fill="#8B8B8B" />
                                        <path d="M11.25 7.5H8.75V9.375H11.25V7.5Z" fill="#8B8B8B" />
                                        <path d="M15.625 13.75H13.125V15.625H15.625V13.75Z" fill="#8B8B8B" />
                                        <path d="M15.625 10.625H13.125V12.5H15.625V10.625Z" fill="#8B8B8B" />
                                        <path d="M15.625 7.5H13.125V9.375H15.625V7.5Z" fill="#8B8B8B" />
                                    </svg>
                                    <?php the_date('d m Y'); ?>
                                </p>
                                <p class="last-edit">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.3335 13.4383V18.3333C18.3335 18.8195 18.1403 19.2858 17.7965 19.6297C17.4527 19.9735 16.9864 20.1666 16.5002 20.1666H3.66683C3.1806 20.1666 2.71428 19.9735 2.37047 19.6297C2.02665 19.2858 1.8335 18.8195 1.8335 18.3333V5.49996C1.8335 5.01373 2.02665 4.54741 2.37047 4.2036C2.71428 3.85978 3.1806 3.66663 3.66683 3.66663H8.56183"
                                            stroke="#8B8B8B" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16.5002 1.83337L20.1668 5.50004L11.0002 14.6667H7.3335V11L16.5002 1.83337Z"
                                            stroke="#8B8B8B" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <?php echo get_the_modified_date('d m Y') ?>
                                </p>
                            </div>
                        </div>
                        <?php /*
                                <div class="post-category">
                                    
                                    $category = get_the_category();
                                    echo $category[0]->name;
                                </div>
                                */?>
                    </div>
                    <div class="post-cover" style="background-image: url('');">
                        <img src="<?php echo get_the_post_thumbnail_url($post); ?>">
                        <?php if (get_field('blog_image_title') != "") { ?>
                            <div class="abs-title">
                                <h2 <?php if (get_field('text_colour') != "") {?>style="color: <?php the_field('text_colour'); ?>;"<?php } ?>>
                                    <?php the_field('blog_image_title'); ?>
                                </h2>
                                <?php if (get_field('blog_image_description') != "") { ?>
                                    <div class="abs-descri">
                                        <p <?php if (get_field('text_colour') != "") {?>style="color: <?php the_field('text_colour'); ?>;"<?php } ?>>
                                            <?php the_field('blog_image_description'); ?>
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    <article>
                        <?php the_content(); ?>
                        <div class="author-profile-card">
                            <div class="row">
                                <div class="author-photo"
                                    style="background-image: url('<?php the_field('authors_photo', 'user_' . $user_id); ?>');">
                                </div>
                                <div class="author-details">
                                    <h3>
                                        <?php echo the_author_posts_link(); ?>
                                    </h3>

                                    <div class="bio">
                                        <?php the_field('authors_bio', 'user_' . $user_id); ?>
                                    </div>
                                    <div class="author-socials">
                                        <?php if (have_rows('blog_author_socials', 'user_' . $user_id)):
                                            while (have_rows('blog_author_socials', 'user_' . $user_id)):
                                                the_row(); ?>
                                                <?php
                                                $link = get_sub_field('author_social_link', 'user_' . $user_id);
                                                ;
                                                if ($link):
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                    <a class="button" href="<?php echo esc_url($link_url); ?>"
                                                        target="<?php echo esc_attr($link_target); ?>">
                                                        <?php echo esc_html($link_title); ?>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endwhile;
                                        else:
                                        endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bottom">
                            <div class="share">
                                <?php
                                switch (ICL_LANGUAGE_CODE) {
                                    case 'pl':
                                        echo '<strong>Dzielić</strong>';
                                        break;
                                    case 'gb':
                                    case 'en':
                                        echo '<strong>Share</strong>';
                                        break;
                                    case 'de':
                                        echo '<strong>Teilen</strong>';
                                        break;
                                    case 'fr':
                                        echo '<strong>Partager</strong>';
                                        break;
                                    case 'es':
                                        echo '<strong>Compartir</strong>';
                                        break;
                                    case 'it':
                                        echo '<strong>Condividi</strong>';
                                        break;
                                    case 'pt':
                                        echo '<strong>Compartilhar</strong>';
                                        break;
                                    case 'nl':
                                        echo '<strong>Delen</strong>';
                                        break;
                                    case 'cs':
                                        echo '<strong>Sdílet</strong>';
                                        break;
                                    case 'hu':
                                        echo '<strong>Megosztás</strong>';
                                        break;
                                    case 'ro':
                                        echo '<strong>Partaja</strong>';
                                        break;
                                    case 'tr':
                                        echo '<strong>Paylaş</strong>';
                                        break;
                                    default:
                                        echo '<strong>Подiлитись</strong>';
                                        break;
                                }
                                ?>

                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_email"></a>
                                    <a class="a2a_button_linkedin"></a>
                                    <a class="a2a_button_telegram"></a>
                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                                <!-- AddToAny END -->

                                <!-- AddToAny END -->
                            </div>
                        </div>


                        <?php /* get_template_part('template-parts/form-request'); */?>
                    </article>
                </div>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'cat' => 12,
                    'posts_per_page' => 3,
                    'orderby' => array(
                        'date' => 'DESC',
                        'menu_order' => 'DESC'
                    )
                );
                $blog = new WP_Query($args);

                if ($blog->have_posts()): ?>
<style>
.related-posts .post-cover {position: relative;}
.related-posts .abs-title {position: absolute;top: 60px;left: 25px;}
.related-posts .abs-title h2 {max-width: 45%;font-size: 24px;text-transform: uppercase;}
.related-posts .abs-descri p {max-width: 40%;font-size: 14px;text-transform: uppercase;}

@media only screen and (max-width: 1400px) {
	body .related-posts .abs-title h2 {font-size: 1.5vw;max-width: 40%;}
	body .related-posts .abs-descri p {font-size: 0.7vw;max-width: 36%;}
	.related-posts .abs-title {top: 4vw;left: 2vw;}
}
@media only screen and (max-width: 991px) {
	body .related-posts .abs-title h2 {font-size: 4.5vw;max-width: 45%;}
	body .related-posts .abs-descri p {font-size: 2.5vw;max-width: 40%;}
	.related-posts .abs-title {top: 14vw;left: 5.5vw;}
}
</style>
<?php $counter = 0;?>					
                    <div class="related-posts">
                        <div class="container wide">
                            <?php
                            switch (ICL_LANGUAGE_CODE) {
                                case 'pl':
                                    echo '<h2>Inne artykuły związane z tematem</h2>';
                                    break;
                                case 'gb':
                                case 'en':
                                    echo '<h2>Other news by topic</h2>';
                                    break;
                                case 'de':
                                    echo '<h2>Weitere Artikel zum Thema</h2>';
                                    break;
                                case 'fr':
                                    echo '<h2>Autres actualités par sujet</h2>';
                                    break;
                                case 'es':
                                    echo '<h2>Otras noticias por tema</h2>';
                                    break;
                                case 'it':
                                    echo '<h2>Altre notizie per argomento</h2>';
                                    break;
                                case 'pt':
                                    echo '<h2>Outras notícias por tópico</h2>';
                                    break;
                                case 'nl':
                                    echo '<h2>Andere nieuwsberichten per onderwerp</h2>';
                                    break;
                                case 'cs':
                                    echo '<h2>Další články na téma</h2>';
                                    break;
                                case 'hu':
                                    echo '<h2>Egyéb hírek témakörben</h2>';
                                    break;
                                case 'ro':
                                    echo '<h2>Alte știri după temă</h2>';
                                    break;
                                case 'tr':
                                    echo '<h2>Konuyla ilgili diğer haberler</h2>';
                                    break;
                                default:
                                    echo '<h2>Iншi новини за темою</h2>';
                                    break;
                            }
                            ?>
                            <div class="row">
                                <?php while ($blog->have_posts()):
                                    $blog->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>" class="col">
                                        <div class="block">
                                            <div class="post-cover cover<?php echo $counter++;?>">
											<img src="<?php echo get_the_post_thumbnail_url($post); ?>" style="display: block; height: auto; width: 100%;">
											<?php if (get_field('blog_image_title') != "") {?>
												<div class="abs-title"><h2 <?php if (get_field('text_colour') != "") {?>style="color: <?php the_field('text_colour'); ?>;"<?php } ?>><?php the_field('blog_image_title');?></h2>
												<?php if (get_field('blog_image_description') != "") {?>
													<div class="abs-descri"><p <?php if (get_field('text_colour') != "") {?>style="color: <?php the_field('text_colour'); ?>;"<?php } ?>><?php the_field('blog_image_description');?></p></div>
												<?php } ?>
												</div>
											<?php } ?>
											<?php if (get_field('title_size_px') != "") {?>
												<style>
													.cover<?php echo ($counter - 1);?> .abs-title h2 {font-size: <?php echo (get_field('title_size_px') / 2.5); ?>px;}
													@media only screen and (max-width: 1400px) {
														body .cover<?php echo ($counter - 1);?> .abs-title h2 {font-size: <?php echo ((get_field('title_size_px') - 10) / 30); ?>vw;}
													}
													@media only screen and (max-width: 991px) {
														body .cover<?php echo ($counter - 1);?> .abs-title h2 {font-size: <?php echo ((get_field('title_size_px') - 10) / 12); ?>vw;}
													}
												</style>
											<?php } ?>
											<?php if (get_field('image_descr_size_px') != "") {?>
												<style>
													body .cover<?php echo ($counter - 1);?> .abs-descri p {font-size: <?php echo (get_field('image_descr_size_px') / 2.5); ?>px;}
													@media only screen and (max-width: 1400px) {
														body .cover<?php echo ($counter - 1);?> .abs-descri p {font-size: <?php echo ((get_field('image_descr_size_px')) / 30); ?>vw;}
													}
													@media only screen and (max-width: 991px) {
														body .cover<?php echo ($counter - 1);?> .abs-descri p {font-size: <?php echo (get_field('image_descr_size_px') / 12); ?>vw;}
													}
												</style>
											<?php } ?>
										</div>
                                            <div class="post-info">
                                                <div class="date">
                                                    <?php the_time('d m Y'); ?>
                                                </div>
                                                <h4>
                                                    <?php the_title(); ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                        </div>

                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div><!-- inner page -->

    <?php endwhile; ?>
<style>
    @media only screen and (max-width: 440px) {

        html.pum-open.pum-open-overlay-disabled.pum-open-fixed .pum-container#popmake-47177,
        html.pum-open.pum-open-overlay-disabled.pum-open-fixed .pum-container#popmake-49403 {
            max-width: calc(100% - 40px) !important;
        }
    }
</style>
<?php if (ICL_LANGUAGE_CODE == 'ru') { ?>
    <script>
        var available;
        var percentage_of_page;
        var half_screen;
        var height;
        var countr = 0;
        jQuery(document).ready(function ($) {
            jQuery(window).scroll(function (e) {
                available = jQuery(document).height();
                percentage_of_page = 0.25;
                half_screen = available * percentage_of_page;
                height = jQuery(window).scrollTop();
                if ((height > half_screen) && (countr == 0)) {
                    setTimeout(function () {
                        $('#popmake-49403').css("opacity", "1");
                        $('#popmake-49403').popmake('open');
                        countr = 1;
                    }, 500);
                }
            });
            $("#popmake-49403 .popmake-close").click(function () {
                $('#popmake-49403').css("opacity", "0");
                $('#popmake-49403').css("display", "none");
            });
        });
    </script>
<?php } elseif (ICL_LANGUAGE_CODE == 'en') { ?>
    <script>
        var available;
        var percentage_of_page;
        var half_screen;
        var height;
        var countr = 0;
        jQuery(document).ready(function ($) {
            jQuery(window).scroll(function (e) {
                available = jQuery(document).height();
                percentage_of_page = 0.25;
                half_screen = available * percentage_of_page;
                height = jQuery(window).scrollTop();
                if ((height > half_screen) && (countr == 0)) {
                    setTimeout(function () {
                        $('#popmake-54652').css("opacity", "1");
                        $('#popmake-54652').popmake('open');
                        countr = 1;
                    }, 500);
                }
            });
            $("#popmake-54652 .popmake-close").click(function () {
                $('#popmake-54652').css("opacity", "0");
                $('#popmake-54652').css("display", "none");
            });
        });
    </script>
<?php } elseif (ICL_LANGUAGE_CODE == 'gb') { ?>
    <script>
        var available;
        var percentage_of_page;
        var half_screen;
        var height;
        var countr = 0;
        jQuery(document).ready(function ($) {
            jQuery(window).scroll(function (e) {
                available = jQuery(document).height();
                percentage_of_page = 0.25;
                half_screen = available * percentage_of_page;
                height = jQuery(window).scrollTop();
                if ((height > half_screen) && (countr == 0)) {
                    setTimeout(function () {
                        $('#popmake-54655').css("opacity", "1");
                        $('#popmake-54655').popmake('open');
                        countr = 1;
                    }, 500);
                }
            });

            $("#popmake-54655 .popmake-close").click(function () {
                $('#popmake-54655').css("opacity", "0");
                $('#popmake-54655').css("display", "none");
            });
        });
    </script>
<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
    <script>
        var available;
        var percentage_of_page;
        var half_screen;
        var height;
        var countr = 0;
        jQuery(document).ready(function ($) {
            jQuery(window).scroll(function (e) {
                available = jQuery(document).height();
                percentage_of_page = 0.25;
                half_screen = available * percentage_of_page;
                height = jQuery(window).scrollTop();
                if ((height > half_screen) && (countr == 0)) {
                    setTimeout(function () {
                        $('#popmake-49949').css("opacity", "1");
                        $('#popmake-49949').popmake('open');
                        countr = 1;
                    }, 500);
                }
            });

            $("#popmake-49949 .popmake-close").click(function () {
                $('#popmake-49949').css("opacity", "0");
                $('#popmake-49949').css("display", "none");
            });
        });
    </script>
<?php } else { ?>
    <script>
        var available;
        var percentage_of_page;
        var half_screen;
        var height;
        var countr = 0;
        jQuery(document).ready(function ($) {
            jQuery(window).scroll(function (e) {
                available = jQuery(document).height();
                percentage_of_page = 0.25;
                half_screen = available * percentage_of_page;
                height = jQuery(window).scrollTop();
                if ((height > half_screen) && (countr == 0)) {
                    setTimeout(function () {
                        $('#popmake-47177').css("opacity", "1");
                        $('#popmake-47177').popmake('open');
                        countr = 1;
                    }, 500);
                }
            });
            $("#popmake-47177 .popmake-close").click(function () {
                $('#popmake-47177').css("opacity", "0");
                $('#popmake-47177').css("display", "none");
            });
        });
                /*
        #pum-47177 display: block; pum-active
 
        #popmake-47177
        min-width: 0%;
            max-width: 380px;
            bottom: 20px;
            left: 20px;
            opacity: 1;
            display: block;*/
    </script>
<?php } ?>
<?php get_footer(); ?>