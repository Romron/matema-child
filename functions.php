<?php
function my_theme_enqueue_styles()
{
    $parent_style = 'divi-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles2()
{

    $parent_style = 'divi-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style('rmbt-page-test-work',  get_stylesheet_directory_uri() . '/assets/styles/page-test-work.css', array(), '1.0', 'all' );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles2', 20);


add_filter('gform_tabindex', 'change_tabindex', 10, 2);
function change_tabindex($tabindex, $form)
{
    $fid = rgar($form, 'id');
    $newindex = $fid * 30;
    return $newindex;
}
$tutname;
$tutid;

function wpse121723_register_sidebars()
{
    register_sidebar(array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'wpse121723_register_sidebars');

// Define a custom function to modify the default option text
function custom_dropdown_default_option($default_option, $filter) {
    // Modify the default option text as needed based on language
    if (function_exists('icl_object_id')) {
        // Check if WPML is active
        $language = apply_filters( 'wpml_current_language', NULL );
        switch ($language) {
            case 'uk':
                $modified_default_option = sprintf(__('Оберіть %s', 'filter-everything'), $filter['label']);
                break;
            case 'pl':
                $modified_default_option = sprintf(__('Wybierać %s', 'filter-everything'), $filter['label']);
                break;
			case 'en':
                $modified_default_option = sprintf(__('Choose %s', 'filter-everything'), $filter['label']);
                break;
			case 'ru':
                $modified_default_option = sprintf(__('Выберите %s', 'filter-everything'), $filter['label']);
                break;	
            default:
                $modified_default_option = sprintf(__('Select %s', 'filter-everything'), $filter['label']);
        }
    } else {
        // If WPML is not active, use default English text
        $modified_default_option = sprintf(__('Select %s', 'filter-everything'), $filter['label']);
    }
    return $modified_default_option;
}

// Hook the custom function to the 'wpc_dropdown_default_option' filter
add_filter('wpc_dropdown_default_option', 'custom_dropdown_default_option', 10, 2);


function blog_form_button_shortcode($atts, $content = null)
{
    $default_atts = array(
        'text' => '',
        'title' => '',
        'imageurl' => '',
    );
    $params = shortcode_atts($default_atts, $atts);

    return '<div class="blog-shortcode-cta" style="background-image: url(' . $params['imageurl'] . ');"><div class="text-wrap"><h3>' . esc_html($params['title']) . '</h3><p>' . esc_html($content) . '</p><span target="' . esc_attr($params['target']) . '"' . ' style="' . $button_styles . '" ' . 'class="button-blog-cta cta-blog button-blog-form-cta">' . esc_html($params['text']) . '</span></div></div>';
}
add_shortcode('blog_form_button_section', 'blog_form_button_shortcode');

add_filter('gform_validation_message', 'change_message', 10, 2);
function change_message($message, $form)
{
    switch (ICL_LANGUAGE_CODE) {
						case 'uk':
							return "<div class='validation_error'>Виникла проблема з вашим поданням. Будь-ласка, перегляньте поля нижче.</div>";
							break;
                        case 'en':
							return "<div class='validation_error'>There was a problem with your submission. Please review the fields below</div>";
							break;
                        case 'gb':
                            return "<div class='validation_error'>There was a problem with your submission. Please review the fields below</div>";
							break;
						case 'pl':
                            return "<div class='validation_error'>Wystąpił problem z przesłaniem. Prosimy o zapoznanie się z poniższymi polami.</div>";
							break;
						case 'ru':
                            return "<div class='validation_error'>Возникла проблема с вашими данными. Пожалуйста, посмотрите поля ниже.</div>";
							break;		
						case 'tr':
							return "<div class='validation_error'>Gönderiminizle ilgili bir sorun oluştu. Lütfen aşağıdaki alanları inceleyin</div>";
                            break;
						default:
							return "<div class='validation_error'>Виникла проблема з вашим поданням. Будь-ласка, перегляньте поля нижче.</div>";
	}
}
add_filter('gform_progress_bar_36', 'gf_custom_progress_bar_ua_5', 10, 3);
add_filter('gform_progress_bar_41', 'gf_custom_progress_bar_ua_5', 10, 3);
add_filter('gform_progress_bar_50', 'gf_custom_progress_bar_ua_5', 10, 3);
add_filter('gform_progress_bar_53', 'gf_custom_progress_bar_ua_5', 10, 3);
function gf_custom_progress_bar_ua_5($progress_bar, $form, $confirmation_message)
{
	$total_page = 5;
	$current_page = GFFormDisplay::get_current_page($form['id']);
    $percent = 20;
    $form_page = 1;
    if ($current_page == 1) {
        $percent = 0;
        $form_page = 1;
    } else if ($current_page == 2) {
        $percent = 40;
        $form_page = 2;
        $backbutton = '<div id="gform_previous_button_' . $form['id'] . '_6" tabindex="1097" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;1&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;1&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
    } else if ($current_page == 3) {
        $percent = 60;
        $form_page = 3;
        $backbutton = '<div id="gform_previous_button_' . $form['id'] . '_8" tabindex="1103" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;2&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;2&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
    } else if ($current_page == 4) {
        $percent = 80;
        $form_page = 4;
        $backbutton = '<div id="gform_previous_button_' . $form['id'] . '_11" tabindex="1106" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;3&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;3&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
    } else if ($current_page == 5) {
        $percent = 100;
        $form_page = 5;
        $backbutton = '<div id="gform_previous_button_' . $form['id'] . '" tabindex="1120" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;4&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;4&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
    }
	$progress_bar = '
                <div id="gf_progressbar_wrapper_' . $form['id'] . '" class="gf_progressbar_wrapper gf_page_steps gprogresspage_' . $form_page . '">
                    <div class="progr-flex">
					<div class="prev-button">' . $backbutton . '</div>
					<div class="gf_progressbar_title"><span class="gf_step_current_page">' . $form_page . '</span>/<span class="gf_step_page_count">' . $total_page . '</span>
                     </div>
					</div>
                    <div class="gf_progressbar gf_progressbar_blue" aria-hidden="true">
                        <div class="gf_progressbar_percentage percentbar_blue percentbar_' . $percent . '" style="width:' . $percent . '%;"><span>' . $percent . '%</span></div>
                    </div>
                </div>';
    return $progress_bar;
}

add_filter('gform_progress_bar_38', 'op_custom_progress_bar', 10, 3);
add_filter('gform_progress_bar_46', 'op_custom_progress_bar', 10, 3);
function op_custom_progress_bar($progress_bar, $form, $confirmation_message)
{
  if (ICL_LANGUAGE_CODE == 'uk') {
	if ($form['id'] == 46) {
        $total_page = 10;
        $current_page = GFFormDisplay::get_current_page($form['id']);
        $form_page = $current_page;
        $progress_bar_display = 'block';
        if ($current_page == 1) {
            $percent = 0;
            $backbutton = '<div id="gform_previous_button_' . $form['id'] . '" tabindex="1097" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;1&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;1&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
        } else if ($current_page == 6 || $current_page == 7) {
            $progress_bar_display = 'none';
        } else {
            $percent = $current_page * 10 - 10;
            $prev_page = $current_page - 1;
            $backbutton = '<div id="gform_previous_button_' . $form['id'] . '" tabindex="1097" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;' . $prev_page . '&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;1&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
        }
        $progress_bar = '
            <div id="gf_progressbar_wrapper_' . $form['id'] . '" class="gf_progressbar_wrapper gf_page_steps gprogresspage_' . $form_page . '" style="display: ' . $progress_bar_display . '">
                <div class="progr-flex">
                <div class="prev-button">' . $backbutton . '</div>
                <div class="gf_progressbar_title"><span class="gf_step_current_page">' . $form_page . '</span>/<span class="gf_step_page_count">' . $total_page . '</span>
                </div>
                </div>
                <div class="gf_progressbar gf_progressbar_blue" aria-hidden="true">
                    <div class="gf_progressbar_percentage percentbar_blue percentbar_' . $percent . '" style="width:' . $percent . '%;"><span>' . $percent . '%</span></div>
                </div>
            </div>';
        return $progress_bar;
    }
  }
  else {

	$total_page = 6;
    $current_page = GFFormDisplay::get_current_page($form['id']);
    $percent = 0;
    $form_page = 1;
    if ($current_page == 1) {
        $percent = 0;
        $form_page = 1;
    } else if ($current_page == 2) {
        $percent = 20;
        $form_page = 2;
        $backbutton = '<div id="gform_previous_button_' . $form['id'] . '_6" tabindex="1097" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;1&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;1&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
    } else if ($current_page == 3) {
        $percent = 40;
        $form_page = 3;
        $backbutton = '<div id="gform_previous_button_' . $form['id'] . '_8" tabindex="1103" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;2&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;2&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
    } else if ($current_page == 4) {
        $percent = 60;
        $form_page = 4;
        $backbutton = '<div id="gform_previous_button_' . $form['id'] . '_11" tabindex="1106" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;3&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;3&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
    } else if ($current_page == 5) {
        $percent = 80;
        $form_page = 5;
        $backbutton = '<div id="gform_previous_button_' . $form['id'] . '" tabindex="1120" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;4&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;4&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
    }
	else if ($current_page == 6) {
        $percent = 100;
        $form_page = 6;
        $backbutton = '<div id="gform_previous_button_' . $form['id'] . '" tabindex="1120" onclick="jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;4&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); " onkeypress="if( event.keyCode == 13 ){ jQuery(&quot;#gform_target_page_number_' . $form['id'] . '&quot;).val(&quot;4&quot;);  jQuery(&quot;#gform_' . $form['id'] . '&quot;).trigger(&quot;submit&quot;,[true]); } ">&lt;</div>';
    }
  }
    $progress_bar = '
                <div id="gf_progressbar_wrapper_' . $form['id'] . '" class="gf_progressbar_wrapper gf_page_steps gprogresspage_' . $form_page . '">
                    <div class="progr-flex">
					<div class="prev-button">' . $backbutton . '</div>
					<div class="gf_progressbar_title"><span class="gf_step_current_page">' . $form_page . '</span>/<span class="gf_step_page_count">' . $total_page . '</span>
                     </div>
					</div>
                    <div class="gf_progressbar gf_progressbar_blue" aria-hidden="true">
                        <div class="gf_progressbar_percentage percentbar_blue percentbar_' . $percent . '" style="width:' . $percent . '%;"><span>' . $percent . '%</span></div>
                    </div>
                </div>';
    return $progress_bar;
}
add_filter('gform_next_button_57', 'input_to_button', 10, 2);
add_filter('gform_previous_button_57', 'input_to_button', 10, 2);
add_filter('gform_submit_button_57', 'input_to_button', 10, 2);
add_filter('gform_next_button_58', 'input_to_button', 10, 2);
add_filter('gform_previous_button_58', 'input_to_button', 10, 2);
add_filter('gform_submit_button_58', 'input_to_button', 10, 2);
add_filter('gform_next_button_59', 'input_to_button', 10, 2);
add_filter('gform_previous_button_59', 'input_to_button', 10, 2);
add_filter('gform_submit_button_59', 'input_to_button', 10, 2);
add_filter('gform_next_button_60', 'input_to_button', 10, 2);
add_filter('gform_previous_button_60', 'input_to_button', 10, 2);
add_filter('gform_submit_button_60', 'input_to_button', 10, 2);
add_filter('gform_next_button_61', 'input_to_button', 10, 2);
add_filter('gform_previous_button_61', 'input_to_button', 10, 2);
add_filter('gform_submit_button_61', 'input_to_button', 10, 2);
add_filter('gform_next_button_64', 'input_to_button', 10, 2);
add_filter('gform_previous_button_64', 'input_to_button', 10, 2);
add_filter('gform_submit_button_64', 'input_to_button', 10, 2);
function input_to_button($input, $form)
{
    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $input);
$input = $dom->getElementsByTagName('input')->item(0);
$input_value = $input->getAttribute('value');
$new_button = $dom->createElement('button');
$new_button->appendChild($dom->createTextNode($input_value));
$input->removeAttribute('value');

foreach ($input->attributes as $attribute) {
$new_button->setAttribute($attribute->name, $attribute->value);
}

$input->parentNode->replaceChild($new_button, $input);

return $dom->saveHtml($new_button);
}


function wpse69204_excerpt($num_words = 20, $ending = '...', $post_id = null)
{
global $post;
// Truncate post content
$current_post = $post_id ? get_post($post_id) : $post;
$excerpt = strip_shortcodes($current_post->post_content);
$excerpt = wp_trim_words($excerpt, $num_words, $ending);
// Read more link
$excerpt .= '<a href="' . get_permalink($post) . '" title="">Continue reading...</a>';

return $excerpt;
}

function custom_shortcoded_blog($atts)
{
$atts = shortcode_atts(array(
'name' => '',
), $atts, 'custom_repeater');

$page_id = 62126;

$repeater_items = get_field('nabor_dlya_shortkodov', $page_id);
if ($repeater_items) {
foreach ($repeater_items as $item) {
if ($item['name_shortcode'] == $atts['name']) {
$kartinka = $item['zobrazhennya'];
$opisani = $item['description'];
$title = $item['title'];
$knopka = $item['text_button'];
$class_poppup = $item['class_poppup'];
$button_link = $item['button_link'];

$button = '';

// Проверяем, есть ли класс попапа
if (!empty($class_poppup)) {
$button = '<span target="" style="cursor: pointer;"
   class="button-blog-cta button-blog-form-cta pum-trigger ' . esc_attr($class_poppup) . '">' . esc_html($knopka) .
   '</span>';
} else {
$button = '<a href="' . esc_url($button_link) . '" class="button-blog-cta button-blog-form-cta">' . esc_html($knopka) .
   '</a>';
}

$output = '<div class="blog-shortcode-cta" style="background-image: url(' . esc_url($kartinka) . ');">';
   $output .= '<div class="text-wrap">';
      $output .= '<h3><span id="i-2">' . esc_html($title) . '</span></h3>';
      $output .= '<p>' . esc_html($opisani) . '</p>';
      $output .= $button;
      $output .= '</div>';
   $output .= '</div>';

return $output;
}
}
}
return '';
}
add_shortcode('shortcode_block', 'custom_shortcoded_blog');
add_filter('gform_phone_formats', 'eight_phone_format');
function eight_phone_format($phone_formats)
{
$phone_formats['ei'] = array(
'label' => 'Minimum eight digits',
'mask' => false,
'regex' => '/^\d{8,}$/',
'instruction' => false,
);
return $phone_formats;
}

require_once get_theme_file_path() . '/inc/acf/blocks.php';

function mytheme_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter('woocommerce_checkout_fields','wedevs_remove_checkout_fields');
function wedevs_remove_checkout_fields( $fields ) {
unset( $fields['billing']['billing_state'] );
unset( $fields['billing']['billing_address_1'] );
unset( $fields['billing']['billing_address_2'] );
unset( $fields['billing']['billing_city'] );
unset( $fields['billing']['billing_postcode'] );
return $fields;
}

?>