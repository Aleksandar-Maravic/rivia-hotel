<?php
add_action('acf/init', 'rh_block_basic_content');

function rh_block_basic_content() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'basic-content',
            'title' => __('Basic Content Block'),
            'description' => __('Block that displays title, text and CTA'),
            'render_template' => 'template-parts/blocks/basic-content.php',
            'category' => 'custom-blocks',
            'icon' => 'layout',
            'mode' => 'edit',
            'keywords' => array('basic, content'),
            'example' => [
                'attributes' => array(
                    'mode' => 'preview',
                )
            ],
        ));
    }
}