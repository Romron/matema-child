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
    <section class="payment-process-illustration-section">
        <h4 class="title">

        </h4>
        <div class="row">
            <div class="col">
                <div class="image"></div>
            </div>
            <div class="col">
                <ul class="list">
                    <li class="li item">

                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php } ?>