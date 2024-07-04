<?php

/**
 * Register ACF Blocks
 */

function mathema_child_register_acf_blocks()
{
    $blocks = glob(get_theme_file_path() . '/blocks/**/*.json');

    foreach ($blocks as $block) {
        register_block_type($block);
    }
}
add_action('init', 'mathema_child_register_acf_blocks');
